<?php
include 'config.php';

$id = $_GET['id'];

$result = $conn->query("DELETE FROM tbl_produk WHERE id = $id");

if ($result) {
    $code = 20;
    $message = 'Data Deleted Successfully';
} else {
    $code + 500;
    $message = 'Failed to Delete Data';
}

echo json_emcode([
    'Response' => $code,
    'Message' => $message
]);