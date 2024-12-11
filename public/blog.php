<?php 
include '../includes/header.php';
require_once '../config/database.php';
require_once '../classes/Blog.php';

$blog = new Blog($conn);
$posts = $blog->getPosts();
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Blog Posts</h1>
    
    <div class="grid md:grid-cols-2 gap-8">
        <?php foreach($posts as $post): ?>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4"><?php echo htmlspecialchars($post['title']); ?></h2>
            <p class="mb-4"><?php echo htmlspecialchars(substr($post['content'], 0, 200)) . '...'; ?></p>
            <p class="text-gray-600">Posted on <?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
