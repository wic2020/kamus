<?php
require_once "includes/config.php"; // koneksi ke database

// Ambil daftar kategori dari DB, urut berdasarkan group dan name
$stmt = $pdo->query("SELECT id, name, description, icon, color, group_name FROM categories ORDER BY group_id, name");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Kelompokkan kategori berdasarkan group
$grouped_categories = [];
foreach ($categories as $cat) {
    $grouped_categories[$cat['group_name']][] = $cat;
}

// Warna pastel acak
$bgColors = [
    "bg-red-50",
    "bg-yellow-50",
    "bg-green-50",
    "bg-blue-50",
    "bg-indigo-50",
    "bg-purple-50",
    "bg-pink-50"
];
?>

<?php foreach ($grouped_categories as $group_name => $cats): ?>
<section class="mb-10">
    <!-- Judul Group -->
    <h2 class="text-2xl font-extrabold text-gray-800 mb-6 text-center">
        <?= htmlspecialchars($group_name) ?>
    </h2>

    <!-- Grid Kategori -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        <?php foreach ($cats as $cat): ?>
        <?php
            // Hitung progress hafalan per kategori
            $stmtTotal = $pdo->prepare("SELECT COUNT(*) FROM words WHERE category_id = ?");
            $stmtTotal->execute([$cat['id']]);
            $totalWords = $stmtTotal->fetchColumn();

            $stmtMem = $pdo->prepare("SELECT COUNT(*) FROM words w
                                      JOIN user_words uw ON uw.word_id = w.id
                                      WHERE w.category_id = ? AND uw.user_id = ?");
            $stmtMem->execute([$cat['id'], $_SESSION['user_id'] ?? 0]);
            $memorizedWords = $stmtMem->fetchColumn();

            $progressPercent = $totalWords > 0 ? intval(($memorizedWords / $totalWords) * 100) : 0;

            // Pilih warna background acak
            $bg = $bgColors[array_rand($bgColors)];
        ?>
        <a href="index.php?hal=flashcard&category_id=<?= $cat['id'] ?>"
           class="<?= $bg ?> rounded-xl shadow-md hover:shadow-lg transition-all duration-300 p-4 flex flex-col items-center text-center relative group">

            <!-- Nama dan Deskripsi -->
            <h3 class="text-base font-semibold mb-1 text-blue-700"><?= htmlspecialchars($cat['name']) ?></h3>
            <p class="text-xs text-gray-600 mb-3"><?= htmlspecialchars($cat['description']) ?></p>

            <!-- Progress Bar -->
            <div class="w-full bg-gray-200 h-2 rounded-full overflow-hidden mt-auto shadow-sm">
                <div class="h-2 rounded-full transition-all duration-500"
                     style="width: <?= $progressPercent ?>%; background: linear-gradient(to right, #3b82f6, #6366f1, #ec4899);">
                </div>
            </div>
            <p class="text-xs text-gray-700 mt-1 font-medium"><?= $memorizedWords ?>/<?= $totalWords ?> kata</p>

            <!-- Badge 100% -->
            <?php if ($progressPercent === 100 && $totalWords > 0): ?>
            <div class="absolute top-2 right-2 bg-green-500 text-white px-2 py-0.5 rounded-full text-[10px] font-bold shadow animate-bounce">
                🎉
            </div>
            <?php endif; ?>
        </a>
        <?php endforeach; ?>
    </div>
</section>
<?php endforeach; ?>
