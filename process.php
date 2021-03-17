<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
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
