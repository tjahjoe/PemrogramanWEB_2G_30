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
                } else if (isset($_SESSION['lantai'])) {
                    $_SESSION['info'] = $_SESSION['tempInfo'];
                    $_SESSION['tempat'] = $_SESSION['tempTempat'];
                    unset($_SESSION['tempInfo']);
                    unset($_SESSION['tempTempat']);
                    header('location:../app/views/reservasi.php');
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

                $menu = $_SESSION['menu'];
                $telepon = $_SESSION['user']['telepon'];

                $pesanan = $this->pesananModel->pesan($pesanan, $menu, $telepon);
                if ($pesanan) {
                    unset($_SESSION['jumlahPesanan']);
                    header('location:../app/views/sukses.php');
                    exit();
                } else {
                    header('location:../app/views/menu.php');
                    exit();
                }
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
        header('location:../app/views/tempat.php');
        exit();
    }

    public function info($lantai)
    {
        $info = $this->reservasiModel->info($lantai);

        if ($info) {
            $_SESSION['tempInfo'] = $info;
        } else {
            unset($_SESSION['info']);
        }

        $ukuran = $this->tempatModel->ukuran($lantai);
        if ($ukuran) {
            $_SESSION['tempTempat'] = $ukuran;
            $_SESSION['lantai'] = "";

            if (isLogin()) {
                $_SESSION['info'] = $_SESSION['tempInfo'];
                $_SESSION['tempat'] = $_SESSION['tempTempat'];
                header('location:../app/views/reservasi.php');
                exit();
            } else {
                header('location:../app/views/login.php');
                exit();
            }
        } else {
            unset($_SESSION['tempat']);
            header('location:../app/views/tempat.php');
            exit();
        }

    }

    public function reservasi()
    {
        header('location:../app/views/reservasi.php');
        exit();
    }

    public function pesanTempat($lantai)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_SESSION['user'])) {
                header('location:../app/views/reservasi.php');
                exit();
            }
            $telepon = $_SESSION['user']['telepon'];
            $tempat_id = $_POST['tempat_id'];
            $hari = $_POST['hari'];
            $status = $this->reservasiModel->pesanTempat($telepon, $tempat_id, $hari);
            if ($status) {
                $info = $this->reservasiModel->info($lantai);

                if ($info) {
                    $_SESSION['info'] = $info;
                } else {
                    unset($_SESSION['info']);
                }
                header('location:../app/views/sukses.php');
                exit();
            } else {
                header('location:../app/views/reservasi.php');
                exit();
            }
        } else {
            header('location:../app/views/reservasi.php');
            exit();
        }
    }

    public function riwayat()
    {
        if (isLogin()) {
            $telepon = $_SESSION['user']['telepon'];
            $riwayatPesanan = $this->pesananModel->riwayatPesanan($telepon);
            if ($riwayatPesanan) {
                $_SESSION['riwayatPesanan'] = $riwayatPesanan;
            } else {
                unset($_SESSION['riwayatPesanan']);
            }
            $riwayatReservasi = $this->reservasiModel->riwayatReservasi($telepon);
            if ($riwayatReservasi) {
                $_SESSION['riwayatReservasi'] = $riwayatReservasi;
            } else {
                unset($_SESSION['riwayatReservasi']);
            }
            header('location:../app/views/riwayat.php');
            exit();
        } else {
            header('location:../app/views/login.php');
            exit();
        }
    }
}
?>