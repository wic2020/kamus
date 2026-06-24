<?php
// pages/quiz.php
// Fitur Kuis Kosakata Modern: Instan Review & Custom Radio Button Layout

if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='index.php?hal=login';</script>";
    exit;
}

$user_id = (int)$_SESSION['user_id'];

// Ambil daftar kategori (Jenis Kata) utama
$categories = [];
$q_cat = "SELECT category_id, category_name FROM categories ORDER BY category_name ASC";
$res_cat = $conn->query($q_cat);
if ($res_cat) {
    while ($row = $res_cat->fetch_assoc()) {
        $categories[] = $row;
    }
}

// PROSES 2 dihapus — skor kini dihitung secara live di JavaScript

/*
|--------------------------------------------------------------------------
| PROSES 3: MEKANISME MEMBUAT SOAL KUIS (Tampilan Lembar Soal)
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'start_quiz') {
    $scope = $_POST['scope'] ?? 'all';
    $cat_filter = isset($_POST['category_id']) ? (int)$_POST['category_id'] : 0;

    if ($scope === 'memorized') {
        $query_quiz = "
            SELECT w.*, s.category_id FROM words w
            JOIN user_words uw ON w.word_id = uw.word_id
            LEFT JOIN subcategories s ON w.subcategory_id = s.subcategory_id
            WHERE uw.user_id = ? AND uw.status = 'memorized'
        ";
    } else {
        $query_quiz = "
            SELECT w.*, s.category_id FROM words w
            LEFT JOIN subcategories s ON w.subcategory_id = s.subcategory_id
            WHERE 1=1
        ";
    }

    if ($cat_filter > 0) {
        $query_quiz .= " AND s.category_id = ?";
    }

    $query_quiz .= " ORDER BY RAND() LIMIT 25";

    $stmt_quiz = $conn->prepare($query_quiz);

    if ($cat_filter > 0) {
        if ($scope === 'memorized') {
            $stmt_quiz->bind_param("ii", $user_id, $cat_filter);
        } else {
            $stmt_quiz->bind_param("i", $cat_filter);
        }
    } else {
        if ($scope === 'memorized') {
            $stmt_quiz->bind_param("i", $user_id);
        }
    }

    $stmt_quiz->execute();
    $res_quiz = $stmt_quiz->get_result();

    $quiz_words = [];
    while ($row = $res_quiz->fetch_assoc()) {
        $word_text = $row['word_name'] ?? 'Word';

        $quiz_words[] = [
            'word_id' => $row['word_id'],
            'word_text' => $word_text,
            'translation' => $row['translation'],
            'category_id' => $row['category_id'] ?? null
        ];
    }

    $stmt_quiz->close();

    if (count($quiz_words) < 1) {
        echo "
        <section class='section' style='padding-top:150px;'>
            <div class='container' style='max-width:600px; margin:0 auto; text-align:center; background:white; padding:40px; border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.06);'>
                <h3 style='color:var(--dark); margin-bottom:15px;'>Kata Tidak Mencukupi</h3>
                <p style='color:var(--text-gray); margin-bottom:20px;'>Kriteria jenis kata yang Anda pilih belum tersedia atau jumlahnya kurang dari batas minimal pengerjaan.</p>
                <a href='index.php?hal=quiz' class='btn-main' style='text-decoration:none;'>Kembali dan Ubah Pengaturan</a>
            </div>
        </section>";

        // PENTING:
        // Gunakan return, bukan exit, agar index.php tetap melanjutkan render footer dan JavaScript navbar.
        return;
    }

    $total_quiz = count($quiz_words);
    ?>

<section class="section" style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container" style="max-width: 750px; margin: 0 auto; padding: 0 20px;">
        <h2 class="section-title" style="margin-bottom: 5px;">Kuis Kosakata</h2>
        <p style="text-align: center; color: var(--text-gray); margin-bottom: 25px;">
            Pilihlah satu arti yang paling tepat. Jawaban akan langsung dinilai secara otomatis.
        </p>

        <!-- Live Score Bar -->
        <div id="score-bar"
            style="background: white; border-radius: 14px; padding: 18px 25px; box-shadow: 0 5px 20px rgba(0,0,0,0.06); margin-bottom: 30px; display: flex; align-items: center; justify-content: space-between; gap: 20px;">
            <div style="display: flex; gap: 25px; align-items: center;">
                <div style="text-align: center;">
                    <div id="score-benar" style="font-size: 1.6rem; font-weight: 800; color: #34c759; line-height: 1;">0
                    </div>
                    <div
                        style="font-size: 0.72rem; font-weight: 600; color: var(--text-gray); text-transform: uppercase;">
                        Benar</div>
                </div>

                <div style="text-align: center;">
                    <div id="score-salah" style="font-size: 1.6rem; font-weight: 800; color: #ff3b30; line-height: 1;">0
                    </div>
                    <div
                        style="font-size: 0.72rem; font-weight: 600; color: var(--text-gray); text-transform: uppercase;">
                        Salah</div>
                </div>

                <div style="text-align: center;">
                    <div id="score-sisa" style="font-size: 1.6rem; font-weight: 800; color: #94a3b8; line-height: 1;">
                        <?= $total_quiz ?>
                    </div>
                    <div
                        style="font-size: 0.72rem; font-weight: 600; color: var(--text-gray); text-transform: uppercase;">
                        Sisa</div>
                </div>
            </div>

            <div style="flex: 1; min-width: 80px;">
                <div style="background: #f1f5f9; border-radius: 99px; height: 10px; overflow: hidden;">
                    <div id="progress-bar"
                        style="height: 100%; width: 0%; background: linear-gradient(90deg, #34c759, #30d158); border-radius: 99px; transition: width 0.4s ease;">
                    </div>
                </div>
                <div id="progress-label"
                    style="font-size: 0.75rem; color: var(--text-gray); text-align: right; margin-top: 4px;">
                    0 / <?= $total_quiz ?> dijawab
                </div>
            </div>
        </div>

        <!-- Quiz Cards -->
        <div style="display: flex; flex-direction: column; gap: 25px;">
            <?php
    foreach ($quiz_words as $index => $q_word):
        $correct = $q_word['translation'];
        $current_cat_id = (isset($q_word['category_id']) && $q_word['category_id'] !== null) ? (int)$q_word['category_id'] : 0;

        $distractors = [];

        if ($current_cat_id > 0) {
            $q_dist = "
                SELECT w.translation 
                FROM words w 
                JOIN subcategories s ON w.subcategory_id = s.subcategory_id 
                WHERE s.category_id = ? 
                AND w.translation != ? 
                ORDER BY RAND() 
                LIMIT 15
            ";

            $stmt_dist = $conn->prepare($q_dist);
            if ($stmt_dist) {
                $stmt_dist->bind_param("is", $current_cat_id, $correct);
                $stmt_dist->execute();
                $res_dist = $stmt_dist->get_result();

                while ($r = $res_dist->fetch_assoc()) {
                    $distractors[] = $r['translation'];
                }

                $stmt_dist->close();
            }
        }

        if (count($distractors) < 3) {
            $q_fallback = "
                SELECT translation 
                FROM words 
                WHERE translation != ? 
                ORDER BY RAND() 
                LIMIT 10
            ";

            $stmt_fall = $conn->prepare($q_fallback);
            if ($stmt_fall) {
                $stmt_fall->bind_param("s", $correct);
                $stmt_fall->execute();
                $res_fall = $stmt_fall->get_result();

                while ($r = $res_fall->fetch_assoc()) {
                    $distractors[] = $r['translation'];
                }

                $stmt_fall->close();
            }
        }

        shuffle($distractors);

        $options = array_merge([$correct], array_slice(array_unique($distractors), 0, 3));
        shuffle($options);
        ?>

            <div class="quiz-card" data-correct="<?= htmlspecialchars($correct) ?>"
                style="background: white; border-radius: 16px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s;">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:5px;">
                    <span
                        style="font-size: 0.85rem; font-weight: 700; color: var(--primary); text-transform: uppercase;">
                        <?= $index + 1 ?> / <?= $total_quiz ?>
                    </span>

                    <span class="badge-result"
                        style="display:none; padding: 4px 12px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; color: white;"></span>
                </div>

                <h3 style="margin: 0 0 20px 0; font-size: 1.4rem; color: var(--dark);">
                    <span style="color: var(--primary); font-weight: 800; border-bottom: 2px dashed #cbd5e1;">
                        <?= htmlspecialchars($q_word['word_text']) ?>
                    </span>
                </h3>

                <div class="options-container" style="display: flex; flex-direction: column; gap: 12px;">
                    <?php foreach ($options as $option): ?>
                    <button type="button" class="opt-btn" data-value="<?= htmlspecialchars($option) ?>"
                        style="display:block; width:100%; background:#f8fafc; padding:14px 18px; border-radius:10px; cursor:pointer; border:1px solid #e2e8f0; font-weight:500; font-size:0.95rem; color:var(--dark); text-align:left; transition:all 0.2s; font-family:inherit;">
                        <?= htmlspecialchars($option) ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php endforeach; ?>
        </div>

        

        <!-- Hasil Akhir -->
        <div id="final-result"
            style="display:none; background:white; border-radius:18px; padding:35px; box-shadow:0 10px 30px rgba(0,0,0,0.08); text-align:center; margin-top:40px;">
            <div id="final-emoji" style="font-size:3rem; margin-bottom:10px;"></div>
            <div id="final-persen" style="font-size:3.5rem; font-weight:800; line-height:1; margin-bottom:8px;"></div>
            <p id="final-keterangan"
                style="font-size:1rem; color:var(--text-gray); font-weight:600; margin-bottom:30px;"></p>

            <div style="display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <form action="index.php?hal=quiz" method="POST" style="display:inline;">
                    <input type="hidden" name="action" value="start_quiz">
                    <input type="hidden" name="scope" value="<?= htmlspecialchars($scope) ?>">
                    <input type="hidden" name="category_id" value="<?= htmlspecialchars($cat_filter) ?>">
                    <button type="submit" class="btn-main"
                        style="padding:12px 28px; border:none; cursor:pointer; font-weight:700;">
                        🔁 Ulangi Quiz
                    </button>
                </form>

                <a href="index.php?hal=quiz" class="btn-main"
                    style="padding:12px 28px; text-decoration:none; background:#64748b; font-weight:700;">
                    🎯 Quiz Lain
                </a>
            </div>
        </div>


        <!-- Hasil Akhir -->
        <div id="final-result"
            style="display:none; background:white; border-radius:18px; padding:35px; box-shadow:0 10px 30px rgba(0,0,0,0.08); text-align:center; margin-top:40px;">
            <div id="final-emoji" style="font-size:3rem; margin-bottom:10px;"></div>
            <div id="final-persen" style="font-size:3.5rem; font-weight:800; line-height:1; margin-bottom:8px;"></div>
            <p id="final-keterangan"
                style="font-size:1rem; color:var(--text-gray); font-weight:600; margin-bottom:30px;"></p>

            <div style="display:flex; justify-content:center; gap:15px; flex-wrap:wrap;">
                <form action="index.php?hal=quiz" method="POST" style="display:inline;">
                    <input type="hidden" name="action" value="start_quiz">
                    <input type="hidden" name="scope" value="<?= htmlspecialchars($scope) ?>">
                    <input type="hidden" name="category_id" value="<?= htmlspecialchars($cat_filter) ?>">
                    <button type="submit" class="btn-main"
                        style="padding:12px 28px; border:none; cursor:pointer; font-weight:700;">
                        🔁 Ulangi Quiz
                    </button>
                </form>

                <a href="index.php?hal=quiz" class="btn-main"
                    style="padding:12px 28px; text-decoration:none; background:#64748b; font-weight:700;">
                    🎯 Quiz Lain
                </a>
            </div>
        </div>
    </div>
</section>

<script>
(function() {
    const cards = document.querySelectorAll('.quiz-card');
    const total = cards.length;

    let answered = 0;
    let benar = 0;
    let salah = 0;

    function updateScoreBar() {
        document.getElementById('score-benar').textContent = benar;
        document.getElementById('score-salah').textContent = salah;
        document.getElementById('score-sisa').textContent = total - answered;
        document.getElementById('progress-bar').style.width = (answered / total * 100) + '%';
        document.getElementById('progress-label').textContent = answered + ' / ' + total + ' dijawab';
    }

    function showFinal() {
        const persen = Math.round(benar / total * 100);
        const el = document.getElementById('final-result');

        document.getElementById('final-persen').textContent = persen + '%';
        document.getElementById('final-persen').style.color = persen >= 70 ? '#34c759' : '#ff3b30';
        document.getElementById('final-emoji').textContent = persen === 100 ? '🏆' : persen >= 70 ? '🎉' : '💪';
        document.getElementById('final-keterangan').textContent =
            'Kamu menjawab benar ' + benar + ' dari ' + total + ' soal.';

        el.style.display = 'block';
        el.scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    }

    cards.forEach(card => {
        const correct = card.getAttribute('data-correct');
        const btns = card.querySelectorAll('.opt-btn');
        const badge = card.querySelector('.badge-result');
        const optsWrap = card.querySelector('.options-container');

        btns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();

                if (optsWrap.style.pointerEvents === 'none') {
                    return;
                }

                optsWrap.style.pointerEvents = 'none';

                const chosen = btn.getAttribute('data-value');
                const isCorrect = chosen.trim().toLowerCase() === correct.trim()
                    .toLowerCase();

                btns.forEach(b => {
                    const val = b.getAttribute('data-value');

                    b.style.cursor = 'default';

                    if (val.trim().toLowerCase() === correct.trim().toLowerCase()) {
                        b.style.background = '#e6f4ea';
                        b.style.borderColor = '#34c759';
                        b.style.color = '#137333';
                        b.style.fontWeight = '700';
                    } else if (b === btn) {
                        b.style.background = '#fce8e6';
                        b.style.borderColor = '#ff3b30';
                        b.style.color = '#c5221f';
                    } else {
                        b.style.opacity = '0.45';
                    }
                });

                badge.style.display = 'inline-block';
                badge.style.background = isCorrect ? '#34c759' : '#ff3b30';
                badge.textContent = isCorrect ? '✓ Benar' : '✗ Salah';

                answered++;

                if (isCorrect) {
                    benar++;
                } else {
                    salah++;
                }

                updateScoreBar();

                if (answered === total) {
                    setTimeout(showFinal, 600);
                }
            });

            btn.addEventListener('mouseenter', function() {
                if (optsWrap.style.pointerEvents !== 'none') {
                    btn.style.borderColor = 'var(--primary)';
                    btn.style.background = 'rgba(78,115,223,0.05)';
                }
            });

            btn.addEventListener('mouseleave', function() {
                if (optsWrap.style.pointerEvents !== 'none') {
                    btn.style.borderColor = '#e2e8f0';
                    btn.style.background = '#f8fafc';
                }
            });
        });
    });

    updateScoreBar();
})();
</script>

<?php
    // PENTING:
    // Gunakan return, bukan exit, agar index.php tetap melanjutkan render footer dan JavaScript navbar.
    return;
}

/*
|--------------------------------------------------------------------------
| PROSES 1: HALAMAN UTAMA KONFIGURASI / SETTING KUIS (TAMPILAN DEFAULT)
|--------------------------------------------------------------------------
*/
?>

