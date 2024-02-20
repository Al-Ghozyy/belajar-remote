<?php
include 'config.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM tbl_produk WHERE id = $id");

$data = [];

while($row = $result->fetch_assoc()){
    $data[] = $row;
}

if($data != null) {
    http_response_code(200);
    $code = 200;
    $message = "Get Detail Data Successfully";
} else {
    http_response_code(404);
    $code = 404;
    $message = 'Data Not found';
}
    
echo json_encode([
    'Response' => $code,
    'Messege' => $message,
    'barang' => $data,
]);
    
