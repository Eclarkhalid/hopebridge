// api/blog/posts.php
<?php
require_once '../../config/database.php';
require_once '../../classes/Blog.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $blog = new Blog($conn);
    $posts = $blog->getPosts();
    echo json_encode(['posts' => $posts]);
}