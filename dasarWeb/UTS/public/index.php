<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';

$authController = new AuthController();
$action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';

if ($action == 'login') {
    $authController->login();
} else if($action == 'daftar'){
    $authController->daftar();
} else if ($action == 'dashboard') {
    $authController->dashboard();
} else if ($action == 'menu') {
    $authController->menu();
} else if ($action == 'pesan'){
    $authController->pesan();
} else if ($action == 'reservasi') {
    $authController->tempat();
} else if ($action == 'info') {
    if (isset($_GET['lantai'])) {
        $authController->info($_GET['lantai']);
    } else {
        $authController->tempat();
    }
} else if ($action == 'pesanTempat') {
    if (isset($_GET['lantai'])) {
        $authController->pesanTempat($_GET['lantai']);
    } else {
        $authController->reservasi();
    }
} else if ($action == 'riwayat') {
    $authController->riwayat();
} else if ($action == 'logout') {
    $authController->logout();
} else {
    $authController->dashboard();
}
?>