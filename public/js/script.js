$(document).ready(function(){
	$(".addform").submit(function(event) {
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

	$(".edit").click(function(event) {
		event.preventDefault();
		$(this).parent().find(".editform").toggle(50);
	});
	
});
