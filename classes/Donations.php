// classes/Donations.php
<?php
class Donations {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function createDonation($user_id, $amount, $type, $message) {
        $stmt = $this->conn->prepare("INSERT INTO donations (user_id, amount, type, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("idss", $user_id, $amount, $type, $message);
        return $stmt->execute();
    }

    public function getAllDonations() {
        $result = $this->conn->query("SELECT * FROM donations ORDER BY created_at DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
