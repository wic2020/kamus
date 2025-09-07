<?php
require_once __DIR__ . "/../includes/config.php";

$user_id = $_SESSION['user_id'] ?? 0;
if (!$user_id) {
    echo "<p class='text-center text-red-600'>Anda harus login untuk mengakses quiz.</p>";
    exit;
}

// --- Ambil kategori langsung dari tabel categories ---
$stmt = $pdo->query("
    SELECT id, group_id, group_name, name 
    FROM categories 
    ORDER BY group_id, id
");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

function generateOptions($pdo, $correct, $category_id) {
    $stmt = $pdo->prepare("SELECT translation FROM words WHERE category_id = ? AND translation != ? ORDER BY RAND() LIMIT 3");
    $stmt->execute([$category_id, $correct]);
    $options = $stmt->fetchAll(PDO::FETCH_COLUMN);
    $options[] = $correct;
    shuffle($options);
    return $options;
}

$quizWords = [];
$category_id = intval($_GET['category_id'] ?? ($_POST['category_id'] ?? 0));
$submitted = false;
$answers = [];
$score = 0;

// --- Jika submit ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category_id'], $_POST['answers'])) {
    $category_id = intval($_POST['category_id']);
    $answers = $_POST['answers'];

    // Ambil soal dari session agar urutan tetap sama
    $quizWords = $_SESSION['quiz_words'] ?? [];

    $submitted = true;
    foreach ($quizWords as &$word) {
        $userAnswer = $answers[$word['id']] ?? '';
        $word['userAnswer'] = $userAnswer;
        $word['isCorrect'] = (trim(strtolower($userAnswer)) === trim(strtolower($word['translation'])));
        if ($word['isCorrect']) $score++;
    }
    unset($word);

// --- Jika mulai quiz baru ---
} elseif ($category_id) {
    $stmt = $pdo->prepare("SELECT id, word, translation FROM words WHERE category_id = ? ORDER BY RAND() LIMIT 10");
    $stmt->execute([$category_id]);
    $quizWordsRaw = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $quizWords = [];
    foreach ($quizWordsRaw as $word) {
        $options = generateOptions($pdo, $word['translation'], $category_id);
        $quizWords[] = [
            'id' => $word['id'],
            'word' => $word['word'],
            'translation' => $word['translation'],
            'options' => $options
        ];
    }
    $_SESSION['quiz_words'] = $quizWords; // simpan ke session
}
?>

<section class="max-w-4xl mx-auto p-6">
    <h2 class="text-3xl font-bold text-center mb-6">Quiz Kosakata</h2>

    <?php if (!$category_id && !$submitted): ?>
    <form method="get" class="text-center mb-6" onsubmit="return validateCategory();">
        <input type="hidden" name="hal" value="quiz">
        <select name="category_id" id="category_id" class="border px-4 py-2 rounded-lg shadow">
            <option value="">-- Pilih Kategori --</option>
            <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>">
                <?= htmlspecialchars(($cat['group_name'] ?: 'Umum') . ' | ' . $cat['name']) ?>
            </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-lg">Mulai Quiz</button>
    </form>
    <?php endif; ?>

    <?php if ($quizWords): ?>
    <form method="post" id="quizForm">
        <input type="hidden" name="category_id" value="<?= $category_id ?>">

        <?php if (!$submitted): ?>
            <p class="text-center mb-4 text-gray-700">Pilih jawaban untuk semua 10 pertanyaan, lalu klik Submit.</p>
            <div class="w-full bg-gray-200 rounded-full h-4 mb-6">
                <div id="progressBar" class="bg-blue-600 h-4 rounded-full text-xs text-white text-center">0/<?= count($quizWords) ?></div>
            </div>
        <?php else: ?>
            <h3 class="text-xl font-semibold text-center mb-6">Hasil Quiz: <?= $score ?>/<?= count($quizWords) ?> benar</h3>
        <?php endif; ?>

        <?php foreach ($quizWords as $index => $word): ?>
        <div class="quiz-question mb-6 p-6 bg-white border border-gray-100 rounded-2xl shadow-md">
            <p class="font-bold text-xl mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-pink-500">
                <?= $index+1 ?>. <?= htmlspecialchars($word['word']) ?>
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <?php foreach ($word['options'] as $opt): ?>
                    <?php
                        $btnClass = "";
                        if ($submitted) {
                            if ($opt === $word['translation']) {
                                $btnClass = "correct";
                            } elseif ($opt === ($word['userAnswer'] ?? '') && $opt !== $word['translation']) {
                                $btnClass = "wrong";
                            } else {
                                $btnClass = "disabled";
                            }
                        }
                    ?>
                    <button type="button"
                        class="option-btn w-full text-left px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg shadow-sm transition <?= $btnClass ?>"
                        data-word-id="<?= $word['id'] ?>">
                        <?= htmlspecialchars($opt) ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <?php if ($submitted && !($word['isCorrect'] ?? false)): ?>
                <p class="mt-3 text-red-600 font-semibold">Jawaban Anda salah: <?= htmlspecialchars($word['userAnswer'] ?? '-') ?></p>
                <p class="text-green-600 font-semibold">Jawaban yang benar: <?= htmlspecialchars($word['translation']) ?></p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>

        <?php if (!$submitted): ?>
        <div class="text-center">
            <button type="submit" class="px-6 py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">Submit Quiz</button>
        </div>
        <?php else: ?>
        <div class="text-center">
            <a href="index.php?hal=quiz&category_id=<?= $_GET['category_id']; ?>" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Mulai Quiz Lagi</a>
        </div>
        <?php endif; ?>
    </form>
    <?php endif; ?>
</section>

<style>
.option-btn.selected { background-color: #3b82f6; color: white; border-color: #2563eb; }
.option-btn.correct { background-color: #16a34a !important; color: white; border-color: #15803d; }
.option-btn.wrong { background-color: #dc2626 !important; color: white; border-color: #b91c1c; }
.option-btn.disabled { opacity: 0.5; cursor: not-allowed; }
</style>

<?php if (!$submitted): ?>
<script>
function validateCategory() {
    const cat = document.getElementById('category_id').value;
    if (!cat) {
        alert("Silakan pilih kategori terlebih dahulu sebelum mulai quiz!");
        return false;
    }
    return true;
}

document.querySelectorAll('.option-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const parent = btn.closest('.quiz-question');
        parent.querySelectorAll('.option-btn').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');

        let input = document.querySelector(`input[name="answers[${btn.dataset.wordId}]"]`);
        if (!input) {
            input = document.createElement('input');
            input.type = 'hidden';
            input.name = `answers[${btn.dataset.wordId}]`;
            document.getElementById('quizForm').appendChild(input);
        }
        input.value = btn.textContent.trim();

        updateProgress();
    });
});

// --- Validasi semua soal sudah dijawab sebelum submit ---
document.getElementById('quizForm').addEventListener('submit', function(e) {
    const totalQuestions = document.querySelectorAll('.quiz-question').length;
    const answered = document.querySelectorAll('input[name^="answers["]').length;

    if (answered < totalQuestions) {
        e.preventDefault();
        alert("Silakan jawab semua pertanyaan terlebih dahulu sebelum submit!");
    }
});

// --- Update progress bar ---
function updateProgress() {
    const totalQuestions = document.querySelectorAll('.quiz-question').length;
    const answered = document.querySelectorAll('input[name^="answers["]').length;
    const progress = document.getElementById('progressBar');
    const percent = Math.round((answered / totalQuestions) * 100);

    progress.style.width = percent + "%";
    progress.textContent = answered + "/" + totalQuestions;
}
</script>
<?php endif; ?>
