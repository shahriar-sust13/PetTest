
function get_id(id_str){
	var id_no = "";
	var i;
	for( i = 4; i<id_str.length; i++ )
		id_no += id_str[i];
	return parseInt(id_no);
}

$(document).ready( function(){

	$(".menu-item").click( function(){
		var id = get_id( $(this).attr("id") );
		$(".active-item").removeClass("active-item");
		$(this).addClass("active-item");
		$(".active-tab").addClass("disable-tab");
		$(".active-tab").removeClass("active-tab");
		$("#tab" + id).removeClass("disable-tab");
		$("#tab" + id).addClass("active-tab");
	});

});