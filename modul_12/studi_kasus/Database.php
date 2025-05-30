<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "db_praktik";
    private $conn;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";

        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }

    public function connection() {
        return $this->conn;
    }
}
?>
