<?php
require_once __DIR__ . '/../models/Person.php';
require_once __DIR__ . '/../models/Menu.php';
require_once __DIR__ . '/../models/Pesanan.php';
require_once __DIR__ . '/../../session/session.php';

class AuthController
{
    private $personModel;
    private $menuModel;
    private $pesananModel;
    public function __construct()
    {
        $this->personModel = new Person();
        $this->menuModel = new Menu();
        $this->pesananModel = new Pesanan();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $telepon = $_POST['telepon'];
            $password = $_POST['password'];
            $user = $this->personModel->login($telepon, $password);

            if ($user) {
                $_SESSION['user'] = $user;
                header('location:../app/views/dashboard.php');
                exit();
            } else {
                header('location:../app/views/login.php');
                exit();
            }
        } else {
            header('location:../app/views/login.php');
            exit();
        }
    }

    public function daftar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $telepon = $_POST['telepon'];
            $password = $_POST['password'];
            $status = $this->personModel->daftar($nama, $telepon, $password);
            if ($status) {
                header('location:../app/views/login.php');
                exit();
            } else {
                header('location:../app/views/daftar.php');
                exit();
            }
        } else {
            header('location:../app/views/daftar.php');
            exit();
        }
    }

    public function logout()
    {
        logout();
    }

    public function dashboard()
    {
        header('location:../app/views/dashboard.php');
        exit();
    }

    public function menu()
    {
        $menu = $this->menuModel->menu();
        if ($menu) {
            $_SESSION['menu'] = $menu;
            header('location:../app/views/menu.php');
            exit();
        } else {
            header('location:../app/views/login.php');
            exit();
        }
    }

    public function pesan()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isLogin()) {
                $pesanan = $_POST['pesanan'];
                $pesanan = $this->pesananModel->pesan($pesanan);
                header('location:../app/views/menu.php');
                exit();
            } else {
                header('location:../app/views/login.php');
                exit();
            }
        }
    }
}
?>