<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}
?>
<html>

<head>
    <title>php task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h4 style="margin-left:40%" class="mt-5">Write Your Comment Here</h4>
    <form style="margin-left:35%" action="create_comment.php" method="post">
        <div class="md-form mb-4 col-md-12 text-center pink-textarea active-pink-textarea-2">
            <textarea id="form17" name="text" class="md-textarea w-50 h-25 form-control" rows="3"></textarea>
        </div>
        <input type="submit" value="Submit" class="btn ml-5 btn-primary">
        <a href="logout.php" class="ml-5">Log Out</a>
    </form>


</body>

</html>