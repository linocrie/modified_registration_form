<?php
session_start();
include 'config.php';
include 'forecast.php';
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}


$sql = 'SELECT comments.created_at, users.name, comments.comment, comments.user_id,comments.id FROM comments INNER JOIN users ON (users.id=comments.user_id) order by comments.created_at desc';
$result = mysqli_query($conn, $sql);
?>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <table class="table">
        <tr>
            <th>Created At</th>
            <th>Name</th>
            <th>Comment</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) :
            while ($row = mysqli_fetch_assoc($result)) :
        ?>
                <tr>
                    <td> <?= $row["created_at"] ?> </td>
                    <td> <?= $row["name"] ?></td>
                    <td> <?= $row["comment"] ?> </td>

                    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $row['user_id']) : ?>
                        <td><a class='pl-3' href='edit_comment.php?id=<?= $row['id'] ?>'>Edit</a></td>
                    <?php endif; ?>
                </tr>
            <?php endwhile; ?>
    </table>;
<?php else :
            echo "0 results";
        endif;
        $conn->close();
?>
</table>
</body>








</html>