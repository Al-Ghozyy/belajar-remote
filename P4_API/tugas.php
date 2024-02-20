<?php

$conn = mysqli_commect('localhost', 'ibad', 'bismillah', 'db_toko');
include 'config.php';

$result = $coon->querty("SELECT * FROM tbl_produk");

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

if ($data != null) {
    echo json_encode([
    'Response' => 200,
    'Messege' => 'Success',
    'barang' => $data,
    ]);
} else {
    echo json_encode([
    'Response' => 200,
    'Messege' => 'Success',
    'barang' => $data,
    ]);
}
