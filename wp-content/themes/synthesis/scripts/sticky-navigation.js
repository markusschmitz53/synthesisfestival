let initialPosition = 0, width = 0, height = 0;

function resetScrollAndSetInitialNaviPosition() {
	window.scrollTo(0,0);
	initialPosition = jQuery('#menu').offset().top;
}

jQuery(function () {
	width = jQuery(window).width()
	height = jQuery(window).height()
	resetScrollAndSetInitialNaviPosition()
});

jQuery( window ).resize(function() {
	if(jQuery(window).width() !== width || jQuery(window).height() !== height)
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
