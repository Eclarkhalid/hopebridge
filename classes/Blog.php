// classes/Blog.php
<?php
class Blog {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function createPost($title, $content, $user_id) {
        $stmt = $this->conn->prepare("INSERT INTO blog_posts (title, content, user_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $title, $content, $user_id);
        return $stmt->execute();
    }

    public function getPosts() {
        $result = $this->conn->query("SELECT * FROM blog_posts ORDER BY created_at DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}