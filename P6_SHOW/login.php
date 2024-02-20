<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$token = md5($username.$password);

$result = $conn->query("UPDATE tbl_user SET token = '$token' WHERE username = '$username' AND password =  '$password'");


if ($result) {
    $code = 200;
    $message = 'Login Successful';
} else {
    $code = 404;
    $message = 'Login Failed';
}

echo json_encode([
    'Response' => $code,
    'Message' => $message,
    'Token' => $token
]);

