<?php
session_start();
include 'config.php';
if (!isset($_SESSION["id"])) {
    header("location:comments.php");
}
$comment_id = (int)$_GET['id'];

$qry = "SELECT comment FROM comments WHERE comments.id ='$comment_id' ";
$qry_result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($qry_result);
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h4 style="margin-left:40%" class="mt-5">Write Your Comment Here</h4>
    <form style="margin-left:35%" action="edited.php" method="post">
        <input type="hidden" name="id" value="<?php echo $comment_id ?>">
        <input name="edit" class="w-50 h-25 form-control" value="<?php echo $row['comment']; ?>">
        <input type="submit" value="Edit" class="btn ml-5 btn-primary">
    </form>
</body>

</html>