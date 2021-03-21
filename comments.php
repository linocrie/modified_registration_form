<?php
session_start();
include 'config.php';
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}


$sql = 'SELECT comments.created_at, users.name, comments.comment, comments.user_id,comments.id FROM comments INNER JOIN users ON users.id=comments.user_id';
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
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["comment"] . "</td>";
                if (isset($_SESSION['id']) && $_SESSION['id'] == $row['user_id']) {
                    echo "<td><a  class='pl-3' href='edit_comment.php?id=" . $row['id'] . "'>Edit</a></td>";
                }
                echo "</tr>";
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