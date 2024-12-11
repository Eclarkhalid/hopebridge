// api/donations/create.php
<?php
require_once '../../config/database.php';
require_once '../../classes/Donations.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $donations = new Donations($conn);
    $data = json_decode(file_get_contents("php://input"));
    
    $result = $donations->createDonation(
        $_SESSION['user_id'],
        $data->amount,
        $data->type,
        $data->message
    );
    
    echo json_encode(['success' => $result]);
}