<?php
// Mencegah akses langsung tanpa melalui index.php
if(count(get_included_files()) == 1) die("Akses Ditolak!");
if (!isset($_SESSION['username'])) { echo "<script>window.location='index.php?hal=login';</script>"; exit; }

$user_id = $_SESSION['user_id'];

// --- BLOK PENANGANAN AJAX UNTUK TOGGLE HAFAL ---
if (isset($_POST['action']) && $_POST['action'] == 'toggle_hafal') {
    @ob_clean(); 
    header('Content-Type: application/json');
    
    $word_id = (int)$_POST['word_id'];
    
    $cek = $conn->query("SELECT * FROM user_words WHERE user_id = $user_id AND word_id = $word_id");
    
    if ($cek && $cek->num_rows > 0) {
        $row = $cek->fetch_assoc();
        $new_status = ($row['status'] == 'memorized') ? 'learning' : 'memorized';
        $conn->query("UPDATE user_words SET status = '$new_status', memorized_at = CURRENT_TIMESTAMP WHERE user_id = $user_id AND word_id = $word_id");
        echo json_encode(['success' => true, 'status' => $new_status]);
    } else {
        $conn->query("INSERT INTO user_words (user_id, word_id, status, memorized_at) VALUES ($user_id, $word_id, 'memorized', CURRENT_TIMESTAMP)");
        echo json_encode(['success' => true, 'status' => 'memorized']);
    }
    exit;
}
// --- END AJAX ---

$subcat_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$show_all = isset($_GET['show_all']) && $_GET['show_all'] == 1 ? 1 : 0;

$subcat_nama = "Daftar Kosakata";
$cat_id = 0;

// Ambil Nama Subkategori
if ($subcat_id > 0) {
    $q_sub = $conn->query("SELECT subcategory_name, category_id FROM subcategories WHERE subcategory_id = $subcat_id");
    if ($q_sub && $q_sub->num_rows > 0) {
        $row_sub = $q_sub->fetch_assoc();
        $subcat_nama = $row_sub['subcategory_name'];
        $cat_id = $row_sub['category_id'];
    }
}

// --- MENGHITUNG PROGRESS ---
$sql_progress = "SELECT 
                    COUNT(w.word_id) as total_words,
                    SUM(CASE WHEN uw.status = 'memorized' THEN 1 ELSE 0 END) as memorized_words
                 FROM words w
                 LEFT JOIN user_words uw ON w.word_id = uw.word_id AND uw.user_id = $user_id
                 WHERE w.subcategory_id = $subcat_id";
$res_progress = $conn->query($sql_progress);
$prog_data = $res_progress->fetch_assoc();

$total_kata = (int)$prog_data['total_words'];
$kata_dihafal = (int)$prog_data['memorized_words'];
$persentase = ($total_kata > 0) ? round(($kata_dihafal / $total_kata) * 100) : 0;
?>

