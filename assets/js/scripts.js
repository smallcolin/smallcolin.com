(function($){

//----------------------------------------------//
//-----		Vid klick på top-button       ------//
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


})(jQuery);


//----------------------------------------------//
//-----							  		  ------//
//----------------------------------------------//


