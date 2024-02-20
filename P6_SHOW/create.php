<?php
include 'config.php';

$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$min_stok = $_POST['min_stok'];
$harga = $_POST['harga'];
$jenis_produk_id = $_POST['jenis_produk_id'];

$result = $conn->query("INSERT INTO tbl_produk VALUES (default, '$nama_barang', $stok, $min_stok, $harga, $jenis_produk_id)");

$response = [];

if ($result) {
    $code = 20;
    $message = 'Data Added Successfully';
    $barang_id = $conn->insert_id;
    $data = [
        'idi' => $barang_id,
        'nama_barang' => $nama_barang,
        'stok' => $stok,
        'min_stok' => $min_stok,
        'harga' => $harga,
        'jenis_produk_id' => $jenis_produk_id
    ];
} else {
    $code = 500;
    $messege = 'Data Failed to Add';
}

echo json_encode([
    'Response' => $code,
    'Message' => $message,
    'Data' => $data
]);