<style>
    .words-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 20px; }
    @media (max-width: 1024px) { .words-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 600px) { .words-grid { grid-template-columns: 1fr; } }

    .word-card { background: white; border: 2px solid #e2e8f0; border-radius: 15px; padding: 25px 20px; text-align: center; transition: all 0.3s ease; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 10px rgba(0,0,0,0.02); }
    .word-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.05); border-color: var(--primary); }
    .word-card.memorized { border-color: #10b981; background: #f0fdf4; }

    .speaker-btn { background: none; border: none; font-size: 22px; cursor: pointer; margin-left: 10px; transition: transform 0.2s; vertical-align: middle; }
    .speaker-btn:hover { transform: scale(1.2); }

    .btn-toggle-hafal { width: 100%; padding: 10px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; transition: background 0.3s; margin-top: 20px; }
    .btn-belum-hafal { background: #f1f5f9; color: var(--dark); }
    .btn-belum-hafal:hover { background: var(--secondary); }
    .btn-sudah-hafal { background: #10b981; color: white; }

    /* Style Progress Bar */
    .progress-container { background: white; padding: 20px; border-radius: 15px; margin-bottom: 30px; box-shadow: 0 4px 10px rgba(0,0,0,0.02); border: 1px solid #e2e8f0; }
    .progress-bar-bg { width: 100%; height: 12px; background: #e2e8f0; border-radius: 10px; overflow: hidden; margin-top: 10px; }
    .progress-bar-fill { height: 100%; background: var(--primary); border-radius: 10px; transition: width 0.5s ease-in-out; }
</style>

<section class="section" style="padding-top: 130px; background: #f8fafc; min-height: 80vh;">
    
    <!-- Navigasi & Toggle Action -->
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; margin-bottom: 20px; gap: 15px;">
        <a href="index.php?hal=subcategories<?= ($cat_id > 0) ? '&id='.$cat_id : '' ?>" style="color: var(--text-gray); text-decoration: none; font-weight: 600;">
            &larr; Kembali
        </a>
        <a href="index.php?hal=words&id=<?= $subcat_id ?>&show_all=<?= $show_all ? 0 : 1 ?>" class="btn-main" style="padding: 10px 20px; font-size: 14px; background: <?= $show_all ? '#e2e8f0' : 'var(--secondary)' ?>;">
            <?= $show_all ? '👁️ Sembunyikan Kata Dihafal' : '📂 Tampilkan Semua Kata' ?>
        </a>
    </div>

    <h2 class="section-title" style="margin-bottom: 20px;"><?= htmlspecialchars($subcat_nama) ?></h2>

    <!-- PROGRESS BAR UI -->
    <div class="progress-container">
        <div style="display: flex; justify-content: space-between; font-weight: 600; color: var(--dark); font-size: 15px;">
            <span>Progress Hafalan</span>
            <span id="progress-text"><?= $kata_dihafal ?> / <?= $total_kata ?> Kata (<span id="progress-percent"><?= $persentase ?></span>%)</span>
        </div>
        <div class="progress-bar-bg">
            <div id="progress-fill" class="progress-bar-fill" style="width: <?= $persentase ?>%;"></div>
        </div>
    </div>
    
    <style>
    /* Tambahkan CSS ini untuk menaruh icon speaker di kanan atas */
    .word-card {
        position: relative; /* Penting agar child absolute berfungsi */
        padding-top: 40px;  /* Memberi ruang agar teks tidak tertabrak speaker */
    }
    .speaker-btn {
        position: absolute;
        top: 15px;
        right: 15px;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        padding: 5px;
        transition: transform 0.2s;
    }
    .speaker-btn:hover {
        transform: scale(1.2);
    }
</style>

<div class="words-grid">
    <?php
    $sql_words = "SELECT w.*, uw.status AS user_status 
                  FROM words w 
                  LEFT JOIN user_words uw ON w.word_id = uw.word_id AND uw.user_id = $user_id 
                  WHERE w.subcategory_id = $subcat_id ";

    if ($show_all == 0) {
        $sql_words .= " AND (uw.status IS NULL OR uw.status != 'memorized') ";
    }
    $sql_words .= " ORDER BY w.word_id ASC";

    $res_words = $conn->query($sql_words);

    if ($res_words && $res_words->num_rows > 0) {
        while($row = $res_words->fetch_assoc()) {
            $is_memorized = ($row['user_status'] == 'memorized');
            $card_class = $is_memorized ? "word-card memorized" : "word-card";
            $btn_class = $is_memorized ? "btn-toggle-hafal btn-sudah-hafal" : "btn-toggle-hafal btn-belum-hafal";
            
            // Tambahkan Ikon pada Teks Tombol
            $btn_text = $is_memorized ? "<span>✔</span> Dihafal" : "<span>🔖</span> Tandai Hafal";
            
            echo '<div class="'.$card_class.'" id="card-'.$row['word_id'].'">';
            
            // 1. Pindahkan Tombol Speaker ke sini (Paling Atas dalam Card)
            echo '  <button type="button" class="speaker-btn" title="Dengarkan" onclick="playAudio(\''.addslashes($row['word_name']).'\')">🔊</button>';
            
            echo '  <div>';
            echo '      <h3 style="font-size: 24px; color: var(--primary); margin-bottom: 5px;">';
            echo            htmlspecialchars($row['word_name']);
            echo '      </h3>';
            
            if(!empty($row['ipa'])) {
                echo '  <p style="font-size: 15px; color: #64748b; margin-bottom: 5px;">/'.htmlspecialchars($row['ipa']).'/</p>';
            }
            
            echo '      <p style="font-size: 18px; font-weight: 600; color: var(--dark); margin-bottom: 15px;">'.htmlspecialchars($row['translation']).'</p>';
            
            if(!empty($row['note'])) {
                echo '  <div style="background: #eef2ff; padding: 10px; border-radius: 8px; font-size: 13px; font-style: italic; color: var(--text-gray); margin-bottom: 10px;">';
                echo '      "'.htmlspecialchars($row['note']).'"';
                echo '  </div>';
            }
            echo '  </div>';
            
            // 2. Tombol Hafal dengan Ikon
            echo '  <button type="button" id="btn-hafal-'.$row['word_id'].'" class="'.$btn_class.'" onclick="toggleHafal('.$row['word_id'].')">';
            echo '      '.$btn_text;
            echo '  </button>';
            echo '</div>';
        }
    } else {
        // ... bagian else tetap sama ...
        echo "<div style='grid-column: 1 / -1; padding: 40px; background: #fff1f2; border-radius: 10px; color: #be123c;'>";
        if ($total_kata > 0) {
            echo "Hebat! Semua kosakata pada kategori ini sudah Anda hafal 🎉";
        } else {
            echo "Belum ada kosakata yang ditambahkan pada subkategori ini.";
        }
        echo "</div>";
    }
    ?>
</div>
</section>

<script>
    // Variabel Progress JS
    let totalKata = <?= $total_kata ?>;
    let kataDihafal = <?= $kata_dihafal ?>;

    function playAudio(wordText) {
        if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance(wordText);
            utterance.lang = 'en-US';
            utterance.rate = 0.9;
            window.speechSynthesis.speak(utterance);
        } else {
            alert("Browser Anda tidak mendukung fitur suara.");
        }
    }

    function updateProgressUI() {
        let percent = 0;
        if (totalKata > 0) {
            percent = Math.round((kataDihafal / totalKata) * 100);
        }
        
        // Update Teks dan Lebar Bar
        document.getElementById('progress-text').innerHTML = `${kataDihafal} / ${totalKata} Kata (<span id="progress-percent">${percent}</span>%)`;
        document.getElementById('progress-fill').style.width = `${percent}%`;
    }

    function toggleHafal(wordId) {
        const card = document.getElementById('card-' + wordId);
        const btn = document.getElementById('btn-hafal-' + wordId);
        const isShowAllMode = <?= $show_all ?>;

        const formData = new FormData();
        formData.append('action', 'toggle_hafal');
        formData.append('word_id', wordId);

        btn.innerHTML = 'Memproses...';

        fetch('index.php?hal=words', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                if (data.status === 'memorized') {
                    kataDihafal++; // Tambah counter dihafal
                    
                    if (isShowAllMode === 0) {
                        card.style.opacity = '0';
                        setTimeout(() => { card.style.display = 'none'; }, 300);
                    } else {
                        card.classList.add('memorized');
                        btn.className = 'btn-toggle-hafal btn-sudah-hafal';
                        btn.innerHTML = '✔ Dihafal';
                    }
                } else {
                    kataDihafal--; // Kurangi counter dihafal
                    card.classList.remove('memorized');
                    btn.className = 'btn-toggle-hafal btn-belum-hafal';
                    btn.innerHTML = 'Tandai Hafal';
                }
                
                // Panggil fungsi update progress bar
                updateProgressUI();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan jaringan. Pastikan ob_start() sudah ada di index.php');
            btn.innerHTML = 'Coba Lagi';
        });
    }
</script>