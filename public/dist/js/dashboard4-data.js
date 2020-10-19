/*Dashboard3 Init*/
 
"use strict"; 
$(document).ready(function() {
	/*Toaster Alert*/
//	$.toast({
//		heading: 'Welcome Back!',
//		text: '<p>You have successfully completed level 1.</p><button class="btn btn-primary btn-sm mt-10">Play again</button>',
//		position: 'top-right',
//		loaderBg:'#88c241',
//		class: 'jq-toast-primary',
//		hideAfter: 3500, 
//		stack: 6,
//		showHideTransition: 'fade'
//	});
	
	/*Owl Carousel*/
	$('#owl_demo_1').owlCarousel({
		items: 1,
		animateOut: 'fadeOut',
		loop: true,
		margin: 10,
		autoplay: true,
		mouseDrag: false,
		dots:false

	});
});

