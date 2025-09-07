<?php
// Set timezone
date_default_timezone_set("Asia/Jakarta");

try {
    // Cek apakah aplikasi berjalan di Railway (menggunakan variabel lingkungan)
    if (getenv('RAILWAY_ENVIRONMENT')) {
        // Konfigurasi untuk Railway
        $host = getenv('MYSQLHOST');
        $dbname = getenv('MYSQL_DATABASE');
        $user = getenv('MYSQLUSER');
        $pass = getenv('MYSQLPASSWORD');

        // Buat koneksi PDO untuk Railway
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    } else {
        // Konfigurasi untuk localhost
        $host = "localhost";
        $dbname = "dbkamus";
        $user = "root";
        $pass = "";

        // Buat koneksi PDO untuk localhost
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
