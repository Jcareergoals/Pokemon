<!DOCTYPE html>
<html lang="en">
<head>
	<title>PKMons</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../assets/pokeball.png"> <!-- Favicon -->
	<!-- SEO -->
	<meta name="author" content="Jose Chery">
	<meta name="description" content="Are you a Pok&eacute;mon Go player? Do you like Pok&eacute;mons? PKMon.com is the perfect place to get 
	instant pokemon information that can assist you on your journey.">
	<meta name="keywords" content="Jose Chery, Pokemon Go, Pokemon Go Fort Myers, Pokemon Go Cape Coral, Pokemon Go Naples, Pokemon Go Lehigh Acres,
	Web Developer Fort Myers, Web Developer Naples, Web Developer Cape Coral, Web Developer Lee County, SoftWare Engineer Fort Myers, 
	Software Engineer Naples, Software Engineer Lee County, Software Engineer, Web Developer, Programmer Fort Myers, Programmer Naples, 
	Full Stack Engineer, Full Stack Engineer Fort Myers, Full Stack Engineer Naples, Full Stack Engineer Florida, Junior Web Developer, 
	Full Stack Web Developer Fort Myers, Junior Web Developer Fort Myers, Jr Web developer fort myers, jr web developer Naples">
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
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css"> <!-- CSS -->
	<script src="../assets/js/pokemons.js"></script> <!-- JavaScript -->
</head>
<body>
	<div class="container-fluid col-md-10 col-md-offset-1">
		<div class="row">
			<div id="header" class="col-sm-10 col-xs-offset-1">
				<h1>Welcome to PKMons!</h1>
			</div>
		</div>
		<div class="row">
			<!-- POKEMONS SECTION -->
			<div class="col-xs-12 col-sm-9 pokemons">
				<?php for($x = 1; $x < 156; $x++) 
				{?>
					<img class='pokemon' id='<?php echo $x; ?>' src="http://pokeapi.co/media/img/<?php echo $x;?>.png" width='100px' height='100px'>
				<?php } ?>
			</div>
			<!-- POKEDEX SECTION -->
			<div class="col-xs-12 col-sm-3">
				<div id="pokedex" class="col-xs-3">
					<h1 class='pokedex_heading'>POKEDEX</h1>
					<div id="pokedex_content">
						<h5>Select a pokemon character to view it's information.</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- COPYRIGHT SECTION -->
		<div class="row">
			<div id='copyright' class="col-xs-12">
				<span class="copyright">Copyright &copy; 2016 by <a href="https://www.linkedin.com/in/jose-chery-763110a1" target="_blank">Jose Chery</a></span>
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>