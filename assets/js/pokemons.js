$(document).ready(function(){
	$('img').on('click', function(){
		var id = $(this).attr('id');
		$.get('http://pokeapi.co/api/v1/pokemon/'+id+'/', function(pokemon){
			console.log(pokemon);
			var types = pokemon.types;
			var type = "<h5>Types</h5><ul>";
			for(x in types){
				type += "<li class='description'>"+types[x].name+"</li>";
			}
			type += "</ul>";

			$('.pokedex').html("<h4><label>"+pokemon.name+"</label></h4>");
			$('.pokedex').append("<img src='http://pokeapi.co/media/img/"+id+".png' align='middle' alt=''></img>");
			$('.pokedex').append(type);
			$('.pokedex').append("<h5>Height</h5><span class='description'>"+pokemon.height+"</span><h5>Weight</h5><span class='description'>"+pokemon.weight+"</span>");
		}, 'json');
	});
});