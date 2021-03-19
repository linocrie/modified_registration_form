<?php
session_start();
include 'config.php';
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}

if (empty($_POST['text'])) {
    die('Please fill all required fields!');
}

$text = htmlspecialchars($_POST['text']);


$user_id = $_SESSION['id'];
$query = "INSERT into `comments`(`comment`, `user_id`) VALUES ('$text','$user_id')";
$result = mysqli_query($conn, $query);
mysqli_close($conn);

if ($result) {
    header("Location: comments.php");
} else {
    echo '"Something went wrong"';
}
