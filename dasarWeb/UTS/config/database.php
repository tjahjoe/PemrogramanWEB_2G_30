<?php
class Database{
    private $dsn = "sqlsrv:server=CHLZ\SQLEXPRESS;database=Restoran";
    public $conn;

    public function getConnection(){
        $this->conn = null;
        try {
            $this->conn = new PDO($this->dsn);
        } catch (PDOException $e) {
            echo $e;
        }
        return $this->conn;
    }
}
?>