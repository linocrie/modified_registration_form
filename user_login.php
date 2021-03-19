<?php
session_start();
include 'config.php';
$mail = $_POST['email'];
$pass = md5($_POST['password']);

if (empty($pass) || empty($mail)) {
    die('Please fill all required fields!');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die('Your mail is not valid!');
}

$query = "SELECT id FROM users WHERE email = '$mail' AND password = '$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $user['id'];
    header("location:index.php");
} else {
    header("location:login.php");
}
