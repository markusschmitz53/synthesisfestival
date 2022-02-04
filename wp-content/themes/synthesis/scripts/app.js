let initialPosition = 0;

function resetScrollAndSetInitialNaviPosition() {
	window.scrollTo(0,0);
    initialPosition = jQuery('#menu').offset().top;
}

jQuery(function() {
	resetScrollAndSetInitialNaviPosition()
});

jQuery( window ).resize(function() {
 	resetScrollAndSetInitialNaviPosition()
});

jQuery(window).scroll(function() {
	if (initialPosition === 0) return

	if(jQuery(window).scrollTop() > initialPosition) {
		jQuery('#menu').addClass('sticky')
		jQuery('#content').addClass('header-spacing')
	} else {
		jQuery('#menu').removeClass('sticky')
		jQuery('#content').removeClass('header-spacing')
	}
});
