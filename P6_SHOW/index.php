<?php
include 'config.php';

$apikey = isset($_GET['apikey']) ? $_GET['apikey'] : null;

if ($apikey) {
    $token = $conn->query("SELECT * FROM tbl_user WHERE token = '$apikey'");
    $response = [];

    if ($token->num_rows > 0) {
        $result = $conn->query("SELECT * FROM tbl_produk");

        http_response_code(200);
        $code = 200;
        $message = 'Get Data Successfuly';


        while ($row = $result->fetch_assoc()) {
        $data['id'] = $row['id'];
        $data['nama_barang'] = $row['nama_barang'];
        $data['harga'] = $row['harga'];

        array_push($response, $data);
    }
        } else {
            $code = 404;
            $message = 'Token Invalid';
        }

    } else {
        $code = 404;
        $message = 'API key not provided';
    }

echo json_encode([
    'Response' => $code,
    'Messege' => $message,
    'barang' => $response,
]);

