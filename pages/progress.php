<?php
// Cek session user
if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href='index.php?hal=login';</script>";
    exit;
}
$user_id = $_SESSION['user_id'];

// Ambil input filter tanggal (default: hari ini jika ada data, atau biarkan kosong)
$filter_date = isset($_GET['tgl']) ? $_GET['tgl'] : '';

// 1. QUERY DATA UNTUK GRAFIK (7 Hari Terakhir)
$query_chart = "SELECT DATE(memorized_at) as tgl, COUNT(*) as total 
                FROM user_words 
                WHERE user_id = ? AND status = 'memorized'
                GROUP BY DATE(memorized_at) 
                ORDER BY tgl DESC LIMIT 7";
$stmt_chart = $conn->prepare($query_chart);
$stmt_chart->execute([$user_id]);
$res_chart = $stmt_chart->get_result();

$labels = [];
$counts = [];
while($row_c = $res_chart->fetch_assoc()) {
    $labels[] = date('d M', strtotime($row_c['tgl']));
    $counts[] = $row_c['total'];
}
$labels = array_reverse($labels);
$counts = array_reverse($counts);

// 2. QUERY STATISTIK RINGKAS (Total Keseluruhan)
$q_stats = "SELECT COUNT(*) as total_memorized FROM user_words WHERE user_id = ? AND status = 'memorized'";
$stmt_s = $conn->prepare($q_stats);
$stmt_s->execute([$user_id]);
$total_all = $stmt_s->get_result()->fetch_assoc()['total_memorized'];
?>

<!-- Load Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="section" style="padding-top: 150px; padding-bottom: 80px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <!-- HEADER & GRAFIK -->
        <h2 class="section-title">Progress Hafalan</h2>
        <div style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); margin-bottom: 40px;">
            <canvas id="dailyChart" style="max-height: 250px;"></canvas>
        </div>

        <!-- FILTER & STATS BAR -->
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px; margin-bottom: 30px;">
            <div style="background: var(--primary); color: white; padding: 15px 25px; border-radius: 12px; display: flex; align-items: center; gap: 15px;">
                <span style="font-size: 2rem; font-weight: 800;"><?= $total_all ?></span>
                <span style="font-size: 0.9rem; line-height: 1.2;">Total Kata<br>Telah Dihafal</span>
            </div>

            <!-- Form Filter Tanggal -->
            <form method="GET" action="index.php" style="display: flex; gap: 10px; align-items: center; background: white; padding: 10px 15px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <input type="hidden" name="hal" value="progress">
                <label style="font-size: 0.85rem; font-weight: 700; color: var(--text-gray);">Filter Hari:</label>
                <input type="date" name="tgl" value="<?= $filter_date ?>" style="border: 1px solid #e2e8f0; padding: 8px; border-radius: 6px; font-family: inherit;">
                <button type="submit" class="btn-main" style="padding: 8px 15px; font-size: 0.85rem;">Cari</button>
                <?php if($filter_date): ?>
                    <a href="index.php?hal=progress" style="color: #ef4444; font-size: 0.8rem; text-decoration: none;">Reset</a>
                <?php endif; ?>
            </form>
        </div>

        <!-- GRID PROGRES PER KATEGORI -->
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 25px;">
            <?php
            // Logic Query: Jika ada filter tanggal, hitung hafalan hanya pada tanggal tersebut
            $sql_filter = $filter_date ? "AND DATE(uw.memorized_at) = '$filter_date'" : "";
            
            $query = "SELECT 
                        c.category_name, s.subcategory_name, s.subcategory_id,
                        COUNT(w.word_id) as total_words,
                        (SELECT COUNT(*) FROM user_words uw 
                         JOIN words w2 ON uw.word_id = w2.word_id 
                         WHERE w2.subcategory_id = s.subcategory_id 
                         AND uw.user_id = ? 
                         AND uw.status = 'memorized' $sql_filter) as memorized_count
                      FROM categories c
                      JOIN subcategories s ON c.category_id = s.category_id
                      JOIN words w ON s.subcategory_id = w.subcategory_id
                      GROUP BY s.subcategory_id
                      ORDER BY c.category_name ASC";

            $stmt = $conn->prepare($query);
            $stmt->execute([$user_id]);
            $result = $stmt->get_result();

            if ($result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
                    $total = $row['total_words'];
                    $memorized = $row['memorized_count'];
                    $percentage = ($total > 0) ? round(($memorized / $total) * 100) : 0;
            ?>
            <div style="background: white; border-radius: 15px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-top: 4px solid var(--secondary);">
                <span style="color: var(--text-gray); font-size: 0.75rem; text-transform: uppercase; font-weight: 700;"><?= htmlspecialchars($row['category_name']) ?></span>
                <h4 style="margin: 5px 0 15px 0; color: var(--dark);"><?= htmlspecialchars($row['subcategory_name']) ?></h4>
                
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 0.85rem;">
                    <span style="color: var(--text-gray);">Progress: <strong><?= $percentage ?>%</strong></span>
                    <span style="color: var(--primary); font-weight: 700;"><?= $memorized ?>/<?= $total ?></span>
                </div>
                <div style="background: #e2e8f0; border-radius: 10px; height: 8px; overflow: hidden;">
                    <div style="background: var(--secondary); width: <?= $percentage ?>%; height: 100%; transition: width 0.8s ease;"></div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<script>
const ctx = document.getElementById('dailyChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?= json_encode($labels) ?>,
        datasets: [{
            label: 'Kata Dihafal',
            data: <?= json_encode($counts) ?>,
            backgroundColor: '#4e73df',
            borderRadius: 8,
            barThickness: 30
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            y: { beginAtZero: true, ticks: { stepSize: 1 } },
            x: { grid: { display: false } }
        }
    }
});
</script>