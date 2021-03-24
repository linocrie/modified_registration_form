<?php
require_once 'config.php';
date_default_timezone_set("Asia/Yerevan");
$date = date('Y-m-d h:i:s');
$query = "SELECT `time` FROM `weather`";
$result = mysqli_query($conn, $query);

function get_weather()
{
    $time_init = curl_init();
    curl_setopt($time_init, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=gyumri,usl&APPID=5099c5feb579c7a17b030de0d009282f&units=metric");
    curl_setopt($time_init, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($time_init);
    curl_close($time_init);
    $time_data = json_decode($res);
    return $time_data;
}

if (mysqli_num_rows($result) == 0) {
    $time_data = get_weather();
    $name = $time_data->name;
    $temp = $time_data->main->temp;
    $qry = "INSERT INTO weather (`name`,`temp`,`time`) VALUES ('$name','$temp','$date')";

    $qry_result = mysqli_query($conn, $qry);
} else {
    $row = mysqli_fetch_assoc($result);
    $db_date = $row['time'];
    $db_current_time = strtotime($db_date);

    if (time() - $db_current_time > 1800) {
        $time_data = get_weather();
        $new_temp = $time_data->main->temp;
        $new_qry = "UPDATE `weather` SET `temp` = '$new_temp' , `time` = '$date'";
        $new_qry_result = mysqli_query($conn, $qry);
    }
}
$last_query = "SELECT `name`, `temp` FROM weather order by `time` desc limit 1";
$last_res = mysqli_query($conn, $last_query);
$last_row = mysqli_fetch_assoc($last_res);

?>

<html>

<body>

    <div>
        <div>
            <div>
                <div class="d-flex">
                    <h4 class="flex-grow-1">
                        <?= $last_row['name'] ?>
                    </h4>
                </div>
                <div class="d-flex flex-column temp">
                    <h1 class="mb-0 font-weight-bold" id="heading"> <?= $last_row['temp'] ?>&deg;C </h1>
                </div>
                <div class="d-flex ml-3">
                    <div> <img src="https://i.imgur.com/Qw7npIg.png" width="100px"> </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>