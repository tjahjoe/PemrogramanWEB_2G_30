<?php
require_once __DIR__ . '/../../config/database.php';

class Person{
    private $conn;
    private $table = 'Persons';

    public function __construct(){
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function login($telepon, $password){
        $query = "select * from ". $this->table . " where telepon = ? and  password = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $telepon);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        
        if( !empty($stmt)){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function daftar($nama, $telepon, $password) {
        if (empty($nama) || empty($telepon) || empty($password) || !is_numeric($telepon)) {
            return false; 
        }
        $query = "select * from " . $this->table . " where telepon = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $telepon);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            return false; 
        } else {
            $query = "insert into " . $this->table . " (nama, telepon, password) values (?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $nama);
            $stmt->bindParam(2, $telepon);
            $stmt->bindParam(3, $password);
            if ($stmt->execute()) {
                return true; 
            } else {
                return false; 
            }
        }
    }
    
}
?>