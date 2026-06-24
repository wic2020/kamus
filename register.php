<?php
if(count(get_included_files()) == 1) die("Akses Ditolak!");

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi_password'];

    $cek = $conn->query("SELECT * FROM users WHERE username='$username' OR email='$email'");
    
    if ($cek && $cek->num_rows > 0) {
        $error = "Username atau Email sudah terdaftar!";
    } elseif ($password !== $konfirmasi) {
        $error = "Konfirmasi password tidak cocok!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Insert menggunakan email dan password_hash
        $sql = "INSERT INTO users (username, email, password_hash) VALUES ('$username', '$email', '$hashed_password')";
        if ($conn->query($sql)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='index.php?hal=login';</script>";
            exit;
        } else {
            $error = "Terjadi kesalahan sistem: " . $conn->error;
        }
    }
}
?>
<section style="padding: 150px 8% 100px; min-height: 80vh; display: flex; justify-content: center; align-items: center;">
    <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); width: 100%; max-width: 450px;">
        <h2 style="text-align: center; margin-bottom: 20px; color: var(--primary);">Buat Akun Baru</h2>
        
        <?php if($error): ?>
            <div style="background: #fee2e2; color: #ef4444; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-size: 14px;"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" action="index.php?hal=register">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required placeholder="Pilih username" pattern="[a-zA-Z0-9]+" title="Hanya huruf dan angka">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required placeholder="contoh@email.com">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required placeholder="Buat password (min. 6 karakter)" minlength="6">
            </div>
            <div class="form-group">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" name="konfirmasi_password" class="form-control" required placeholder="Ulangi password">
            </div>
            <button type="submit" class="btn-main" style="width: 100%; margin-top: 10px;">Daftar Sekarang</button>
        </form>
        <p style="text-align: center; margin-top: 20px; font-size: 14px; color: var(--text-gray);">
            Sudah punya akun? <a href="index.php?hal=login" style="color: var(--primary); font-weight: 600;">Masuk di sini</a>
        </p>
    </div>
</section>