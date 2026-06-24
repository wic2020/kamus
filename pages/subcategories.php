<?php
// Mencegah akses langsung tanpa melalui index.php
if(count(get_included_files()) == 1) die("Akses Ditolak!");
if (!isset($_SESSION['username'])) { echo "<script>window.location='index.php?hal=login';</script>"; exit; }

$user_id = $_SESSION['user_id'];
$category_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$page_title = "Vocabulary";

if ($category_id > 0) {
    $q_cat = $conn->query("SELECT category_name FROM categories WHERE category_id = $category_id");
    if ($q_cat && $q_cat->num_rows > 0) {
        $row_cat = $q_cat->fetch_assoc();
        $page_title = $row_cat['category_name'];
    }
}
?>

<!-- Tambahkan CSS Grid untuk mengatur 4 kolom dan responsif -->
<style>
    .features-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 Card per baris di Desktop */
        gap: 20px;
        margin-bottom: 30px;
    }

    /* Responsif untuk Tablet (Layar Sedang) -> 2 atau 3 kolom */
    @media (max-width: 992px) {
        .features-grid {
            grid-template-columns: repeat(2, 1fr); /* 2 Card per baris di Tablet */
        }
    }

    /* Responsif untuk Mobile (Layar Kecil) -> 1 kolom */
    @media (max-width: 576px) {
        .features-grid {
            grid-template-columns: 1fr; /* 1 Card per baris di HP */
        }
    }
</style>

<section class="section" style="padding-top: 150px; background: white; min-height: 80vh;">
    <!-- <div style="text-align: left; margin-bottom: 20px;">
        <a href="index.php?hal=landing" style="color: var(--text-gray); text-decoration: none; font-weight: 600;">&larr; Kembali ke Kategori</a>
    </div>
     -->
    <h2 class="section-title"><?= htmlspecialchars($page_title) ?></h2>
    
    <?php
    // JOIN dengan categories untuk mengambil category_name
    $sql_sub = "SELECT sc.*, c.category_name,
                (SELECT COUNT(word_id) FROM words WHERE subcategory_id = sc.subcategory_id) AS total_words,
                (SELECT COUNT(uw.word_id) FROM user_words uw 
                 JOIN words w ON uw.word_id = w.word_id 
                 WHERE w.subcategory_id = sc.subcategory_id 
                 AND uw.user_id = $user_id 
                 AND uw.status = 'memorized') AS memorized_words
                FROM subcategories sc
                JOIN categories c ON sc.category_id = c.category_id";

    if ($category_id > 0) {
        $sql_sub .= " WHERE sc.category_id = $category_id";
    }
    
    // Urutkan berdasarkan Kategori terlebih dahulu, lalu Subkategori
    $sql_sub .= " ORDER BY c.category_name ASC, sc.subcategory_name ASC";
    
    $res_sub = $conn->query($sql_sub);

    if ($res_sub && $res_sub->num_rows > 0) {
        $current_category = null;
        $is_first_group = true;

        while($row = $res_sub->fetch_assoc()) {
            
            // --- LOGIKA GROUPING KATEGORI ---
            if ($current_category !== $row['category_name']) {
                // Tutup div fitur-grid sebelumnya jika ini bukan grup pertama
                if (!$is_first_group) {
                    echo '</div>';
                }
                
                $current_category = $row['category_name'];
                
                // --- CETAK JUDUL KATEGORI (DIUPDATE) ---
                echo '<div style="display: flex; align-items: center; margin-top: 40px; margin-bottom: 25px; padding-bottom: 12px; border-bottom: 1px solid #e2e8f0;">';
                echo '  <div style="width: 5px; height: 26px; background-color: var(--primary); border-radius: 4px; margin-right: 12px;"></div>';
                echo '  <h3 style="margin: 0; font-size: 1.4rem; color: #1e293b; font-weight: 700; letter-spacing: -0.3px;">';
                echo '      <span style="font-size: 0.9rem; font-weight: 600; color: #64748b; text-transform: uppercase; letter-spacing: 1px; margin-right: 8px;">Kategori :</span>';
                echo        htmlspecialchars($current_category);
                echo '  </h3>';
                echo '</div>';
                // --- END CETAK JUDUL KATEGORI ---
                
                // Buka grid baru untuk subkategori
                echo '<div class="features-grid">';
                $is_first_group = false;
            }
            
            // Kalkulasi Progress
            $total_kata = (int)$row['total_words'];
            $kata_dihafal = (int)$row['memorized_words'];
            $persentase = ($total_kata > 0) ? round(($kata_dihafal / $total_kata) * 100) : 0;

            // Tampilan Card Subkategori
            echo '<div class="feature-box" style="border: 1px solid #e2e8f0; background: #f8fafc; text-align: left; display: flex; flex-direction: column; justify-content: space-between; border-radius: 10px; padding: 20px;">';
            
            echo '  <div>';
            echo '      <h4 style="margin-bottom:15px; color: var(--dark); font-size: 1.1rem; line-height: 1.4;">📚 '.htmlspecialchars($row['subcategory_name']).'</h4>';
            echo '  </div>';

            // --- PROGRESS BAR UI ---
            echo '  <div style="margin-bottom: 20px;">';
            echo '      <div style="display: flex; justify-content: space-between; align-items: center; font-size: 14px; color: #64748b; margin-bottom: 8px;">';
            echo '          <span>Progress: <strong style="color: #334155;">'.$kata_dihafal.' / '.$total_kata.'</strong> Kata</span>';
            echo '          <span style="font-weight: 700; font-size: 15px; color: var(--primary);">'.$persentase.'%</span>';
            echo '      </div>';
            
            echo '      <div style="width: 100%; background: #e2e8f0; border-radius: 6px; height: 8px; overflow: hidden;">';
            
            $bar_color = ($persentase == 100 && $total_kata > 0) ? '#10b981' : 'var(--secondary)';
            
            echo '          <div style="width: '.$persentase.'%; background: '.$bar_color.'; height: 100%; border-radius: 6px; transition: width 0.5s ease-in-out;"></div>';
            echo '      </div>';
            echo '  </div>';
            // --- END PROGRESS BAR ---

            // Tombol Mulai
            $btn_label = ($persentase == 100 && $total_kata > 0) ? 'Ulangi Latihan' : 'Lihat Kata';
            $btn_style = ($persentase == 100 && $total_kata > 0) ? 'background: #1e1b4b; color: white;' : '';

            echo '  <a href="index.php?hal=words&id='.$row['subcategory_id'].'" class="btn-main" style="padding: 12px; font-size: 14px; text-align: center; border-radius: 8px; display: block; text-decoration: none; font-weight: 600; '.$btn_style.'">'.$btn_label.'</a>';
            echo '</div>';
        }
        
        // Menutup div features-grid terakhir
        if (!$is_first_group) {
            echo '</div>';
        }
        
    } else {
        echo "<div style='padding: 40px; background: #fff1f2; border-radius: 10px; color: #be123c; text-align: center;'>Belum ada materi pada kategori ini.</div>";
    }
    ?>
</section>