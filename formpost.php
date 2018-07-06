<?php
require_once 'apikey.php';
$zipcode = $_POST['zip'];
$url     = "http://api.openweathermap.org/data/2.5/weather?zip=$zipcode,us&APPID=$apikey&units=imperial";