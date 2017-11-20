
$(document).ready( function(){

	$(".slider-left-btn").click( function(){
		var total_content = $(".slider-content").length;
		var active_id = $(".active-content").attr("id");
		$("#"+active_id).removeClass("active-content");
		$("#" + active_id).fadeToggle(1);
		var current_position = "";
		for( var i = 7; i<active_id.length; i++ ){
			current_position = current_position + active_id[i];
		}
		var next_position = ( parseInt(current_position) - 1 + parseInt(total_content) )%parseInt(total_content);
		var next_id = "content" + next_position;
		$("#" + next_id).fadeToggle("slow");
		$("#" + next_id).addClass("active-content");
	});

	$(".slider-right-btn").click( function(){
		var total_content = $(".slider-content").length;
		var active_id = $(".active-content").attr("id");
		$("#"+active_id).removeClass("active-content");
		$("#" + active_id).fadeToggle(1);
		var current_position = "";
		for( var i = 7; i<active_id.length; i++ ){
			current_position = current_position + active_id[i];
		}
		var next_position = ( parseInt(current_position) + 1 )%parseInt(total_content);
		var next_id = "content" + next_position;
		$("#" + next_id).fadeToggle("slow");
		$("#" + next_id).addClass("active-content");
	});

});