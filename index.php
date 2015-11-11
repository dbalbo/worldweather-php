
<!doctype html>
<html>
<head>
	<title>WorldWideWeather</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
	bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
	bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="all"/>

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				
				<h1 class="center white">World Wide Weather</h1>

				<p class="lead center white"> Enter your city below to get your fast 3-day forecast</p>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="e.g. New York, London, Paris, Buenos Aires..."/>

					</div>	

					<button  id="myForecast" class="btn btn-success btn-lg">Give Me My Forecast</button>
				</form>	

				<div  id="success" class="alert alert-success">Success!</div>
				<div  id="fail" class="alert alert-danger">Could not find weather data for that city. Please try again.<br> (It is best to enter a city on planet Earth).</div>		

				<div  id="blankCity" class="alert alert-danger">Please enter at least <em>something</em> in the form provided <br>(an actual city will work)</div>		

			</div>	

			
		</div>	

	</div>	




<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/scripts.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>

</html>	
