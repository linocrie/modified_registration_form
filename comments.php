<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT `id`, `name`, `comment` from comments';
$result = mysqli_query($conn, $sql);
?>

<html>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Comment</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["comment"] . "</td></tr>";
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