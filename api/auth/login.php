// api/auth/login.php
<?php
require_once '../../config/database.php';
require_once '../../classes/Auth.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new Auth($conn);
    $data = json_decode(file_get_contents("php://input"));
    
    $result = $auth->login($data->email, $data->password);
    echo json_encode(['success' => $result]);
}