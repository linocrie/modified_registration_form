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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>

    <div class="input-group col-sm-3 mt-3 mb-3">
        <input type="search" id="search" class="form-control rounded" placeholder="Search">
        <input type="submit" id="submit" class="btn btn-outline-primary" value="search">
    </div>

    <table class="table" id="table">
        <thead>
            <tr>
                <th>Created At</th>
                <th>Name</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
<?php else :
                echo "0 results";
            endif;
            $conn->close();
?>
</body>

</html>
<script>
    $('#submit').click(function() {
        let search_value = $('#search').val();
        if (search_value == '') {
            alert("Please fill all fields.");
            return false;
        }
        $.ajax({
            url: 'search.php',
            type: 'post',
            dataType: "html",
            data: {
                search_value: search_value
            },
            success: function(data) {
                $("#table").find("tbody").html(data);

            }
        })
    })
</script>