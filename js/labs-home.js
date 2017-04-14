// scroll-based actions
var win_height;
var count = 0;
var melodrama = $('#melodrama');
var img = $(hero).css('background-image').split('/');
img = '/wp-content/themes/labs/images/' + img[img.length-1].split('"')[0];

function setStickyNav(scrollY){
	var $ = jQuery;
	// sticky nav
	var nav = $('#site-navigation');
	var logged_in = $('body').hasClass('logged-in');
	var height_check;

	if (logged_in) {
		height_check = win_height-134;
	} else {
		height_check = win_height-110;
	}
	if(scrollY >= height_check) {
	    nav.find('div').show();
		nav.css({
			'padding':'',
			'max-height':'',
			'overflow':''
		});
	    nav.show();
	} else {
		nav.find('div').hide();
		nav.css({
			'padding':0,
			'max-height':30,
			'overflow':'hidden'
		});
		nav.slideUp(100);
	}
	
}

function backgroundCheck(scrollY){
	// background illustration
	if(scrollY >= win_height*1.5) {
		if (count == 0){
			melodrama.addClass('boohiss');
			count++;
			img = url_2;
		} else if (img !== url_2) {
			melodrama.addClass('boohiss');
			img = url_2;
		} 		
	} else {
		if (img !== url_1) {
			melodrama.removeClass('boohiss');
			img = url_1;
		} 
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
            scrollTop: target.offset().top - 172
          }, 500);
          return false;
        }
      }
    });

    setStickyNav($);
});	

jQuery(window).resize(function(){  
	win_height = jQuery(window).height();
	setStickyNav(jQuery);
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

	backgroundCheck(currentScrollY);
	setStickyNav(currentScrollY);
}

window.addEventListener('scroll', onScroll, false);