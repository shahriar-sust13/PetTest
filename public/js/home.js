
$(document).ready( function(){

	$(".pet-container").hover( 
		function(){
			var id = $(this).attr('id');
			$("#" + id + " a").fadeIn(300);
		},
		function(){
			var id = $(this).attr('id');
			$("#" + id + " a").fadeOut(10);
		}
	);

});