<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}

$name = htmlspecialchars($_POST['name']);
$text = htmlspecialchars($_POST['text']);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "INSERT into `comments`(`name`, `comment`) VALUES ('$name', '$text')";
$result = mysqli_query($conn, $query);

$conn->close();

if ($result) {
    header("Location: comments.php");
} else {
    echo '"Something went wrong"';
}
