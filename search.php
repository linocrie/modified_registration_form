<?php
include 'config.php';
sleep(2);
if (isset($_GET['search_value'])) {
    $search_value = $_GET['search_value'];
    $query = "SELECT `created_at`,`comment`,`name` FROM `comments` INNER JOIN users ON (comments.user_id = users.id) WHERE `comment` LIKE '%$search_value%'";
    $result = mysqli_query($conn, $query);
    $arr = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $comment = $row['comment'];
            $created_at = $row['created_at'];
            $arr[] = array("name" => $name, "comment" => $comment, "created_at" => $created_at);
        }
        echo json_encode($arr);
    } else {
        echo "no results";
    }
}
