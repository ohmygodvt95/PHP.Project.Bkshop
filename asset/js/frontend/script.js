jQuery(function($) {
	$(document).ready(function() {
		//enabling stickUp on the '.navbar-wrapper' class
		$('.navbar-default').stickUp();
		$("#owl-manufactures").owlCarousel({
			slideSpeed: 300,
			paginationSpeed: 400,
			autoPlay: 1000,
			items: 6
		});
	});
});