<?php
require_once 'config.php';
date_default_timezone_set("Asia/Yerevan");


function get_weather_fromapi()
{
    $time_init = curl_init();
    curl_setopt($time_init, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=yerevan&APPID=5099c5feb579c7a17b030de0d009282f&units=metric");
    curl_setopt($time_init, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($time_init);
    curl_close($time_init);
    $weather = json_decode($res);
    return $weather;
}
function get_weather($conn)
{
    $date = date('Y-m-d h:i:s');
    $query = "SELECT `time`, `name`, `temp` FROM `weather`";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        $weather = get_weather_fromapi();
        $name = $weather->name;
        $temp = $weather->main->temp;
        $qry = "INSERT INTO weather (`name`,`temp`,`time`) VALUES ('$name','$temp','$date')";
        $res = mysqli_query($conn, $qry);
        return ['temp' => $temp, 'name' => $name];
    } else {
        $row = mysqli_fetch_assoc($result);
        // var_dump($row);
        // exit();
        $db_date = $row['time'];
        $db_current_time = strtotime($db_date);

        if (time() - $db_current_time > 1800) {
            $weather = get_weather_fromapi();
            $new_name = $weather->name;
            $new_temp = $weather->main->temp;
            $new_qry = "UPDATE `weather` SET `temp` = '$new_temp' , `time` = '$date'";
            $new_res = mysqli_query($conn, $new_qry);
            return ['temp' => $new_temp, 'name' => $new_name];
        }
        return ['temp' => $row['temp'], 'name' => $row['name']];
    }
}
$weather = get_weather($conn);



?>

<html>

<body>

    <div>
        <div>
            <div>
                <div class="d-flex">
                    <h4 class="flex-grow-1">
                        <?= $weather['name'] ?>
                    </h4>
                </div>
                <div class="d-flex flex-column temp">
                    <h2 class="mb-0 font-weight-bold" id="heading"> <?= $weather['temp'] ?>&deg;C </h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>