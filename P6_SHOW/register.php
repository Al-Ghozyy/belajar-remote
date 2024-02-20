<?php

require "config.php";


$username = $_POST['username'];
$password = $_POST['password'];
// $token = md5($username . $password);

$result = $conn->query("INSERT INTO tbl_user (username, password, token) 
VALUES ('$username','$password', '$token')");

if ($result) {
     # code...
     $code = 200;
     $message = 'Register successfully';
} else {
     $code = 404;
     $message = 'Register failed';
}
echo json_encode([
     'Response' => $code,
     'Message' => $message,
     'Token' => $token
]);