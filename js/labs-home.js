// scroll-based actions
var win_height;
var count = 0;
var melodrama = $('#hero-container');

function setStickyNav(scrollY){
	var $ = jQuery;
	// sticky nav
	var nav = $('#site-navigation');
	var logged_in = $('body').hasClass('logged-in');
	var height_check;

	if (logged_in) {
		height_check = win_height-134;
	} else {
		height_check = win_height-108;
	}
	if(scrollY >= height_check) {
	    nav.show();
	} else {
		nav.hide();   
	}
	
}

function backgroundCheck(scrollY){
	// background illustration
	if(scrollY >= win_height*1.1) {
		if (!melodrama.hasClass('boohiss')){
			melodrama.addClass('boohiss');	
		}
	} else {
		if (melodrama.hasClass('boohiss')){
			melodrama.removeClass('boohiss');
		}
	}
}

jQuery(document).ready(function(){
	var $ = jQuery;
	win_height = $(window).height();

	// smooth scroll to anchor
	$('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top - 172
          }, 500);
          return false;
        }
      }
    });

    setStickyNav(window.scrollY);

});	

jQuery(window).resize(function(){  
	win_height = jQuery(window).height();
	setStickyNav(window.scrollY);
});

var latestKnownScrollY = 0,
	ticking = false;

function onScroll() {
	latestKnownScrollY = window.scrollY;
	requestTick();
}

function requestTick() {
	if(!ticking) {
		requestAnimationFrame(update);
	}
	ticking = true;
}

function update() {
	// reset the tick so we can
	// capture the next onScroll
	ticking = false;

	var currentScrollY = latestKnownScrollY;

	//backgroundCheck(currentScrollY);
	setStickyNav(currentScrollY);
}

window.addEventListener('scroll', onScroll, false);