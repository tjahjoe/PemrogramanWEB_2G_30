<?php
require_once __DIR__ . '/../models/Person.php';
require_once __DIR__ . '/../models/Menu.php';
require_once __DIR__ . '/../models/Pesanan.php';
require_once __DIR__ . '/../models/Tempat.php';
require_once __DIR__ . '/../models/Reservasi.php';
require_once __DIR__ . '/../../session/session.php';

class AuthController
{
    private $personModel;
    private $menuModel;
    private $pesananModel;
    private $tempatModel;
    private $reservasiModel;
    public function __construct()
    {
        $this->personModel = new Person();
        $this->menuModel = new Menu();
        $this->pesananModel = new Pesanan();
        $this->tempatModel = new Tempat();
        $this->reservasiModel = new Reservasi();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $telepon = $_POST['telepon'];
            $password = $_POST['password'];
            $user = $this->personModel->login($telepon, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                if (isset($_SESSION['pesan'])) {
                    header('location:../app/views/menu.php');
                    exit();
                } else {
                    header('location:../app/views/dashboard.php');
                    exit();
                }
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
            $pesanan = $_POST['pesanan'];
            $_SESSION['jumlahPesanan'] = $pesanan;
            $_SESSION['pesan'] = "";
            if (isLogin()) {
                unset($_SESSION['jumlahPesanan']);
                $pesanan = $this->pesananModel->pesan($pesanan);
                header('location:../app/views/sukses.php');
                exit();
            } else {
                header('location:../app/views/login.php');
                exit();
            }
        } else {
            header('location:../app/views/menu.php');
            exit();
        }
    }

    public function tempat()
    {
        $tempat = $this->tempatModel->tempat();
        if ($tempat) {
            header('location:../app/views/tempat.php');
            exit();
        } else {
            header('location:../app/views/dashboard.php');
            exit();
        }
    }

    public function pesanTempat($lantai){
        $tempat = $this->reservasiModel->tempat($lantai);
    }
}
?>