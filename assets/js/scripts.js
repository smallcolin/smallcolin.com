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
//-----				Clock       		  ------//
//----------------------------------------------//

function printTime() {
	var d = new Date();
	var weekday = new Array(7);
		weekday[0] =  "Sunday";
		weekday[1] = "Monday";
		weekday[2] = "Tuesday";
		weekday[3] = "Wednesday";
		weekday[4] = "Thursday";
		weekday[5] = "Friday";
		weekday[6] = "Saturday";
	var n = weekday[d.getDay()];
	var date = d.getDate();
	var month = new Array(12);
		month[0] = "January";
		month[1] = "Febuary";
		month[2] = "March";
		month[3] = "April";
		month[4] = "May";
		month[5] = "June";
		month[6] = "July";
		month[7] = "August";
		month[8] = "September";
		month[9] = "October";
		month[10] = "November";
		month[11] = "December";
	var m = month[d.getMonth()];
	var year = d.getFullYear();
	var hours = d.getHours();
	var mins = d.getMinutes();
	var secs = d.getSeconds();

	document.getElementById("time").innerHTML = hours + ' : ' + mins + ' : ' + secs + " ( " + n + " , " + date + " " + m + " " + year + " )";
}
	setInterval(printTime, 1000);




