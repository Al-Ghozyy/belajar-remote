<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'DELETE' && $_GET['action'] == 'deleteUser') {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM users WHERE id = $id";
    $result = $conn->query($sql);

    echo json_encode(['success' => $result]);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
