<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: /ca-website/admin/login.php');
    exit;
}
require_once __DIR__ . '/../config/database.php';
?>