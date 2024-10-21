<?php
require_once __DIR__ . '/../../config/database.php';
class Tempat{
    private $conn;
    private $table = 'Tempat';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function tempat(){
        $query = "select lantai from " . $this->table . " group by lantai";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if(!empty($stmt)){
            return $stmt->fetchall(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
}
?>