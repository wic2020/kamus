<?php

$isLocal =
    $_SERVER['SERVER_ADDR'] === '127.0.0.1' ||
    $_SERVER['SERVER_ADDR'] === '::1';

if ($isLocal) {
    // Database lokal
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "dbkamus";
} else {
    // Database hosting
    $host = "localhost";
    $user = "mxyajrbo_kamus";
    $pass = "cMzG4zAyz7DwjChrDsS9";
    $db   = "mxyajrbo_kamus";
}

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8mb4");