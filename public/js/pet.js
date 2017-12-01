

$(document).ready( function(){

	$(".contact-btn").click( function(){
		$(this).html("01717617851");
		$(this).css({"font-size":"22px", "width":"200px", "border":"transparent", "color":"#2D2D2D"});
	});

	$("#left-arrow").click( function(){
		console.log("hello");
		var total_content = $(".slider-img-container").length;
		var active_id = $(".active-img").attr("id");
		$("#"+active_id).removeClass("active-img");
		$("#" + active_id).fadeToggle(1);

		var current_position = "";
		for( var i = 8; i<active_id.length; i++ ){
			current_position = current_position + active_id[i];
		}
		var next_position = ( parseInt(current_position) - 1 + parseInt(total_content) )%parseInt(total_content);
		var next_id = "pet-img-" + next_position;
		$("#" + next_id).fadeToggle("slow");
		$("#" + next_id).addClass("active-img");
	});

	$("#right-arrow").click( function(){
		var total_content = $(".slider-img-container").length;
		var active_id = $(".active-img").attr("id");
		$("#"+active_id).removeClass("active-img");
		$("#" + active_id).fadeToggle(0);

		var current_position = "";
		for( var i = 8; i<active_id.length; i++ ){
			current_position = current_position + active_id[i];
		}
		var next_position = ( parseInt(current_position)+1 )%parseInt(total_content);
		var next_id = "pet-img-" + next_position;
		$("#" + next_id).fadeToggle("slow");
		$("#" + next_id).addClass("active-img");
	});

});
