<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}

if (empty($_POST['text'])) {
    die('Please fill all required fields!');
}

$text = htmlspecialchars($_POST['text']);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_id = $_SESSION['id'];
$query = "INSERT into `comments`(`comment`, `user_id`) VALUES ('$text','$user_id')";
$result = mysqli_query($conn, $query);
mysqli_close($conn);

if ($result) {
    header("Location: comments.php");
} else {
    echo '"Something went wrong"';
}
