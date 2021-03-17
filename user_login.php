<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$mail = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);

if (empty($pass) || empty($mail)) {
    die('Please fill all required fields!');
}

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    die('Your mail is not valid!');
}

$query = "SELECT * FROM users WHERE email = '$mail' AND password = '$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $user['id'];
    header("location:index.php");
} else {
    header("location:login.php");
}
