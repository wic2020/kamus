<?php
// Mencegah akses langsung tanpa melalui index.php
if(count(get_included_files()) == 1) die("Akses Ditolak!");

// Pengecekan Session (Harus Login)
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silakan login terlebih dahulu.'); window.location='index.php?hal=login';</script>";
    exit;
}

$username_aktif = $_SESSION['username'];
$pesan = '';

// Proses Ganti Password
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ganti_password'])) {
    $password_baru = $_POST['password_baru'];
    $konfirmasi = $_POST['konfirmasi_password'];

    if ($password_baru !== $konfirmasi) {
        $pesan = "<div style='background: #fee2e2; color: #ef4444; padding: 10px; border-radius: 8px; margin-bottom: 20px;'>Konfirmasi password tidak cocok!</div>";
    } else {
        $hashed_password = password_hash($password_baru, PASSWORD_DEFAULT);
        $sql_update = "UPDATE users SET password='$hashed_password' WHERE username='$username_aktif'";
        
        if ($conn->query($sql_update)) {
            $pesan = "<div style='background: #dcfce7; color: #166534; padding: 10px; border-radius: 8px; margin-bottom: 20px;'>Password berhasil diubah!</div>";
        } else {
            $pesan = "<div style='background: #fee2e2; color: #ef4444; padding: 10px; border-radius: 8px; margin-bottom: 20px;'>Terjadi kesalahan: ".$conn->error."</div>";
        }
    }
}
?>

<section class="section" style="padding-top: 150px; background: var(--light); min-height: 80vh;">
    <h2 class="section-title">Profil Saya</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center; align-items: flex-start; text-align: left;">
        
        <!-- Kartu Info & Progress -->
        <div style="flex: 1; min-width: 300px; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.03);">
            <div style="text-align: center; margin-bottom: 30px;">
                <div class="icon-circle" style="width: 100px; height: 100px; font-size: 50px; margin-bottom: 15px;">👤</div>
                <h3 style="color: var(--dark); font-size: 24px;"><?= htmlspecialchars($username_aktif) ?></h3>
                <span style="background:#e0e7ff; color:#4f46e5; padding: 5px 15px; border-radius: 20px; font-size: 12px; font-weight:600;">
                    <?= ($username_aktif == 'administrator') ? 'Administrator' : 'Member VocabJoy' ?>
                </span>
            </div>

            <h4 style="margin-bottom: 15px; border-bottom: 2px solid #f1f5f9; padding-bottom: 10px;">Progress Belajar (Simulasi)</h4>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span style="color: var(--text-gray);">Kategori Selesai:</span>
                <span style="font-weight: 600; color: var(--primary);">0 / 10</span>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <span style="color: var(--text-gray);">Kosakata Dihafal:</span>
                <span style="font-weight: 600; color: var(--secondary);">0 Kata</span>
            </div>
            <div style="width: 100%; background: #e2e8f0; border-radius: 10px; height: 10px; margin-top: 15px;">
                <div style="width: 5%; background: var(--secondary); height: 10px; border-radius: 10px;"></div>
            </div>
        </div>

        <!-- Kartu Ganti Password -->
        <div style="flex: 1; min-width: 300px; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.03);">
            <h3 style="margin-bottom: 20px; color: var(--dark);">Ganti Password</h3>
            
            <?= $pesan ?>

            <form method="POST" action="index.php?hal=profile">
                <input type="hidden" name="ganti_password" value="1">
                <div class="form-group">
                    <label class="form-label">Password Baru</label>
                    <input type="password" name="password_baru" class="form-control" required minlength="6" placeholder="Masukkan password baru">
                </div>
                <div class="form-group">
                    <label class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" name="konfirmasi_password" class="form-control" required placeholder="Ulangi password baru">
                </div>
                <button type="submit" class="btn-main" style="width: 100%; margin-top: 10px;">Simpan Perubahan</button>
            </form>
        </div>

    </div>
</section>