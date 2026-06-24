<?php
// Mencegah akses langsung tanpa melalui index.php
if(count(get_included_files()) == 1) die("Akses Ditolak!");

// Pengecekan Session (Harus Login dan Username = administrator)
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'administrator') {
    echo "<script>alert('Akses Ditolak! Halaman ini khusus Administrator.'); window.location='index.php?hal=landing';</script>";
    exit;
}
?>

<section class="section" style="padding-top: 150px; background: var(--light); min-height: 80vh;">
    <h2 class="section-title">Data Pengguna</h2>
    
    <div style="background: white; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.03); padding: 30px; overflow-x: auto; text-align: left;">
        <table style="width: 100%; border-collapse: collapse; min-width: 800px;">
            <thead>
                <tr style="background: var(--primary); color: white;">
                    <th style="padding: 15px; text-align: left; border-radius: 10px 0 0 0;">No</th>
                    <th style="padding: 15px; text-align: left;">Username</th>
                    <th style="padding: 15px; text-align: left;">Email</th>
                    <th style="padding: 15px; text-align: left;">Tanggal Daftar</th>
                    <th style="padding: 15px; text-align: left; border-radius: 0 10px 0 0;">Status / Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Memperbaiki ORDER BY menggunakan user_id sesuai skema database
                $sql_users = "SELECT * FROM users ORDER BY user_id DESC";
                $res_users = $conn->query($sql_users);

                if ($res_users && $res_users->num_rows > 0) {
                    $no = 1;
                    while($row = $res_users->fetch_assoc()) {
                        $role = ($row['username'] == 'administrator') ? '<span style="background:#fef3c7; color:#d97706; padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight:600;">Admin</span>' : '<span style="background:#e0e7ff; color:#4f46e5; padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight:600;">Member</span>';
                        
                        echo '<tr style="border-bottom: 1px solid #e2e8f0;">';
                        echo '  <td style="padding: 15px;">'.$no++.'</td>';
                        echo '  <td style="padding: 15px; font-weight: 600;">'.htmlspecialchars($row['username']).'</td>';
                        // Menampilkan data email dari tabel users
                        echo '  <td style="padding: 15px;">'.htmlspecialchars($row['email']).'</td>';
                        // Menampilkan data created_at dari tabel users
                        echo '  <td style="padding: 15px;">'.date('d M Y, H:i', strtotime($row['created_at'])).'</td>';
                        echo '  <td style="padding: 15px;">'.$role.'</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5" style="padding: 20px; text-align: center; color: var(--text-gray);">Belum ada pengguna.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</section>