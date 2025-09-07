<?php
require_once "includes/config.php";
header('Content-Type: application/json');

$field = $_GET['field'] ?? '';
$value = trim($_GET['value'] ?? '');

if (!$field || !$value) {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
    exit;
}

// Hanya ijinkan field tertentu untuk mencegah SQL injection
$allowed = ['username', 'email'];
if (!in_array($field, $allowed, true)) {
    echo json_encode(["status" => "error", "message" => "Invalid field"]);
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE $field = ?");
    $stmt->execute([$value]);
    $count = (int)$stmt->fetchColumn();
    if ($count > 0) {
        echo json_encode(["status" => "exists", "message" => ucfirst($field) . " sudah digunakan"]);
    } else {
        echo json_encode(["status" => "ok", "message" => ucfirst($field) . " tersedia"]);
    }
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Server error"]);
}
