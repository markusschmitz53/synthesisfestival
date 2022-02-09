function toggleMobileNavigation() {
	jQuery('#mobile-menu').toggleClass('visible')
	jQuery("#toggle-mobile-menu").toggleClass('visible')
	jQuery("#close-mobile-menu").toggleClass('visible')
	jQuery("body").toggleClass('noscroll')
}

jQuery("#toggle-mobile-menu, #close-mobile-menu").click(function () {
	toggleMobileNavigation()
});
