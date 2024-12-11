<?php 
include '../includes/header.php';
require_once '../config/database.php';
require_once '../classes/Donations.php';
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Make a Donation</h1>
    
    <form id="donationForm" class="max-w-lg mx-auto">
        <div class="mb-4">
            <label class="block mb-2">Donation Type</label>
            <select name="type" class="w-full p-2 border rounded">
                <?php foreach(DONATION_TYPES as $key => $type): ?>
                <option value="<?php echo $key; ?>"><?php echo $type; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block mb-2">Amount</label>
            <input type="number" name="amount" class="w-full p-2 border rounded" required>
        </div>
        
        <div class="mb-4">
            <label class="block mb-2">Message</label>
            <textarea name="message" class="w-full p-2 border rounded"></textarea>
        </div>
        
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">
            Submit Donation
        </button>
    </form>
</div>

<script src="assets/js/donation.js"></script>
<?php include '../includes/footer.php'; ?>