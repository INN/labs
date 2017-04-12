// show sticky nav
var win_height;
function showStickyNav($){
	if($(this).scrollTop() >= win_height-88) {
	    $('#site-navigation').show();
	} else {
		$('#site-navigation').slideUp('fast');
	}
	
}

jQuery(document).ready(function(){
	var $ = jQuery;
	win_height = jQuery(window).height();

	// smooth scroll to anchor
	$('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 130
          }, 500);
          return false;
        }
      }
    });

    showStickyNav($);
});	

jQuery(window).resize(function(){  
	win_height = jQuery(window).height();
	showStickyNav(jQuery);
});

jQuery(window).scroll(function() {  
	showStickyNav(jQuery);
});