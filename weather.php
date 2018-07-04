<?php
require_once 'apikey.php';
$city  = "4423701";// reference city.list.json
$units = "imperial";// imperial, metric, & kelvin (default, don't specify unit)
$url   = "http://api.openweathermap.org/data/2.5/weather?id=$city&lang=en&units=$units&APPID=$apikey";

$contents = file_get_contents($url);
$clima    = json_decode($contents);

$temp_max = $clima->main->temp_max;
$temp_min = $clima->main->temp_min;
$icon     = $clima->weather[0]->icon.".png";

date_default_timezone_set('America/New_York');
$today    = date("M j, Y g:i a");
$cityname = $clima->name;
