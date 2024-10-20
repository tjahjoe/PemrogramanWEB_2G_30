<?php
require_once __DIR__ . '/../../config/database.php';

class Menu{
    private $conn;
    private $table = 'Menu';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function menu(){
        $query = "select * from ". $this->table;
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