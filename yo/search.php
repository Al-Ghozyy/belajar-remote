<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'searchUser') {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    echo json_encode($user);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
