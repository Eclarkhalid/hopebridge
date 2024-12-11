<?php include '../includes/header.php'; ?>
<div class="container mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold mb-4">Welcome to Hope Bridge</h1>
        <p class="text-xl">Supporting street children and creating lasting change</p>
    </div>
    
    <div class="grid md:grid-cols-3 gap-8">
        <?php foreach(DONATION_TYPES as $key => $type): ?>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4"><?php echo $type; ?></h2>
            <p class="mb-4">Help us make a difference by supporting our <?php echo strtolower($type); ?> program.</p>
            <a href="donate.php?type=<?php echo $key; ?>" 
               class="bg-blue-600 text-white px-4 py-2 rounded inline-block">
                Donate Now
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include '../includes/footer.php'; ?>