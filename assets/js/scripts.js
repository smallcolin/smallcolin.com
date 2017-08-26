(function($){

//----------------------------------------------//
//-----					Click on top-button       ------//
//----------------------------------------------//


	var scrollButton = function() {
	var _scroll = $(window).scrollTop();

		if ( _scroll > 270) {
				$('.top-button').show();
			}
			else {
				$('.top-button').hide();
			}
		}

		scrollButton();
		$(window).scroll(scrollButton);

	$(".top-button").click(function() {
		$("html, body").animate({
			scrollTop: 0
		}, 1200);
	});

//----------------------------------------------//
//-----					Click on menu links		  	------//
//----------------------------------------------//

	// Scroll to projects
	$("#toProjects").click(function() {
		$("html, body").animate({
			scrollTop: $("#projects").offset().top
		}, 1200);
	});

	// Scroll to about me
	$("#toAboutMe").click(function() {
		$("html, body").animate({
			scrollTop: $("#aboutMe").offset().top
		}, 2000);
	});

	// Scroll to music
	$("#toMusic").click(function() {
		$("html, body").animate({
			scrollTop: $("#music").offset().top
		}, 1200);
	});

	// Scroll to contact
	$("#toContact").click(function() {
		$("html, body").animate({
			scrollTop: $("#contact").offset().top
		}, 1200);
	});


})(jQuery);
