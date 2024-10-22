<?php

require_once __DIR__ . '/../../config/database.php';
class Pesanan{
    private $conn;
    private $table = "Pesanan";

    public function __construct(){
        $database = new Database();
        $this -> conn = $database -> getConnection();
    }

    public function pesan($pesanan, $menu, $telepon){
        // $menu = $_SESSION['menu']; 
        // $telepon = $_SESSION['user']['telepon'];

        $query = "insert into Pesanan (telepon, menu_id, jumlah, status) values (?, ?, ?, ?)";
        $stmt = $this -> conn -> prepare($query);
        $this -> conn -> beginTransaction();
        $jumlahKosong = 0;

        foreach ($menu as $m){
            if ($pesanan[$m['menu_id']] != '' && $pesanan[$m['menu_id']] != 0) {
                $stmt -> bindParam(1, $telepon);
                $stmt -> bindParam(2, $m['menu_id']);
                $stmt -> bindValue(3, intval($pesanan[$m['menu_id']]));
                $stmt -> bindValue(4, 'aktif');
                $stmt -> execute();
            } else {
                $jumlahKosong += 1;
            }
        }

        if ($jumlahKosong == count($menu)) {
            return false;
        }

        $this -> conn ->commit();
        return true;
    }
}
?>