$(document).ready(function(){

	$("form").submit(function(event) {
		event.preventDefault();
		data = $( this ).serializeArray();
		post_data = {}
		$.each(data, function(value) {
			element = data[value];
			post_data[element.name] = element.value;
		});
		$.post( '/api/add', post_data, function(data) {
			location.reload();
		});
	});
	
});
