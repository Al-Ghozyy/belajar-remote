<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'createUser') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    $result = $conn->query($sql);

    echo json_encode(['success' => $result]);
    } else {
    echo json_encode(['error' => 'Invalid request']);
    }

?>
