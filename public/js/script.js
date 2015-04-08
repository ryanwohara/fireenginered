$(document).ready(function(){

	$("form").submit(function(event) {
		event.preventDefault();
		data = $( this ).serializeArray();
//		alert(data);
		post_data = {}
		$.each(data, function(value) {
//			alert(data[value]);
			element = data[value];
//			element = JSON.parse(data['value']);
//			alert(element);
//			alert(element['name'] + " " + element.name + " " + element.value);
			post_data[element.name] = element.value;
		});
		export_data = JSON.stringify( post_data );
		$.post( '/api/add', export_data, function(data) {
			alert(data);
		});
//		data = $( this ).serialize();
//		$.ajax('/add',
//		alert( post_data ); 
//		alert(JSON.stringify( post_data ));
	});
	
});
