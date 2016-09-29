jQuery(function($) {
  
	var nav = $('.fixedBox'),
    offset = nav.offset();
  
	$(window).scroll(function () {
		if($(window).scrollTop() > offset.top) {
 			nav
				.addClass('fixed')
				.animate({top:0,left:0,opacity: '1.0'},1000);
			}
		else {
			nav
				.removeClass('fixed');
			}
	});
  
});