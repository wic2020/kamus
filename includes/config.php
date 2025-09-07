<?php
// Set timezone
date_default_timezone_set("Asia/Jakarta");

try {
    // Cek apakah aplikasi berjalan di Railway (menggunakan variabel lingkungan)
    if (getenv('RAILWAY_ENVIRONMENT')) {
        // Konfigurasi untuk Railway
        $host = getenv('MYSQLHOST');
        $port = getenv('MYSQLPORT'); // Dapatkan port dari variabel lingkungan
        $dbname = getenv('MYSQL_DATABASE');
        $user = getenv('MYSQLUSER');
        $pass = getenv('MYSQLPASSWORD');

        // Buat koneksi PDO untuk Railway
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $pass);
    } else {
        // Konfigurasi untuk localhost
        $host = "localhost";
        $port = "3306"; // Ganti dengan port lokal Anda jika berbeda
        $dbname = "dbkamus";
        $user = "root";
        $pass = "";

        // Buat koneksi PDO untuk localhost
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $pass);
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optional: set the PDO default fetch mode to FETCH_ASSOC
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}