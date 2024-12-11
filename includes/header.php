// includes/header.php
<?php require_once 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold"><?php echo SITE_NAME; ?></a>
            <div>
                <a href="index.php" class="px-4">Home</a>
                <a href="donate.php" class="px-4">Donate</a>
                <a href="blog.php" class="px-4">Blog</a>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="px-4">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="px-4">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

// includes/footer.php
    <footer class="bg-gray-800 text-white py-8 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; <?php echo date('Y') . ' ' . SITE_NAME; ?></p>
        </div>
    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>