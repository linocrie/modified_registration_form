<?php
$init = curl_init();
curl_setopt($init, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=Yerevan,usl&APPID=5099c5feb579c7a17b030de0d009282f&units=metric");
curl_setopt($init, CURLOPT_RETURNTRANSFER, true);
// $url = "http://api.openweathermap.org/data/2.5/forecast?q=Yerevan,usl&APPID=5099c5feb579c7a17b030de0d009282f&units=metric";
// $json = file_get_contents($url);
// $data = json_decode($json);
$result = curl_exec($init);
curl_close($init);
$data = json_decode($result);
?>

<html>

<body>

    <div>
        <div class="">
            <div>
                <div class="d-flex">
                    <h4 class="flex-grow-1">
                        <?= $data->city->name, ($data->city->country) ?>
                    </h4>
                </div>
                <div class="d-flex flex-column temp">
                    <h1 class="mb-0 font-weight-bold" id="heading"> <?= $data->list[0]->main->temp ?>&deg;C </h1>
                </div>
                <div class="d-flex ml-3">
                    <h6><?= $data->list[0]->main->temp_min ?>&deg;/</h6>
                    <h6><?= $data->list[0]->main->temp_max ?>&deg;</h6>
                    <div> <img src="https://i.imgur.com/Qw7npIg.png" width="100px"> </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>