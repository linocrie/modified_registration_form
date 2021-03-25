<?php
include 'config.php';
if (isset($_POST['search_value'])) {
    $search_value = $_POST['search_value'];
    $query = "SELECT `created_at`,`comment`,`name` FROM `comments`, `users` WHERE `comment` LIKE '%$search_value%' AND comments.user_id = users.id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['created_at'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['comment'] . "</td>";
            echo "</tr>";
        }
    }
}
