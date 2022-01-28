
addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}
        
$(document).ready(function () {
		$("#owl-demo").owlCarousel({

			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay: true,
			items: 3,
			itemsDesktop: [991, 2],
			itemsDesktopSmall: [414, 4]

		});
	}); 