$(document).ready(function(){

	$("form").submit(function(event) {
		event.preventDefault();
		data = $( this ).serializeArray();
		post_data = {}
		$.each(data, function(value) {
			element = data[value];
			post_data[element.name] = element.value;
		});
//		post_data['_token'] = "{{ csrf_token() }}";
		export_data = JSON.stringify( post_data );
//		alert(export_data);
		$.post( '/api/add', export_data, function(data) {
			alert(data);
		});
	});
	
});
