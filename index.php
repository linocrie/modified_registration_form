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
    <form action="create_comment.php" method="post">
        <div class="input-group mt-3 mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Name</span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">With textarea</span>
            </div>
            <textarea class="form-control" name="text" aria-label="With textarea"></textarea>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Submit</button>
        <a href="logout.php">Log Out</a>
    </form>


</body>

</html>