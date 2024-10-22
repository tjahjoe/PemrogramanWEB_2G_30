<?php
require_once __DIR__ . '/../../config/database.php';
class Reservasi
{
    private $conn;
    private $table = 'Reservasi';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function info($lantai)
    {
        $query = "select r.tempat_id, convert(varchar, r.hari , 103) as hari, t.ukuran from " . $this->table . " r 
        join Tempat t on t.tempat_id = r.tempat_id 
        where lantai = ? and r.hari > ? order by r.hari, r.tempat_id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $lantai, PDO::PARAM_INT);
        $stmt->bindValue(2, date("Y-m-d"), PDO::PARAM_STR);

        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) {
            return $results;
        } else {
            return false;
        }
    }

    public function pesanTempat($telepon, $tempat_id, $hari)
    {
        if (empty($telepon) || empty($tempat_id) || empty($hari)) {
            return false;
        }

        $query = "select * from " . $this->table . " where tempat_id = ? and hari = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $tempat_id);
        $stmt->bindParam(2, $hari);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return false;
        } else {
            $query = "insert into " . $this->table . " (telepon, tempat_id, hari, status) values (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $telepon);
            $stmt->bindParam(2, $tempat_id);
            $stmt->bindParam(3, $hari);
            $stmt->bindValue(4, 'aktif');
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function riwayatReservasi($telepon)
    {
        $query = "select r.tempat_id, t.tempat_id, t.lantai, t.ukuran, t.harga, convert(varchar, r.hari , 103) as 
        hari from " . $this->table . " r join Tempat t on t.tempat_id = r.tempat_id where r.telepon = ? and r.hari >= ?
        order by r.hari, r.tempat_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $telepon);
        $stmt->bindValue(2, date("Y-m-d"));
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);//fetch all
        if ($results) {
            return $results;
        } else {
            return false;
        }
    }
}
?>