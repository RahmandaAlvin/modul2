<?php
class Dosen {
    private $conn;
    public $idDosen, $namaDosen, $noHP;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $stmt = $this->conn->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
        $stmt->bind_param("ss", $this->namaDosen, $this->noHP);
        return $stmt->execute();
    }

    public function update() {
        $stmt = $this->conn->prepare("UPDATE t_dosen SET namaDosen=?, noHP=? WHERE idDosen=?");
        $stmt->bind_param("ssi", $this->namaDosen, $this->noHP, $this->idDosen);
        return $stmt->execute();
    }

    public function cari($id) {
        $stmt = $this->conn->prepare("SELECT * FROM t_dosen WHERE idDosen=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getAll() {
        $result = $this->conn->query("SELECT * FROM t_dosen ORDER BY idDosen ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
