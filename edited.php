<?php
session_start();
include 'config.php';
if (!isset($_SESSION["id"])) {
    header("location:comments.php");
}

if (empty($_POST['edit'])) {
    die('Please fill all required fields!');
}

if (!isset($_POST['id'])) {
    header("location:comments.php");
    //error tpi vor save chi exel

}



$comment_id = (int)$_POST['id'];
$edited = mysqli_real_escape_string($conn, htmlspecialchars($_POST['edit']));
$query = "UPDATE comments SET comment='$edited' WHERE comments.id = '$comment_id' and user_id = " . $_SESSION["id"];
$result = mysqli_query($conn, $query);
header('Location: comments.php');
