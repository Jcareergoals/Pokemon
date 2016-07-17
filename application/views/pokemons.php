<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pokemons</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Jquery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
	integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<script src="../assets/js/pokemons.js"></script>
</head>
<body>
	<div class="container-fluid col-md-10 col-md-offset-1">
		<div class="row">
			<div class="header col-sm-10 col-xs-offset-1">
				<h1>Welcome to Pokemons</h1>
				<p>Click on a pokemon to see it's information in the pokedex</p>
			</div>
		</div>
		<div class="row">
			<!-- POKEMONS SECTION -->
			<div class="col-xs-12 col-sm-9 pokemons">
				<?php for($x = 1; $x < 156; $x++) 
				{?>
					<img class='pokemon' id='<? echo $x; ?>' src="http://pokeapi.co/media/img/<? echo $x;?>.png" width='100px' height='100px'>
				<?php } ?>
			</div>
			<!-- POKEDEX SECTION -->
			<div class="col-xs-12 col-sm-3">
				<div class="pokedex col-xs-3">
				</div>
			</div>
		</div>
		<!-- COPYRIGHT SECTION -->
		<div class="row">
			<div class="col-xs-12">
				<span class="copyright">Copyright &copy; 2016 by <a href="https://www.linkedin.com/in/jose-chery-763110a1" target="_blank">Jose Chery</a></span>
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>