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
	$("#toProjects, #toProjectsMobile").click(function() {
		$("html, body").animate({
			scrollTop: $("#projects").offset().top
		}, 1200);
	});

	// Scroll to about me
	$("#toAboutMe, #toAboutMeMobile").click(function() {
		$("html, body").animate({
			scrollTop: $("#aboutMe").offset().top
		}, 2000);
	});

	// Scroll to music
	$("#toMusic, #toMusicMobile").click(function() {
		$("html, body").animate({
			scrollTop: $("#music").offset().top
		}, 1200);
	});

	// Scroll to contact
	$("#toContact, #toContactMobile").click(function() {
		$("html, body").animate({
			scrollTop: $("#contact").offset().top
		}, 1200);
	});

  // Scroll To Photos
  $("#toPhotos, #toPhotosMobile").click(function() {
		$("html, body").animate({
			scrollTop: $("#photos").offset().top
		}, 1200);
	});


//----------------------------------------------//
//-----						Mobile menu 				  	------//
//----------------------------------------------//

 $(".menu-icon").click(function(){
	 $(".mobilemenu").fadeToggle();
	 $(".menu-icon").children().toggleClass("fa-chevron-down fa-chevron-up");
	 $("#fade").fadeToggle();
	 $("html, body").toggleClass("no-scroll");
 });

 // On menu item click
 $(".mobilemenu > li > a").click(function(){
	 $(this).parents(".mobilemenu").fadeToggle("fast");
	 $(".menu-icon").children().toggleClass("fa-chevron-down fa-chevron-up");
	 $("#fade").hide();
	 $("html, body").removeClass("no-scroll");
 });

 // Click on fade
 $("#fade").click(function(){
	 $(this).hide();
	 $(".menu-icon").children().toggleClass("fa-chevron-down fa-chevron-up");
	 $(".mobilemenu").fadeToggle();
	 $("html, body").toggleClass("no-scroll");
 });


 //----------------------------------------------//
 //-----						Extras 				 		     ------//
 //----------------------------------------------//

	$(".site-container").hover(function() {
		$(this).children(".move-text").css('transform', 'translateY(0)');
		$(this).children(".move-text").css('transition', 'transform .5s');
		$(this).children(".box").css('opacity', 0.6);
		$(this).children(".box").css('transition', 'opacity .5s');
	}, function() {
		$(this).children(".move-text").css('transform', 'translateY(30px)');
		$(this).children(".move-text").css('transition', 'transform .5s');
		$(this).children(".box").css('opacity', 1);
		$(this).children(".box").css('transition', 'opacity .5s');
	});


})(jQuery);
