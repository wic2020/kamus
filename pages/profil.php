<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once "includes/config.php"; // koneksi ke database

$user_id = $_SESSION["user_id"];
$message = "";

// Ambil data user
$stmt = $pdo->prepare("SELECT id, fullname, username, email, role, created_at, password FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Jika form password di-submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $old_password = $_POST["old_password"] ?? "";
    $new_password = $_POST["new_password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";

    if (empty($old_password) || empty($new_password) || empty($confirm_password)) {
        $message = "<p class='text-red-600'>Semua field wajib diisi.</p>";
    } elseif (!password_verify($old_password, $user["password"])) {
        $message = "<p class='text-red-600'>Password lama salah.</p>";
    } elseif ($new_password !== $confirm_password) {
        $message = "<p class='text-red-600'>Konfirmasi password baru tidak cocok.</p>";
    } elseif (strlen($new_password) < 6) {
        $message = "<p class='text-red-600'>Password baru minimal 6 karakter.</p>";
    } else {
        $hash = password_hash($new_password, PASSWORD_DEFAULT);
        $upd = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
        $upd->execute([$hash, $user_id]);
        $message = "<p class='text-green-600'>Password berhasil diperbarui.</p>";
    }
}
?>

<div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
  <h2 class="text-2xl font-bold text-blue-700 mb-6 flex items-center">
    <i class="fa-solid fa-user-circle mr-3"></i> Profil Saya
  </h2>

  <?php if ($user): ?>
    <div class="space-y-4 mb-8">
      <div>
        <label class="block text-gray-500 text-sm">Nama Lengkap</label>
        <p class="font-semibold text-gray-800"><?= htmlspecialchars($user['fullname']) ?></p>
      </div>
      <div>
        <label class="block text-gray-500 text-sm">Username</label>
        <p class="font-semibold text-gray-800"><?= htmlspecialchars($user['username']) ?></p>
      </div>
      <div>
        <label class="block text-gray-500 text-sm">Email</label>
        <p class="font-semibold text-gray-800"><?= htmlspecialchars($user['email']) ?></p>
      </div>
      <div>
        <label class="block text-gray-500 text-sm">Role</label>
        <p class="font-semibold text-gray-800 capitalize"><?= htmlspecialchars($user['role']) ?></p>
      </div>
      <div>
        <label class="block text-gray-500 text-sm">Tanggal Dibuat</label>
        <p class="font-semibold text-gray-800"><?= date("d M Y H:i", strtotime($user['created_at'])) ?></p>
      </div>
    </div>

    <!-- Form Ubah Password -->
    <h3 class="text-xl font-bold text-gray-700 mb-4">Ubah Password</h3>

    <?php if (!empty($message)): ?>
      <div class="mb-4"><?= $message ?></div>
    <?php endif; ?>

    <form method="post" class="space-y-4">
      <div>
        <label class="block text-sm text-gray-600">Password Lama</label>
        <input type="password" name="old_password" class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-200" required>
      </div>
      <div>
        <label class="block text-sm text-gray-600">Password Baru</label>
        <input type="password" name="new_password" class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-200" required>
      </div>
      <div>
        <label class="block text-sm text-gray-600">Konfirmasi Password Baru</label>
        <input type="password" name="confirm_password" class="w-full border rounded px-3 py-2 focus:ring focus:ring-blue-200" required>
      </div>
      <button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow-md">
        <i class="fa-solid fa-key mr-2"></i> Perbarui Password
      </button>
    </form>
  <?php else: ?>
    <p class="text-red-600">Data profil tidak ditemukan.</p>
  <?php endif; ?>
</div>
