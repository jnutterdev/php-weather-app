<?php require 'header.php';?>
<div class="container">
		<h1>Find out the current weather in your city!</h1>
			<div class="form-group">
    			<form class="form-inline" action="results.php" method="post" accept-charset="utf-8">
    			<h3>What city do you live in?</h3>
    			<div class="col-sm-6"">
    				<input type="text" class="form-control" id="cityname" placeholder="City name">
					<button type="button" class="btn btn-secondary">Go</button>
				</div>
			</form>
  </div>

	</div>
<?php require 'footer.php';?>