<?php
session_start();
include 'config.php';
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}


$sql = 'SELECT comments.user_id, users.name, comments.comment FROM comments INNER JOIN users ON users.id=comments.user_id';
$result = mysqli_query($conn, $sql);
?>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Comment</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["comment"] . "<a class='pl-3' href='index.php'>Edit</a>" . "</td></tr>";
            }
            echo '</table>';
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</body>








</html>