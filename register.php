<?php
session_start();
require_once "includes/config.php";

$message = "";

// Proses submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password_plain = $_POST["password"];
    $password = password_hash($password_plain, PASSWORD_BCRYPT);
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $role = $_POST["role"];

    try {
        // Cek duplikat username/email
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        $exists = $stmt->fetchColumn();

        if ($exists > 0) {
            $message = "❌ Username atau Email sudah terdaftar!";
        } else {
            $stmt = $pdo->prepare("INSERT INTO users (username, password, fullname, email, role) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$username, $password, $fullname, $email, $role]);
            $message = "✅ User berhasil ditambahkan!. <a href='login.php' class='underline'>Klik di sini untuk login</a>.";
        }
    } catch (PDOException $e) {
        $message = "❌ Gagal menambahkan user: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User - Aplikasi Flashcard</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5d3b50c1d2.js" crossorigin="anonymous"></script>
</head>
<body class="bg-blue-50 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl p-8">
    <h1 class="text-2xl font-bold text-center text-blue-700 mb-6">➕ Registrasi Pengguna</h1>

    <?php if ($message): ?>
      <div class="mb-4 px-4 py-2 rounded text-sm 
          <?= strpos($message, 'berhasil') ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
        <?= $message ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-5" id="userForm">
      <div>
        <label class="block text-gray-700 font-medium mb-1">Username</label>
        <input type="text" name="username" required
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Password</label>
        <div class="relative">
          <input type="password" name="password" id="password" required
            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 pr-10">
          <span onclick="togglePassword()" class="absolute inset-y-0 right-3 flex items-center cursor-pointer text-gray-500">
            <i id="eyeIcon" class="fas fa-eye"></i>
          </span>
        </div>
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Full Name</label>
        <input type="text" name="fullname" required
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
      </div>

      <div>
        <label class="block text-gray-700 font-medium mb-1">Email</label>
        <input type="email" name="email" required
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
      </div>

      <div style="display: none;">
        <label class="block text-gray-700 font-medium mb-1">Role</label>
        <select name="role" required
          class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <!-- Captcha sederhana -->
      <div>
        <label class="block text-gray-700 font-medium mb-1">Verifikasi (Captcha)</label>
        <div class="flex items-center gap-2">
          <span id="captchaQuestion" class="font-semibold text-blue-600"></span>
          <input type="number" id="captchaAnswer" required
            class="flex-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
        </div>
        <p class="text-xs text-gray-500 mt-1">Jawab pertanyaan di atas untuk verifikasi.</p>
      </div>

      <button type="submit"
        class="w-full bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
        Simpan
      </button>
    </form>

    <!-- Tambahan link login -->
    <p class="mt-6 text-center text-gray-600 text-sm">
      Sudah memiliki akun? 
      <a href="login.php" class="text-blue-600 font-medium hover:underline">Klik di sini untuk login</a>.
    </p>
  </div>

  <script>
    // Toggle password visibility
    function togglePassword() {
      const pwd = document.getElementById("password");
      const eye = document.getElementById("eyeIcon");
      if (pwd.type === "password") {
        pwd.type = "text";
        eye.classList.remove("fa-eye");
        eye.classList.add("fa-eye-slash");
      } else {
        pwd.type = "password";
        eye.classList.remove("fa-eye-slash");
        eye.classList.add("fa-eye");
      }
    }

    // Captcha sederhana
    let num1, num2;
    function generateCaptcha() {
      num1 = Math.floor(Math.random() * 10) + 1;
      num2 = Math.floor(Math.random() * 10) + 1;
      document.getElementById("captchaQuestion").textContent = num1 + " + " + num2 + " = ?";
    }
    generateCaptcha();

    document.getElementById("userForm").addEventListener("submit", function(e) {
      const answer = document.getElementById("captchaAnswer").value;
      if (parseInt(answer) !== num1 + num2) {
        e.preventDefault();
        alert("⚠️ Jawaban captcha salah. Coba lagi!");
        generateCaptcha();
        document.getElementById("captchaAnswer").value = "";
      }
    });
  </script>

</body>
</html>
