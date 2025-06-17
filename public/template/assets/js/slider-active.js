
(function ($) {
	"use strict";


	// All Hero slider
	const sliderswiper = new Swiper('.tp-slider-active', {
		// Optional parameters
		speed:1500,
		loop: true,
		slidesPerView: 1,
		autoplay: true,
		effect:'fade',
		breakpoints: {
			'1600': {
				slidesPerView:1,
			},
			'1400': {
				slidesPerView:1,
			},
			'1200': {
				slidesPerView:1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},

			a11y: false,
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
		
		pagination: {
			el: ".tp-slider-dots",
			clickable:true,
		},

	});


	// Home 1 service  slider
	var slider = new Swiper('.tp-service-slider-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 2,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
	});


	// Home 2 Project  slider
	var slider = new Swiper('.tp-project-2-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		autoplay: true,
		loop: true,
		autoplay: true,
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		
	});


	// Home 2 testimonial
	var slider = new Swiper('.tp-testimonial-2-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		speed:1500,
		autoplay: true,
		loop: true,
		pagination: {
			el: ".tp-testimonial-2-slider-dot",
			clickable: true,
			renderBullet: function (index, className) {
			  return '<span class="' + className + '">' + '<button>'+(index + 1)+'</button>' + "</span>";
			},
		},
		breakpoints: {
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});


	// Home 2 Brand 
	var slider = new Swiper('.tp-brand-2-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		autoplay:true,
		centeredSlides: true,
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 2,
			},
		},
	});

	
	// Home 3 portfolio
	var slider = new Swiper('.tp-portfolio-3-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		autoplay:true,
		loop: true,
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});



	// Home 3 brand 
	if ($(".tp-brand-3-active").length > 0) {
		var autoplaySpeed = 0;
		var autoplayOn = true;
		var $slickRoot = $('.tp-brand-3-active');
		$slickRoot.on('init', function() {
			var $slickList = $slickRoot.find('.slick-list');
			$slickList.mouseenter(function() {
				autoplayOn = false;
			});
			$slickList.mouseleave(function() {
				autoplayOn = true;
			});
			window.setInterval(function() {
				if (!autoplayOn) return;
				$slickRoot.slick('slickPrev');
			}, autoplaySpeed);
		});
		$slickRoot.slick({
			speed: 5000,
			cssEase: 'linear',
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true,
			infinite: true,
			arrows:false,
			buttons: false,
		});
	}




	// Home 3 testimonial
	var slider = new Swiper('.tp-testimonial-3-active', {
		slidesPerView: 1,
		spaceBetween: 30,
		speed: 1500,
		autoplay:true,
		loop: true,
		pagination: {
			el: ".tp-testimonial-3-dot",
			clickable: true,
			renderBullet: function (index, className) {
			  return '<span class="' + className + '">' + '<button>'+(index + 1)+'</button>' + "</span>";
			},
		},
		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});


	
	// Home 3 team
	var slider = new Swiper('.tp-team-3-active', {
		slidesPerView: 3,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
	});



	// Home 4 Project
	var slider = new Swiper('.tp-project-4-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 2,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
	});


	// Home 4 testimonial 
	var slider = new Swiper('.tp-testimonial-4-active', {
		spaceBetween: 30,
		loop: true,
		speed: 1500,
		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.slider-next',
			prevEl: '.slider-prev',
		},
	});



	// Home 4 team
	var slider = new Swiper('.tp-team-4-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: ".tp-team-4-slider-dot",
			clickable: true,
			renderBullet: function (index, className) {
			  return '<span class="' + className + '">' + '<button>'+(index + 1)+'</button>' + "</span>";
			},
		},
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});



	// Home 5 Project
	var slider = new Swiper('.tp-project-5-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 3000,
		},
		breakpoints: {
			'1400': {
				slidesPerView: 4,
			},
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 2,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});



	// Home 4 testimonial
	var slider = new Swiper('.tp-testimonial-5-active', {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		pagination: {
			el: ".tp-testimonial-5-dot",
			clickable: true,
			renderBullet: function (index, className) {
			  return '<span class="' + className + '">' + '<button>'+(index + 1)+'</button>' + "</span>";
			},
		},
		breakpoints: {
			'1200': {
				slidesPerView: 2,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

		


})(jQuery);