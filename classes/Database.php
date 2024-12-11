// classes/Database.php
<?php
class Database {
    private $conn;

    public function __construct() {
        require_once '../config/database.php';
        $this->conn = $conn;
    }

    public function getConnection() {
        return $this->conn;
    }
}
