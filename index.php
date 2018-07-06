<?php require 'header.php';?>
<div class="container">
		<h1>Find out the current weather in your city!</h1>
			<div class="form-group">
    			<form class="form-inline" action="weather.php" method="POST" accept-charset="utf-8">
    			<h3>What city do you live in?</h3>
    			<div class="col-sm-6">
<input type="text" class="form-control" id="zip" name="zip">
					<button type="button" class="btn btn-secondary" name="submit">Go</button>
				</div>
			</form>
  </div>

	</div>
<?php require 'footer.php';?>