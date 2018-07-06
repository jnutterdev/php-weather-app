<?php
require 'formpost.php';

// section to open curl connection to openweather, get json //

$curl = curl_init();

curl_setopt_array($curl, array(
		CURLOPT_URL            => $url,
		CURLOPT_RETURNTRANSFER => 1, )
);

$results = curl_exec($curl);// saves json in a variable

curl_close($curl);// closes curl connection

// display json data //

$clima    = json_decode($results);
$tempmax  = $clima->main->temp_max;
$tempmin  = $clima->main->temp_min;
$icon     = $clima->weather[0]->icon.".png";
$cityname = $clima->name;

date_default_timezone_set('America/New_York');
$today = date("M j, Y g:i a");
?>

<?php require 'header.php'?>
<div class="container">
	<h1>Find out the current weather in your city!</h1>
	<ul>
		<li>City: <?php echo $cityname;?></li>
		<li>Date: <?php echo $today;?></li>
		<li>Temp Max: <?php echo $tempmax."&deg;F<br>"?></li>
		<li>Temp min: <?php echo $tempmin."&deg;F<br>"?></li>
		<li><?php echo "<img src='http://openweathermap.org/img/w/".$icon."'/>";?></li>
	</ul>
	</div>
<?php require 'footer.php';?>