<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pokemons</title>
	<meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="header col-sm-10 col-xs-offset-1">
				<h1>Welcome to Pokemons</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<p>Below, are some pokemons from PokeAPI</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<? for($x = 1; $x < 156; $x++) 
				{?>
					<img class='pokemon' id="" src="http://pokeapi.co/media/img/<? echo $x;?>.png" width='100px' height='100px'>
				<?} ?>
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>