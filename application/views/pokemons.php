<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pokemons</title>
	<meta charset="UTF-8">
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
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<script type="text/javascript">
		$(document).ready(function(){
			$('img').on('click', function(){
				var id = $(this).attr('id');
				$.get('http://pokeapi.co/api/v1/pokemon/'+id+'/', function(pokemon){
					console.log(pokemon);
					var name = pokemon.name
					var types = pokemon.types;
					var	height = pokemon.height; 
					var weight = pokemon.weight;
					var type = "<h5>Types</h5><ul>";
					for(var x = 0; x < types.length; x++){
						type += "<li class='description'>"+types[x].name+"</li>";
					}
					type += "</ul>";
					
					$('.pokedex').html("<h4><label>"+name+"</label></h4>");
					$('.pokedex').append("<img class='col-xs-offset-3' src='http://pokeapi.co/media/img/"+id+".png'></img>");
					$('.pokedex').append(type);
					$('.pokedex').append("<h5>Height</h5><span class='description'>"+height+"</span><h5>Weight</h5><span class='description'>"+weight+"</span>");
				}, 'json')
			})
		})
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="header col-sm-10 col-xs-offset-1">
				<h1>Welcome to Pokemons</h1>
				<p>Below, are some pokemons from PokeAPI</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-9">
				<? for($x = 1; $x < 156; $x++) 
				{?>
					<img class='pokemon' id='<? echo $x; ?>' src="http://pokeapi.co/media/img/<? echo $x;?>.png" width='100px' height='100px'>
				<?} ?>
			</div>
			<div class="col-xs-3">
				<div class="pokedex col-xs-3">
				</div>
			</div>
		</div>
	</div> <!-- End Container -->
</body> 
</head>