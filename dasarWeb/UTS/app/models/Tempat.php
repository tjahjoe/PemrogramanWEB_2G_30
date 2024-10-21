<?php
require_once __DIR__ . '/../../config/database.php';
class Tempat{
    private $conn;
    private $table = 'Tempat';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function ukuran($lantai){
        $query = "select * from " . $this->table . " where lantai = " . $lantai ;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) {
            return $results;
        } else {
            return false;
        }
    }
}
?>