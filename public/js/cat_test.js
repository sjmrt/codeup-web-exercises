
$(document).ready(function() {

	$("name").keydown(function(e){
		console.log(e.which);
	});

});


('#nav-links').on('click', 'a', function(e) {
	e.preventDefault();

	$(this)
})