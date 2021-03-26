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
</head>


<body>

    <div class="input-group col-sm-3 mt-3 mb-3">
        <input type="search" id="search" class="form-control rounded" placeholder="Search">

    </div>

    <div class="search d-flex flex-wrap border" id="commentsBlock">
        <?php
        if (mysqli_num_rows($result) > 0) :
            while ($row = mysqli_fetch_assoc($result)) :
        ?>
                <div class="comment border ml-3 mr-3 mt-4 mb-4">
                    <blockquote class="blockquote mb-0  card-body">
                        <p><?= $row['comment'] ?></p>
                        <footer class="blockquote-footer">
                            <p>
                                <?= $row['name'] ?> <cite title="created at"><?= $row['created_at'] ?></cite>
                            </p>
                        </footer>
                    </blockquote>
                    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $row['user_id']) : ?>
                        <small>
                            <a class='pl-3' href='edit_comment.php?id=<?= $row['id'] ?>'>Edit</a>
                        </small>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>

        <?php else :
            echo "0 results";
        endif;
        $conn->close();
        ?>
    </div>

    <div class="comment commentTpl d-none">
        <blockquote class="blockquote mb-0 card-body">
            <p class="commentText"></p>
            <footer class="blockquote-footer">
                <p><span class="userName"></span> <cite title="created at" class="createdAt"></cite></p>
            </footer>
        </blockquote>
        <small>
            <a class='pl-3' href='' class="editLink">Edit</a>
        </small>
    </div>
</body>

</html>
<script>
    let ajax = null;
    $(document).on('input', "#search", function() {
        let search_value = $('#search').val();
        $('#commentsBlock').html('');
        if (search_value.length >= 1) {
            if (ajax !== null) {
                ajax.abort();
            }
            ajax = $.ajax({
                url: 'search.php',
                type: 'GET',
                dataType: "json",
                data: {
                    search_value: search_value
                },
                success(response) {
                    for (let i = 0; i < response.length; i++) {
                        setComment(response[i]);
                    }
                }
            })
        } else {
            return 'No results';
        }
    })

    function setComment(data) {
        console.log(data);

        let tpl = $('.commentTpl').clone(true);
        $(tpl).find('.commentText').text(data.comment);
        $(tpl).find('.userName').text(data.name);
        $(tpl).find('.createdAt').text(data.created_at);
        $(tpl).find('.editLink').attr('href', 'edit_comment.php?id=' + data.id);
        $(tpl).removeClass('commentTpl');
        $(tpl).removeClass('d-none');
        $('#commentsBlock').append(tpl);
    }
</script>