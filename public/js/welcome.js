
$(document).ready( function(){
	$(".product-type a").click( function(){
		$(".active-product").css("color", "#7E7E7E");
		$(".active-product").removeClass("active-product");
		$(this).addClass("active-product");
		$(this).css("color", "#E7E6E6");

		var id = $(this).attr('id');
		var digit = id[id.length-1];
		$(".active-row").addClass("disable-row");
		$(".active-row").removeClass("active-row");
		$("#"+"row"+digit).removeClass("disable-row");
		$("#"+"row"+digit).addClass("active-row");
	});

	$(".item-container-div").hover( 
		function(){
			var id = $(this).attr('id');
			//$("#" + id + " a").addClass("active-buy-button");
			$("#" + id + " a").fadeIn("slow");
		},
		function(){
			var id = $(this).attr('id');
			//$("#" + id + " a").removeClass("active-buy-button");
			$("#" + id + " a").fadeOut("slow");
		}
	);
});
