<?php
// pages/progress_all.php
// Menampilkan progress semua user, dan detail per kategori/subkategori jika user tertentu diklik

if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='index.php?hal=login';</script>";
    exit;
}

$current_username = $_SESSION['username'] ?? '';

// Batasi hanya administrator agar data semua user tidak bisa dilihat user biasa
if ($current_username !== 'administrator') {
    echo "
    <section class='section' style='padding-top:150px; padding-bottom:80px;'>
        <div class='container' style='max-width:900px; margin:0 auto; padding:0 20px;'>
            <div style='background:white; padding:35px; border-radius:18px; box-shadow:0 10px 30px rgba(0,0,0,0.06); text-align:center;'>
                <h2 style='color:var(--dark); margin-bottom:10px;'>Akses Ditolak</h2>
                <p style='color:var(--text-gray);'>Halaman progress semua user hanya dapat diakses oleh administrator.</p>
                <a href='index.php?hal=progress' class='btn-main' style='display:inline-block; margin-top:20px; text-decoration:none;'>Kembali ke Progress Saya</a>
            </div>
        </div>
    </section>";
    exit;
}

/*
|--------------------------------------------------------------------------
| LOGIKA DETIL USER (Jika parameter user_id diset via GET)
|--------------------------------------------------------------------------
*/
if (isset($_GET['user_id'])) {
    $target_user_id = (int) $_GET['user_id'];

    // 1. Ambil nama user target
    $stmt_user = $conn->prepare("SELECT username FROM users WHERE user_id = ?");
    $stmt_user->bind_param("i", $target_user_id);
    $stmt_user->execute();
    $res_target_user = $stmt_user->get_result();
    
    if ($res_target_user->num_rows === 0) {
        echo "<section class='section' style='padding-top:150px;'><h2>404 - User Tidak Ditemukan</h2></section>";
        exit;
    }
    $target_user = $res_target_user->fetch_assoc();
    $target_username = $target_user['username'];
    $stmt_user->close();

    // 2. Ambil data struktur Kategori & Subkategori sekaligus jumlah hafalan user
    $query_materi = "
        SELECT 
            c.category_id,
            c.category_name,
            s.subcategory_id,
            s.subcategory_name,
            COUNT(w.word_id) AS total_kata,
            SUM(CASE WHEN uw.status = 'memorized' THEN 1 ELSE 0 END) AS jumlah_hafalan
        FROM categories c
        LEFT JOIN subcategories s ON c.category_id = s.category_id
        LEFT JOIN words w ON s.subcategory_id = w.subcategory_id
        LEFT JOIN user_words uw ON w.word_id = uw.word_id AND uw.user_id = ?
        GROUP BY c.category_id, c.category_name, s.subcategory_id, s.subcategory_name
        ORDER BY c.category_name ASC, s.subcategory_name ASC
    ";
    
    $stmt_mat = $conn->prepare($query_materi);
    $stmt_mat->bind_param("i", $target_user_id);
    $stmt_mat->execute();
    $res_mat = $stmt_mat->get_result();

    // Kelompokkan data hasil query ke dalam Array berstruktur pohon (Tree Structure)
    $data_kategori = [];
    $grand_total_kata = 0;
    $grand_jumlah_hafalan = 0;

    while ($row = $res_mat->fetch_assoc()) {
        $cat_id = $row['category_id'];
        
        if (!isset($data_kategori[$cat_id])) {
            $data_kategori[$cat_id] = [
                'category_name' => $row['category_name'],
                'total_kata' => 0,
                'jumlah_hafalan' => 0,
                'subcategories' => []
            ];
        }

        if ($row['subcategory_id'] !== null) {
            $data_kategori[$cat_id]['subcategories'][] = [
                'subcategory_name' => $row['subcategory_name'],
                'total_kata' => (int)$row['total_kata'],
                'jumlah_hafalan' => (int)$row['jumlah_hafalan']
            ];
            
            // Akumulasikan ke level Kategori
            $data_kategori[$cat_id]['total_kata'] += (int)$row['total_kata'];
            $data_kategori[$cat_id]['jumlah_hafalan'] += (int)$row['jumlah_hafalan'];

            // Akumulasikan ke Grand Total (Bawah)
            $grand_total_kata += (int)$row['total_kata'];
            $grand_jumlah_hafalan += (int)$row['jumlah_hafalan'];
        }
    }
    $stmt_mat->close();
    ?>

    <style>
        /* Container Saklar */
        .ios-switch-container {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #f1f5f9;
            padding: 8px 16px;
            border-radius: 30px;
            user-select: none;
        }
        .ios-switch-label {
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--dark);
        }
        /* Struktur Dasar Switch */
        .ios-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 28px;
        }
        .ios-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        /* Slider Latar Belakang (Kondisi Mati / Off) */
        .ios-slider {
            position: absolute;
            cursor: pointer;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: #e2e8f0;
            transition: .3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 34px;
        }
        /* Bulatan Penggerak (Knob) */
        .ios-slider:before {
            position: absolute;
            content: "";
            height: 24px;
            width: 24px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: .3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 50%;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
        }
        /* Kondisi Hidup / On (Warna hijau khas iOS) */
        .ios-switch input:checked + .ios-slider {
            background-color: #34c759;
        }
        /* Animasi Bulatan Bergeser ke Kanan saat Aktif */
        .ios-switch input:checked + .ios-slider:before {
            transform: translateX(22px);
        }
    </style>

    <section class="section" style="padding-top: 150px; padding-bottom: 80px;">
        <div class="container" style="max-width: 950px; margin: 0 auto; padding: 0 20px;">
            
            <div style="margin-bottom: 25px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
                <a href="index.php?hal=progress_all" style="text-decoration: none; color: var(--primary); font-weight: 600;">&larr; Kembali ke Semua User</a>
                
                <div class="ios-switch-container">
                    <span class="ios-switch-label">Tampilkan Semua Subkategori</span>
                    <label class="ios-switch">
                        <input type="checkbox" id="globalToggleCheckbox" onchange="toggleAllSubcategories(this)">
                        <span class="ios-slider"></span>
                    </label>
                </div>
            </div>

            <h2 class="section-title" style="margin-bottom: 10px;">Detail Progress: <?= htmlspecialchars($target_username) ?></h2>
            <p style="text-align:center; color:var(--text-gray); margin-bottom:35px;">
                Klik pada baris kategori untuk membuka atau menyembunyikan detail subkategori di dalamnya.
            </p>

            <div style="background: white; border-radius: 18px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.06); overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 600px;">
                    <thead>
                        <tr style="border-bottom: 2px solid #e2e8f0; color: var(--dark);">
                            <th style="padding: 12px 8px; font-weight: 700;">Kategori / Subkategori</th>
                            <th style="padding: 12px 8px; font-weight: 700; text-align: center;">Progress Hafalan</th>
                            <th style="padding: 12px 8px; font-weight: 700; text-align: right;">Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if (!empty($data_kategori)):
                            foreach ($data_kategori as $cat_id => $cat_data): 
                                $cat_total = $cat_data['total_kata'];
                                $cat_hafal = $cat_data['jumlah_hafalan'];
                                $cat_persen = ($cat_total > 0) ? round(($cat_hafal / $cat_total) * 100) : 0;
                        ?>
                            <tr class="category-row" data-target="sub-<?= $cat_id ?>" style="border-bottom: 1px solid #edf2f7; background-color: #f8fafc; cursor: pointer; transition: background 0.2s;" onclick="toggleSubcategory('sub-<?= $cat_id ?>')">
                                <td style="padding: 16px 8px; font-weight: 700; color: var(--dark);">
                                    <span class="icon-indicator" id="icon-sub-<?= $cat_id ?>" style="display:inline-block; width: 15px; margin-right: 5px;">►</span>
                                    <?= htmlspecialchars($cat_data['category_name']) ?>
                                </td>
                                <td style="padding: 16px 8px; text-align: center; color: var(--dark); font-weight: 600;">
                                    <span style="color: var(--primary);"><?= $cat_hafal ?></span> / <?= $cat_total ?> Kata
                                </td>
                                <td style="padding: 16px 8px; text-align: right;">
                                    <div style="display: inline-block; width: 120px; background: #e2e8f0; border-radius: 10px; height: 8px; overflow: hidden; margin-right: 10px; vertical-align: middle;">
                                        <div style="background: var(--primary); width: <?= $cat_persen ?>%; height: 100%;"></div>
                                    </div>
                                    <span style="font-weight: 700; color: var(--dark); display: inline-block; width: 40px; text-align: right;"><?= $cat_persen ?>%</span>
                                </td>
                            </tr>

                            <?php 
                            foreach ($cat_data['subcategories'] as $sub): 
                                $sub_total = $sub['total_kata'];
                                $sub_hafal = $sub['jumlah_hafalan'];
                                $sub_persen = ($sub_total > 0) ? round(($sub_hafal / $sub_total) * 100) : 0;
                            ?>
                                <tr class="sub-row child-of-sub-<?= $cat_id ?>" style="border-bottom: 1px solid #f1f5f9; display: none;">
                                    <td style="padding: 12px 8px 12px 35px; color: var(--text-gray); font-size: 0.95rem;">
                                        — <?= htmlspecialchars($sub['subcategory_name']) ?>
                                    </td>
                                    <td style="padding: 12px 8px; text-align: center; color: var(--text-gray); font-size: 0.9rem;">
                                        <?= $sub_hafal ?> / <?= $sub_total ?> Kata
                                    </td>
                                    <td style="padding: 12px 8px; text-align: right;">
                                        <div style="display: inline-block; width: 100px; background: #f1f5f9; border-radius: 10px; height: 6px; overflow: hidden; margin-right: 10px; vertical-align: middle;">
                                            <div style="background: var(--secondary); width: <?= $sub_persen ?>%; height: 100%;"></div>
                                        </div>
                                        <span style="font-weight: 600; color: var(--text-gray); display: inline-block; width: 40px; text-align: right; font-size: 0.85rem;"><?= $sub_persen ?>%</span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        <?php 
                            endforeach; 
                        else:
                        ?>
                            <tr>
                                <td colspan="3" style="padding: 20px; text-align: center; color: var(--text-gray);">Belum ada data kategori di database.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                    
                    <tfoot>
                        <?php 
                        $grand_persen = ($grand_total_kata > 0) ? round(($grand_jumlah_hafalan / $grand_total_kata) * 100) : 0;
                        ?>
                        <tr style="background: #e2e8f0; border-top: 3px solid #cbd5e1; font-size: 1.05rem;">
                            <td style="padding: 18px 12px; font-weight: 800; color: var(--dark);">TOTAL CAPAIAN</td>
                            <td style="padding: 18px 12px; text-align: center; font-weight: 800; color: var(--dark);">
                                <span style="font-size: 1.2rem; color: var(--primary);"><?= $grand_jumlah_hafalan ?></span> / <?= $grand_total_kata ?> Kata
                            </td>
                            <td style="padding: 18px 12px; text-align: right;">
                                <div style="display: inline-block; width: 140px; background: #cbd5e1; border-radius: 10px; height: 10px; overflow: hidden; margin-right: 10px; vertical-align: middle;">
                                    <div style="background: linear-gradient(90deg, var(--primary), var(--secondary)); width: <?= $grand_persen ?>%; height: 100%;"></div>
                                </div>
                                <span style="font-weight: 800; color: var(--dark); display: inline-block; width: 45px; text-align: right;"><?= $grand_persen ?>%</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </section>

    <script>
    // Fungsi ketika salah satu baris kategori diklik secara mandiri
    function toggleSubcategory(classId) {
        const rows = document.querySelectorAll('.child-of-' + classId);
        const icon = document.getElementById('icon-' + classId);
        
        rows.forEach(row => {
            if (row.style.display === 'none') {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

        // Sesuaikan indikator arah panah individu
        if (rows.length > 0 && rows[0].style.display === 'none') {
            icon.innerText = '►';
        } else {
            icon.innerText = '▼';
        }

        // Sinkronisasi status Switch iPhone jika semua kategori dibuka/ditutup secara manual satu per satu
        checkSwitchStatus();
    }

    // Fungsi utama ketika Switch iPhone (Checkbox) digeser / diubah
    function toggleAllSubcategories(switchEl) {
        const subRows = document.querySelectorAll('.sub-row');
        const indicators = document.querySelectorAll('.icon-indicator');
        
        // Jika saklar iPhone dalam keadaan ON (checked), tampilkan semua. Jika OFF, sembunyikan semua.
        const targetDisplay = switchEl.checked ? '' : 'none';
        const targetIcon = switchEl.checked ? '▼' : '►';

        subRows.forEach(row => {
            row.style.display = targetDisplay;
        });

        indicators.forEach(icon => {
            icon.innerText = targetIcon;
        });
    }

    // Fungsi opsional untuk mendeteksi apakah semua sub-row terbuka atau tertutup
    // Guna menyesuaikan posisi tombol switch iPhone secara otomatis
    function checkSwitchStatus() {
        const subRows = document.querySelectorAll('.sub-row');
        const switchCheckbox = document.getElementById('globalToggleCheckbox');
        if (subRows.length === 0) return;

        let allVisible = true;
        let allHidden = true;

        subRows.forEach(row => {
            if (row.style.display === 'none') {
                allVisible = false;
            } else {
                allHidden = false;
            }
        });

        if (allVisible) {
            switchCheckbox.checked = true;
        } else if (allHidden) {
            switchCheckbox.checked = false;
        }
    }
    
    // Memberikan efek hover visual abu-abu pada baris kategori
    document.querySelectorAll('.category-row').forEach(row => {
        row.addEventListener('mouseover', () => row.style.backgroundColor = '#f1f5f9');
        row.addEventListener('mouseout', () => row.style.backgroundColor = '#f8fafc');
    });
    </script>

<?php
    exit; // Menghentikan eksekusi script agar grafik semua user di bawah tidak ikut render
}

/*
|--------------------------------------------------------------------------
| LOGIKA UTAMA: TAMPILKAN SEMUA GRAFIK USER (Bawaan Asli)
|--------------------------------------------------------------------------
*/
$users = [];
$q_users = "SELECT user_id, username FROM users ORDER BY username ASC";
$res_users = $conn->query($q_users);

if ($res_users && $res_users->num_rows > 0) {
    while ($u = $res_users->fetch_assoc()) {
        $user_id = (int) $u['user_id'];
        $users[$user_id] = [
            'user_id' => $user_id,
            'username' => $u['username'],
            'total_memorized' => 0,
            'chart_labels' => [],
            'chart_counts' => []
        ];
    }
}

$total_words_all = 0;
$q_total_words = "SELECT COUNT(*) AS total_words FROM words";
$res_total_words = $conn->query($q_total_words);

if ($res_total_words && $row_total_words = $res_total_words->fetch_assoc()) {
    $total_words_all = (int) $row_total_words['total_words'];
}

$q_total_memorized = "
    SELECT user_id, COUNT(*) AS total_memorized
    FROM user_words
    WHERE status = 'memorized'
    GROUP BY user_id
";
$res_total_memorized = $conn->query($q_total_memorized);

if ($res_total_memorized && $res_total_memorized->num_rows > 0) {
    while ($row = $res_total_memorized->fetch_assoc()) {
        $uid = (int) $row['user_id'];
        if (isset($users[$uid])) {
            $users[$uid]['total_memorized'] = (int) $row['total_memorized'];
        }
    }
}

foreach ($users as $uid => &$user) {
    $query_chart = "
        SELECT DATE(memorized_at) AS tgl, COUNT(*) AS total
        FROM user_words
        WHERE user_id = ?
          AND status = 'memorized'
        GROUP BY DATE(memorized_at)
        ORDER BY tgl DESC
        LIMIT 7
    ";

    $stmt_chart = $conn->prepare($query_chart);
    $stmt_chart->bind_param("i", $uid);
    $stmt_chart->execute();
    $res_chart = $stmt_chart->get_result();

    $labels = [];
    $counts = [];

    while ($row_c = $res_chart->fetch_assoc()) {
        $labels[] = date('d M', strtotime($row_c['tgl']));
        $counts[] = (int) $row_c['total'];
    }

    $user['chart_labels'] = array_reverse($labels);
    $user['chart_counts'] = array_reverse($counts);

    $stmt_chart->close();
}
unset($user);

$total_users = count($users);
$total_all_memorized = 0;

foreach ($users as $user) {
    $total_all_memorized += (int) $user['total_memorized'];
}
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="section" style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">

        <h2 class="section-title">Progress Semua User</h2>

        <p style="text-align:center; color:var(--text-gray); margin-top:-20px; margin-bottom:35px;">
            Setiap user ditampilkan dalam satu kartu dengan satu grafik progress hafalan. Klik nama user untuk melihat detail per kategori.
        </p>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:20px; margin-bottom:35px;">
            <div style="background:var(--primary); color:white; padding:22px 25px; border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.06);">
                <div style="font-size:2rem; font-weight:800; line-height:1;">
                    <?= $total_users ?>
                </div>
                <div style="font-size:0.9rem; margin-top:8px; opacity:0.95;">
                    Total User
                </div>
            </div>

            <div style="background:white; color:var(--dark); padding:22px 25px; border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.06); border-left:5px solid var(--secondary);">
                <div style="font-size:2rem; font-weight:800; line-height:1; color:var(--primary);">
                    <?= $total_all_memorized ?>
                </div>
                <div style="font-size:0.9rem; margin-top:8px; color:var(--text-gray);">
                    Total Hafalan Semua User
                </div>
            </div>

            <div style="background:white; color:var(--dark); padding:22px 25px; border-radius:15px; box-shadow:0 10px 30px rgba(0,0,0,0.06); border-left:5px solid var(--primary);">
                <div style="font-size:2rem; font-weight:800; line-height:1; color:var(--primary);">
                    <?= $total_words_all ?>
                </div>
                <div style="font-size:0.9rem; margin-top:8px; color:var(--text-gray);">
                    Total Kata di Database
                </div>
            </div>
        </div>

        <?php if (empty($users)): ?>
            <div style="background:white; padding:35px; border-radius:18px; box-shadow:0 10px 30px rgba(0,0,0,0.06); text-align:center;">
                <h3 style="color:var(--dark); margin-bottom:10px;">Belum ada user</h3>
                <p style="color:var(--text-gray);">Data user belum tersedia di database.</p>
            </div>
        <?php else: ?>

            <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(360px, 1fr)); gap:25px;">
                <?php foreach ($users as $user): ?>
                    <?php
                        $uid = (int) $user['user_id'];
                        $username = $user['username'];
                        $total_memorized = (int) $user['total_memorized'];
                        $percentage = ($total_words_all > 0) ? round(($total_memorized / $total_words_all) * 100) : 0;
                        $chart_id = 'chartUser' . $uid;
                    ?>

                    <div style="background:white; border-radius:18px; padding:25px; box-shadow:0 10px 30px rgba(0,0,0,0.06); border-top:4px solid var(--secondary);">
                        <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:15px; margin-bottom:18px;">
                            <div>
                                <span style="color:var(--text-gray); font-size:0.75rem; text-transform:uppercase; font-weight:700;">
                                    User
                                </span>
                                <h3 style="margin:5px 0 0 0; font-size:1.25rem;">
                                    <a href="index.php?hal=progress_all&user_id=<?= $uid ?>" style="color:var(--dark); text-decoration:none; border-bottom:1px dashed var(--primary);">
                                        <?= htmlspecialchars($username) ?> 🔗
                                    </a>
                                </h3>
                            </div>

                            <div style="background:rgba(78,115,223,0.1); color:var(--primary); padding:10px 14px; border-radius:12px; text-align:center; min-width:86px;">
                                <strong style="font-size:1.3rem; line-height:1; display:block;">
                                    <?= $total_memorized ?>
                                </strong>
                                <span style="font-size:0.72rem; font-weight:700;">
                                    Kata Hafal
                                </span>
                            </div>
                        </div>

                        <div style="margin-bottom:18px;">
                            <div style="display:flex; justify-content:space-between; margin-bottom:8px; font-size:0.85rem;">
                                <span style="color:var(--text-gray);">Progress Total</span>
                                <span style="color:var(--primary); font-weight:700;">
                                    <?= $percentage ?>%
                                </span>
                            </div>

                            <div style="background:#e2e8f0; border-radius:10px; height:8px; overflow:hidden;">
                                <div style="background:var(--secondary); width:<?= $percentage ?>%; height:100%; transition:width 0.8s ease;"></div>
                            </div>
                        </div>

                        <div style="height:240px;">
                            <canvas id="<?= $chart_id ?>"></canvas>
                        </div>

                        <?php if (empty($user['chart_labels'])): ?>
                            <p style="text-align:center; color:var(--text-gray); font-size:0.85rem; margin-top:12px;">
                                Belum ada data hafalan untuk grafik.
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </div>
</section>

<script>
const progressUsers = <?= json_encode(array_values($users), JSON_UNESCAPED_UNICODE) ?>;

progressUsers.forEach(function(user) {
    const chartElement = document.getElementById('chartUser' + user.user_id);

    if (!chartElement) return;

    const labels = user.chart_labels || [];
    const counts = user.chart_counts || [];

    new Chart(chartElement.getContext('2d'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Kata Dihafal',
                data: counts,
                backgroundColor: '#4e73df',
                borderRadius: 8,
                barThickness: 24
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return context.raw + ' kata dihafal';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
</script>