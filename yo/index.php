<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['action'] == 'getUsers') {
    $sql = "SELECT id, username FROM users";
    $result = $conn->query($sql);
    $users = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($users);
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
