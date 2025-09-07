<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . "/../includes/config.php";


// =======================================================
// Handle AJAX toggle hafal
// =======================================================
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["word_id"], $_POST["status"])) {
    header("Content-Type: application/json");

    if (empty($_SESSION["user_id"])) {
        echo json_encode(["success" => false, "message" => "Not logged in"]);
        exit;
    }

    $user_id = intval($_SESSION["user_id"]);
    $word_id = intval($_POST["word_id"]);
    $status  = intval($_POST["status"]);

    try {
        if ($status === 1) {
            $stmt = $pdo->prepare("
                INSERT INTO user_words (user_id, word_id, memorized_at)
                VALUES (?, ?, NOW())
                ON DUPLICATE KEY UPDATE memorized_at = NOW()
            ");
            $stmt->execute([$user_id, $word_id]);
        } else {
            $stmt = $pdo->prepare("DELETE FROM user_words WHERE user_id = ? AND word_id = ?");
            $stmt->execute([$user_id, $word_id]);
        }

        echo json_encode(["success" => true]);
    } catch (Exception $e) {
        echo json_encode(["success" => false, "message" => $e->getMessage()]);
    }
    exit;
}

// =======================================================
// Halaman normal (GET request)
// =======================================================
if (!isset($_GET["category_id"])) {
    echo "<p class='text-center text-gray-600 mt-10'>Kategori belum dipilih.</p>";
    exit;
}

$category_id = intval($_GET["category_id"]);

// Ambil semua kategori untuk dropdown
$stmt = $pdo->query("SELECT id, name FROM categories ORDER BY id ASC");
$allCategories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Ambil data kategori aktif
$stmt = $pdo->prepare("SELECT name, description FROM categories WHERE id = ?");
$stmt->execute([$category_id]);
$category = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$category) {
    echo "<p class='text-center text-red-600 mt-10'>Kategori tidak ditemukan.</p>";
    exit;
}

$user_id = $_SESSION["user_id"];

