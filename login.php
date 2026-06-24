<?php
if(count(get_included_files()) == 1) die("Akses Ditolak!");

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $res = $conn->query($sql);

    if ($res && $res->num_rows > 0) {
        $row = $res->fetch_assoc();
        // Cek password_hash dari database
        if (password_verify($password, $row['password_hash']) || $password == $row['password_hash']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['user_id']; 
            echo "<script>alert('Login Berhasil!'); window.location='index.php?hal=landing';</script>";
            exit;
        } else {
            $error = "Password yang Anda masukkan salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>
<section style="padding: 150px 8% 100px; min-height: 80vh; display: flex; justify-content: center; align-items: center;">
    <div style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.05); width: 100%; max-width: 400px;">
        <h2 style="text-align: center; margin-bottom: 20px; color: var(--primary);">Login ke Akun Anda</h2>
        
        <?php if($error): ?>
            <div style="background: #fee2e2; color: #ef4444; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-size: 14px;">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="index.php?hal=login">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required placeholder="Masukkan username">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn-main" style="width: 100%; margin-top: 10px;">Masuk</button>
        </form>
        <p style="text-align: center; margin-top: 20px; font-size: 14px; color: var(--text-gray);">
            Belum punya akun? <a href="index.php?hal=register" style="color: var(--primary); font-weight: 600;">Daftar di sini</a>
        </p>
    </div>
</section>