<?php
session_start();

// Hapus semua variabel sesi
$_SESSION = [];

// Hancurkan sesi
session_destroy();

// Redirect ke login
header("Location: index.php");
exit;