<section class="section" style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container" style="max-width: 650px; margin: 0 auto; padding: 0 20px;">

        <h2 class="section-title">Uji Kemampuan Kosakata</h2>
        <p style="text-align: center; color: var(--text-gray); margin-top: -15px; margin-bottom: 35px;">
            Atur parameter kuis di bawah ini untuk memulai latihan mengingat arti kosakata bahasa Inggris.
        </p>

        <div style="background: white; border-radius: 18px; padding: 35px; box-shadow: 0 10px 30px rgba(0,0,0,0.06);">
            <form action="index.php?hal=quiz" method="POST" style="display: flex; flex-direction: column; gap: 25px;">
                <input type="hidden" name="action" value="start_quiz">

                <div>
                    <label
                        style="display: block; font-weight: 700; color: var(--dark); margin-bottom: 10px; font-size: 0.95rem;">
                        1. Cakupan Kosakata
                    </label>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                        <label class="custom-radio-btn"
                            style="border: 2px solid #e2e8f0; border-radius: 12px; padding: 15px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: all 0.2s; font-weight: 700; color: var(--dark); text-align: center;">
                            <input type="radio" name="scope" value="all" checked style="display: none;">
                            <span>Semua Kata</span>
                        </label>

                        <label class="custom-radio-btn"
                            style="border: 2px solid #e2e8f0; border-radius: 12px; padding: 15px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: all 0.2s; font-weight: 700; color: var(--dark); text-align: center;">
                            <input type="radio" name="scope" value="memorized" style="display: none;">
                            <span>Sudah Hafal</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label
                        style="display: block; font-weight: 700; color: var(--dark); margin-bottom: 12px; font-size: 0.95rem;">
                        2. Jenis Kata
                    </label>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <label class="custom-cat-btn"
                            style="border: 2px solid #e2e8f0; border-radius: 12px; padding: 14px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: all 0.2s; font-weight: 600; font-size:0.9rem; color: var(--dark); text-align: center;">
                            <input type="radio" name="category_id" value="0" checked style="display: none;">
                            <span>Semua Jenis Kata</span>
                        </label>

                        <?php foreach ($categories as $cat): ?>
                        <label class="custom-cat-btn"
                            style="border: 2px solid #e2e8f0; border-radius: 12px; padding: 14px; display: flex; justify-content: center; align-items: center; cursor: pointer; transition: all 0.2s; font-weight: 600; font-size:0.9rem; color: var(--dark); text-align: center;">
                            <input type="radio" name="category_id" value="<?= $cat['category_id'] ?>"
                                style="display: none;">
                            <span><?= htmlspecialchars($cat['category_name']) ?></span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div style="margin-top: 10px;">
                    <button type="submit" class="btn-main"
                        style="width: 100%; padding: 14px; font-size: 1.05rem; font-weight: 600; border: none; cursor: pointer; text-align: center;">
                        Mulai Kuis Sekarang
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
function handleCustomRadio(groupSelector, activeBg, activeBorder, activeColor) {
    const labels = document.querySelectorAll(groupSelector);

    function updateStyles() {
        labels.forEach(label => {
            const radio = label.querySelector('input[type="radio"]');

            if (radio.checked) {
                label.style.borderColor = activeBorder;
                label.style.background = activeBg;
                label.style.color = activeColor;
            } else {
                label.style.borderColor = '#e2e8f0';
                label.style.background = 'white';
                label.style.color = 'var(--dark)';
            }
        });
    }

    labels.forEach(label => {
        label.addEventListener('click', function(e) {
            e.stopPropagation();
            label.querySelector('input[type="radio"]').checked = true;
            updateStyles();
        });
    });

    updateStyles();
}

handleCustomRadio('.custom-radio-btn', 'rgba(78, 115, 223, 0.05)', 'var(--primary)', 'var(--primary)');
handleCustomRadio('.custom-cat-btn', 'rgba(78, 115, 223, 0.05)', 'var(--primary)', 'var(--primary)');
</script>