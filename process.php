<?php
include 'config.php';
$user_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
$email = $_POST['email'];
$pass = md5($_POST['password']);

if (empty($user_name) || empty($pass) || empty($email)) {
    die('Please fill all required fields!');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Your mail is not valid!');
}


$query = "INSERT into `users`(`name`, `email`, `password`) VALUES ('$user_name', '$email', '$pass')";

$result = mysqli_query($conn, $query);



mysqli_close($conn);

if ($result) {
    header("Location: login.php");
} else {
    echo "Something went wrong";
}
