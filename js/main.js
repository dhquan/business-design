$(document).ready(function(){
	$("#testimonials-slider").owlCarousel({
		loop:true,
		margin:0,
		nav:false,
		items:2,
		responsiveClass:true,
		responsive:{
			0:{
				items:1
			},
			992:{
				items:2
			}
		}
	});
});
$(document).ready(function(){
	$("#projects-slide").owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		navText: ["<i class='fa fa-chevron-circle-left' aria-hidden='true'></i>","<i class='fa fa-chevron-circle-right' aria-hidden='true'></i>"],
		items:2,
		dots:false,

		responsive:{
			0:{
				items:1
			},
			574:{
				items:2
			},
			992:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});
});

$(document).ready(function(){
	$("#slider").owlCarousel({
		loop:true,
		nav:true,
		autoplay:true,
		animateOut: 'fadeOut',
		navText: ["<div class='line-left'></div><div class='arrow-left'></div>","<div class='line-right'></div><div class='arrow-right'></div>"],
		dots:false,
		responsive:{
			0:{
				items:1,
				nav:false
			},
			320:{
				nav:false,
				items:1
			},
			768:{
				items:1,
			},
			1000:{
				items:1

			}
		}
	});
});
$(document).ready(function(){
	$("#partners-slider").owlCarousel({
		loop:true,
		dots:false,
		responsive:{
			0:{
				items:2,
				autoplay:true,
				autoplayTimeout: 2000
			},
			768:{
				items:3,
				autoplay:true,
				autoplayTimeout: 2000,
				mouseDrag:true
			},
			991:{
				items:4,
				loop:false,
				mouseDrag:false,
				touchDrag:false
			}

		}
	});
});
