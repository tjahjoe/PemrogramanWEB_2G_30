<?php
require_once __DIR__ . '/../../config/database.php';
class Reservasi{
    private $conn;
    private $table = 'Reservasi';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function tempat($lantai){
        $query = "select * from " . $this->table . " r join Tempat t on r. where lantai = " . $lantai;
        // var_dump($query);
        // $stmt = $this->conn->prepare($query);
        // $stmt->execute();
        var_dump($query);
    }
}
?>