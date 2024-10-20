<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';

$authController = new AuthController();
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

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
} else if ($action == 'logout') {
    $authController->logout();
}
?>