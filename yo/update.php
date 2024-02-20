<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'PUT' && $_GET['action'] == 'updateUser') {
    parse_str(file_get_contents("php://input"), $_PUT);
    $id = $_GET['id'];
    $username = $_PUT['username'];
    $password = $_PUT['password'];
    
    // Implement update function

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