// Ambil kosakata + status hafal
$stmt = $pdo->prepare("
    SELECT w.id, w.word, w.ipa, w.translation, w.note,
           CASE WHEN uw.word_id IS NOT NULL THEN 1 ELSE 0 END AS memorized
    FROM words w
    LEFT JOIN user_words uw ON uw.word_id = w.id AND uw.user_id = ?
    WHERE w.category_id = ?
    ORDER BY w.id ASC
");
$stmt->execute([$user_id, $category_id]);
$words = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Hitung progress hafalan
$totalWords = count($words);
$memorizedWords = count(array_filter($words, fn($w) => $w['memorized'] == 1));
$progressPercent = $totalWords > 0 ? intval(($memorizedWords / $totalWords) * 100) : 0;
?>

<!-- Header Kategori -->
<section class="text-center mb-10">
    <h2
        class="text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-blue-700 via-purple-600 to-blue-700 bg-clip-text text-transparent mb-3">
        <?= htmlspecialchars($category['name']) ?>
    </h2>
    <p class="text-lg text-gray-600 mb-6">
        <?= htmlspecialchars($category['description']) ?>
    </p>
</section>

<!-- Panel Filter -->
<div class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-10">
    <form method="get" action="index.php" class="inline-block relative" style="display: none;">
        <input type="hidden" name="hal" value="flashcard">
        <select name="category_id" id="categorySelect" onchange="this.form.submit()"
            class="appearance-none px-5 py-2.5 pr-10 border border-gray-300 rounded-xl shadow-sm text-gray-700 bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer">
            <option value="">-- Pilih Kategori --</option>
            <?php foreach ($allCategories as $cat): ?>
            <option value="<?= $cat['id'] ?>" <?= $cat['id'] == $category_id ? 'selected' : '' ?>>
                <?= htmlspecialchars($cat['name']) ?>
            </option>
            <?php endforeach; ?>
        </select>
        <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">▾</span>
    </form>

    <label
        class="flex items-center gap-2 bg-white px-5 py-3 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition cursor-pointer">
        <input type="checkbox" id="showAll" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500">
        <span class="text-gray-700 font-medium text-sm flex items-center gap-1">Tampilkan semua</span>
    </label>

    <label
        class="flex items-center gap-2 bg-white px-5 py-3 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition cursor-pointer">
        <input type="checkbox" id="studyMode" class="w-5 h-5 text-purple-600 rounded focus:ring-purple-500">
        <span class="text-gray-700 font-medium text-sm flex items-center gap-1">Mode Belajar</span>
    </label>

    <!-- Tombol Quiz -->
    <button type="button" onclick="goToQuiz()"
        class="px-5 py-3 bg-green-600 text-white rounded-xl shadow-sm hover:bg-green-700 transition">
        Quiz
    </button>
</div>

<script>
function goToQuiz() {
    const cat = document.getElementById('categorySelect').value;
    if (!cat) {
        alert("Silakan pilih kategori terlebih dahulu sebelum masuk quiz!");
        return;
    }
    window.location.href = "index.php?hal=quiz&category_id=" + cat;
}
</script>


<!-- Progress Hafalan -->
<div class="mb-8 max-w-xl mx-auto text-center relative">
    <p class="text-gray-700 font-medium mb-2">
        Progress hafalan: <span id="memorizedCount"><?= $memorizedWords ?></span>/<?= $totalWords ?> kata
    </p>
    <div class="w-full bg-gray-200 rounded-full h-5 overflow-hidden shadow-sm">
        <div id="progressBar" class="h-5 rounded-full transition-all duration-500"
            style="width: <?= $progressPercent ?>%; background: linear-gradient(to right, #3b82f6, #6366f1, #ec4899);">
        </div>
    </div>
    <div id="completionBadge"
        class="absolute top-0 right-0 mt-0 -translate-y-1/2 opacity-0 transform scale-75 transition-all duration-500 bg-gradient-to-tr from-green-400 to-green-600 text-white font-bold px-4 py-1 rounded-full shadow-lg">
        🎉 Selesai! Semua hafal!
    </div>
</div>

<?php if (empty($words)): ?>
<p class="text-center text-gray-500">Belum ada kosakata dalam kategori ini.</p>
<?php else: ?>
<div id="cardContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <?php foreach ($words as $word): ?>
    <div class="word-card bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between text-center border border-gray-100"
        data-memorized="<?= $word['memorized'] ? '1' : '0' ?>">

        <div>
            <h3 class="text-2xl font-extrabold text-blue-700 mb-3 flex justify-center items-center gap-2">
                <?= htmlspecialchars($word['word']) ?>
                <button type="button" class="text-gray-400 hover:text-blue-600 transition"
                    onclick="speakWord('<?= htmlspecialchars($word['word']) ?>')" title="Ucapkan kata">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5L6 9H3v6h3l5 4V5zm7.07 1.93a9 9 0 010 12.73m-2.83-2.83a5 5 0 000-7.07" />
                    </svg>
                </button>
            </h3>

            <?php if (!empty($word['note'])): ?>
            <p class="note text-sm font-bold text-blue-800 mt-2 mb-2" style="font-style: italic">
                <?= htmlspecialchars($word['note']) ?>
            </p>
            <?php endif; ?>


            <?php if (!empty($word['ipa'])): ?>
            <p class="text-sm text-gray-500 italic mb-2">[<?= htmlspecialchars($word['ipa']) ?>]</p>
            <?php endif; ?>

            <p class="translation text-gray-700 font-medium text-lg"><?= htmlspecialchars($word['translation']) ?></p>



        </div>

        <hr class="mt-3">

        <div class="mt-2 flex items-center gap-1">
            <label for="hafal-<?= $word['id'] ?>" class="pill-checkbox cursor-pointer text-sm text-gray-500">
                <input type="checkbox" id="hafal-<?= $word['id'] ?>" class="hafalToggle hidden"
                    data-word-id="<?= $word['id'] ?>" <?= $word['memorized'] ? 'checked' : '' ?>>
                <span class="pill-slider scale-90"></span>
                <span class="pill-label ml-1">Hafal</span>
            </label>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<div class="mt-8 text-center">
    <a href="index.php"
        class="inline-block px-5 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
        ← Kembali ke Beranda
    </a>
</div>

<style>
/* Word card hover & hafal */
.word-card[data-memorized="0"] {
    background-color: #f9fcff;
    border: 1px solid #dbeafe;
}

.word-card {
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
}

.word-card:hover {
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    transform: translateY(-4px);
}

.hafalToggle {
    accent-color: #2563eb;
}

/* Pill Checkbox */
.pill-checkbox {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    user-select: none;
}

.pill-checkbox input:checked+.pill-slider {
    background-color: #2563eb;
}

.pill-checkbox input:checked+.pill-slider:before {
    transform: translateX(20px);
}

.pill-slider {
    width: 42px;
    height: 22px;
    background-color: #d1d5db;
    border-radius: 9999px;
    position: relative;
    transition: background-color 0.3s ease;
    flex-shrink: 0;
}

.pill-slider:before {
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    width: 18px;
    height: 18px;
    background-color: white;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

.pill-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: #374151;
}


</style>

<script>
// Speech synthesis
function speakWord(text) {
    if ('speechSynthesis' in window) {
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'en-US';
        window.speechSynthesis.speak(utterance);
    } else {
        alert("Browser Anda tidak mendukung text-to-speech!");
    }
}

// Filter show all
const showAll = document.getElementById("showAll");
const studyMode = document.getElementById("studyMode");
const cards = document.querySelectorAll(".word-card");

function filterCards() {
    const showAllChecked = showAll.checked;
    cards.forEach(card => {
        const memorized = card.dataset.memorized === "1";
        if (!showAllChecked && memorized) {
            card.classList.add("hidden");
        } else {
            card.classList.remove("hidden");
        }
    });
}
filterCards();
showAll.addEventListener("change", filterCards);

// Study mode toggle
function toggleStudyMode() {
    const active = studyMode.checked;
    document.querySelectorAll(".translation").forEach(t => {
        if (active) {
            t.classList.add("blur-sm", "select-none");
            t.textContent = "••••••";
        } else {
            t.classList.remove("blur-sm", "select-none");
            t.textContent = t.dataset.original || t.textContent;
        }
    });
}
document.querySelectorAll(".translation").forEach(t => t.dataset.original = t.textContent);
studyMode.addEventListener("change", toggleStudyMode);

// Update progress & badge
function updateProgress() {
    const cards = document.querySelectorAll(".word-card");
    const total = cards.length;
    const memorized = Array.from(cards).filter(c => c.dataset.memorized === "1").length;
    const percent = total > 0 ? Math.round((memorized / total) * 100) : 0;

    document.getElementById("memorizedCount").textContent = memorized;
    const progressBar = document.getElementById("progressBar");
    progressBar.style.width = percent + "%";

    const badge = document.getElementById("completionBadge");
    if (percent === 100) {
        badge.classList.remove("opacity-0", "scale-75");
        badge.classList.add("opacity-100", "scale-100");
    } else {
        badge.classList.remove("opacity-100", "scale-100");
        badge.classList.add("opacity-0", "scale-75");
    }
}
updateProgress();

// Hafal toggle AJAX + update progress
document.querySelectorAll(".hafalToggle").forEach(cb => {
    cb.addEventListener("change", function() {
        const wordId = this.dataset.wordId;
        const isChecked = this.checked;
        fetch("pages/flashcard.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "word_id=" + encodeURIComponent(wordId) + "&status=" + (isChecked ? 1 : 0)
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    const card = this.closest(".word-card");
                    card.setAttribute("data-memorized", isChecked ? "1" : "0");
                    filterCards();
                    updateProgress();
                } else {
                    alert("Gagal menyimpan status hafal: " + (data.message || ""));
                    this.checked = !isChecked;
                }
            })
            .catch(err => {
                alert("Terjadi kesalahan koneksi: " + err);
                this.checked = !isChecked;
            });
    });
});
</script>