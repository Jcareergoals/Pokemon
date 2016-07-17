$(document).ready(function(){
	$('img').on('click', function(){
		var id = $(this).attr('id');
		$.get('http://pokeapi.co/api/v1/pokemon/' + id + '/', function(pokemon){
			// console.log(pokemon);

			var moves = "<ul class='desc_array desc_content'>"; 
			for(x in pokemon.moves) { moves += "<li>" + pokemon.moves[x].name + "</li>"; }
			moves += "</ul>";
			var abilities = "<ul class='desc_array desc_content _2'>";
			for(x in pokemon.abilities) { abilities += "<li>" + pokemon.abilities[x].name + "</li>"; }
			abilities += "</ul>";
			var types = "<ul class='desc_array desc_content _3'>";
			for(x in pokemon.types) { types += "<li>" + pokemon.types[x].name + "</li>";}

			$('#pokedex_content').html("<img src='http://pokeapi.co/media/img/" + id + ".png' alt=''></img>");
			$('#pokedex_content').append("<h4><label>" + pokemon.name + "</label></h4>");
			$('#pokedex_content').append("<h5 class='desc'>Attack:</h5><span class='desc_content'>" + pokemon.attack + "</span><br>");
			$('#pokedex_content').append("<h5 class='desc'>Speed:</h5><span class='desc_content'>" + pokemon.speed + "</span><br>");
			$('#pokedex_content').append("<h5 class='desc'>Defense:</h5><span class='desc_content'>" + pokemon.defense + "</span><br>");
			$('#pokedex_content').append("<h5 class='desc'>Weight:</h5><span class='desc_content'>" + pokemon.weight + "</span><br>");
			$('#pokedex_content').append("<h5 class='desc'>Height:</h5><span class='desc_content'>" + pokemon.height + "</span><br>");
			$('#pokedex_content').append("<h4 class='desc left'>Moves:</h4>");
			$('#pokedex_content').append(moves);
			$('#pokedex_content').append("<h4 class='desc left'>Abilities:</h4>"); 
			$('#pokedex_content').append(abilities);
			$('#pokedex_content').append("<h4 class='desc left'>Types:</h4>");
			$('#pokedex_content').append(types);
		}, 'json');
	});
});