
<?php

require "config.php";

$id = $_GET['id'];

$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$min_stok = $_POST['min_stok'];
$harga = $_POST['harga'];
$jenis_produk_id = $_POST['jenis_produk_id'];

$query = "UPDATE tbl_produk SET 
    nama_barang = '$nama_barang', 
    stok = '$stok', 
    min_stok = '$min_stok', 
    harga = '$harga', 
    jenis_produk_id = '$jenis_produk_id' 
    WHERE id = $id";

$result = $conn->query($query);

// $response = [];
if ($result) {
    $code = 201;
    $message = "Update successfully!";
} else {
    $code = 500;
    $message = "Update failed!";
}

echo json_encode([
    'Response' => $code,
    'Message' => $message
]);

// $conn->close();
?>