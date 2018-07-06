<?php require 'header.php';
require 'weather.php';?>
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





