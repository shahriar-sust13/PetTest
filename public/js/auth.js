
$(document).ready( function(){


	$("#login-btn").click( function(){
		$(".active-btn").removeClass("active-btn");
		$(this).addClass("active-btn");

		$(".active-form").removeClass("active-form");
		$(".disable-form").removeClass("disable-form");

		$("#login-form").addClass("active-form");
		$("#register-form").addClass("disable-form");
	});

	$("#register-btn").click( function(){
		$(".active-btn").removeClass("active-btn");
		$(this).addClass("active-btn");

		$(".active-form").removeClass("active-form");
		$(".disable-form").removeClass("disable-form");

		$("#register-form").addClass("active-form");
		$("#login-form").addClass("disable-form");
	});


});
