<?php if (isset($_GET['registered'])): ?>
  <div class="mb-4 px-4 py-2 rounded text-sm bg-green-100 text-green-700 border border-green-300">
    ✅ Registrasi berhasil! Silakan login.
  </div>
<?php endif; ?>

<?php
session_start();
require_once "includes/config.php"; // koneksi database

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        // simpan session
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["fullname"] = $user["fullname"];
        $_SESSION["role"] = $user["role"];

        header("Location: index.php?hal=dashboard");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Flashcard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-50 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
        <h1 class="text-2xl font-bold text-center text-blue-700 mb-6">User Login</h1>
        <?php if ($error): ?>
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            <?= htmlspecialchars($error) ?>
        </div>
        <?php endif; ?>
        <form method="POST" class="space-y-5">
            <div>
                <label class="block text-gray-700 font-medium mb-1">Username</label>
                <input type="text" name="username" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
            </div>
            <button type="submit"
                class="w-full bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        <!-- Tambahan link -->
<div class="mt-6 text-center">
    <a href="register.php" 
       class="inline-block px-4 py-2 text-blue-700 font-semibold transition-colors duration-200">
        Belum punya akun? Daftar <u>di sini</u>!
    </a>
</div>


        <p class="mt-6 text-center text-gray-500 text-sm">
            &copy; 2025 Aplikasi Flashcard
        </p>
    </div>

</body>

</html>