/***************************************************
==================== JS INDEX ======================
****************************************************

01. PreLoader Js
02. Common Js
03. Menu Controls JS
04. Offcanvas Js
05. Search Js
06. One Page Scroll Js
07. Body overlay Js
08. Sticky Header Js
09. Header Height Js
10. Sidebar Js
11. backtotop Js
12. Nice Select Js
13. magnificPopup img view 
14. magnificPopup video view
15. Ecommerce Cart Js
16. Show Login Toggle Js
17. Show Coupon Toggle Js
18. Create An Account Toggle Js
19. Shipping Box Toggle Js
20. Wow Js
21. Counter Js
22. circle percent 
23. header language
24. cursor style

****************************************************/


(function ($) {
	"use strict";


	var windowOn = $(window);
	////////////////////////////////////////////////////
	// 01. PreLoader Js
	windowOn.on('load', function () {
		$(".loader-wrapper").fadeOut(500);
	});


	////////////////////////////////////////////////////
	// 02. Common Js

	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});

	$("[data-text-color]").each(function () {
		$(this).css("color", $(this).attr("data-text-color"));
	});




	////////////////////////////////////////////////////
	// 03. Menu Controls JS
	$('.tp-hamburger-toggle').on('click', function(){
		$('.tp-header-side-menu').slideToggle('tp-header-side-menu');
	});

	if($('.tp-main-menu-content').length && $('.tp-main-menu-mobile').length){
		let navContent = document.querySelector(".tp-main-menu-content").outerHTML;
		let mobileNavContainer = document.querySelector(".tp-main-menu-mobile");
		mobileNavContainer.innerHTML = navContent;
	
	
		let arrow = $(".tp-main-menu-mobile .has-dropdown > a");
	
		arrow.each(function () {
			let self = $(this);
			let arrowBtn = document.createElement("BUTTON");
			arrowBtn.classList.add("dropdown-toggle-btn");
			arrowBtn.innerHTML = "<i class='fa-regular fa-angle-right'></i>";
	
			self.append(function () {
			  return arrowBtn;
			});
	
			self.find("button").on("click", function (e) {
			  e.preventDefault();
			  let self = $(this);
			  self.toggleClass("dropdown-opened");
			  self.parent().toggleClass("expanded");
			  self.parent().parent().addClass("dropdown-opened").siblings().removeClass("dropdown-opened");
			  self.parent().parent().children(".tp-submenu").slideToggle();
			  
	
			});
	
		  });
	}

	
	////////////////////////////////////////////////////
	// 04. Offcanvas Js
	$(".tp-offcanvas-open-btn").on("click", function () {
		$(".offcanvas__area").addClass("offcanvas-opened");
		$(".body-overlay").addClass("opened");
	});
	$(".offcanvas-close-btn").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".body-overlay").removeClass("opened");
	});



	// ////////////////////////////////////////////////////
	// // 05. Search Js
	 if($('.search-box-outer').length) {
		$('.search-box-outer').on('click', function() {
			$('body').addClass('search-active');
		});
		$('.close-search').on('click', function() {
			$('body').removeClass('search-active');
		});
	}

	
    ////////////////////////////////////////////////////
	// 06. One Page Scroll Js
	function scrollNav() {
		$('.tp-onepage-menu li a').click(function () {
			$(".tp-onepage-menu li a.active").removeClass("active");
			$(this).addClass("active");

			$('html, body').stop().animate({
				scrollTop: $($(this).attr('href')).offset().top - 80
			}, 300);
			return false;
		});
	}
	scrollNav();



	////////////////////////////////////////////////////
	// 07. Body overlay Js
	$(".body-overlay").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".tp-search-area").removeClass("opened");
		$(".cartmini__area").removeClass("cartmini-opened");
		$(".body-overlay").removeClass("opened");
	});



	///////////////////////////////////////////////////
	// 8. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 400) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});


	///////////////////////////////////////////////////
	// 9. Header Height Js
	if ($('.tp-header-height').length > 0) {
		var headerHeight = document.querySelector(".tp-header-height");
		var setHeaderHeight = headerHeight.offsetHeight;
		$(".tp-header-height").each(function () {
			$(this).css({
				'height': setHeaderHeight + 'px'
			});
		});

		$(".tp-header-height.header-sticky").each(function () {
			$(this).css({
				'height': inherit,
			});
		});
	}


	////////////////////////////////////////////////////
	// 10. Sidebar Js
	$(".tp-menu-bar").on("click", function () {
		$(".tpoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});



  	// 11. backtotop Js
	if($('.prgoress_indicator path').length){
		var progressPath = document.querySelector('.prgoress_indicator path');
		var pathLength = progressPath.getTotalLength();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
		progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
		progressPath.style.strokeDashoffset = pathLength;
		progressPath.getBoundingClientRect();
		progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
		var updateProgress = function () {
		  var scroll = $(window).scrollTop();
		  var height = $(document).height() - $(window).height();
		  var progress = pathLength - (scroll * pathLength / height);
		  progressPath.style.strokeDashoffset = progress;
		}
		
		updateProgress();
		$(window).on('scroll', updateProgress);
		var offset = 250;
		var duration = 550;
		$(window).on('scroll', function () {
		  if ($(this).scrollTop() > offset) {
			$('.prgoress_indicator').addClass('active-progress');
		  } else {
			$('.prgoress_indicator').removeClass('active-progress');
		  }
		});
		$('.prgoress_indicator').on('click', function (event) {
		  event.preventDefault();
		  $('html, body').animate({ scrollTop: 0 }, duration);
		  return false;
		});
	}



	////////////////////////////////////////////////////
	// 12. Nice Select Js
	$('.tp-header-search-category select').niceSelect();






	////////////////////////////////////////////////////
	// 13. magnificPopup img view 
	$('.popup-image').magnificPopup({
		// delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});


	////////////////////////////////////////////////////
	// 14. magnificPopup video view
	$(".popup-video").magnificPopup({
		type: "iframe",
	});


	////////////////////////////////////////////////////
	// 15. Ecommerce Cart Js
	function tp_ecommerce() {
		$('.tp-cart-minus').on('click', function () {
			var $input = $(this).parent().find('input');
			var count = Number($input.val()) - 1;
			count = count < 1 ? 1 : count;
			$input.val(count);
			$input.change();
			return false;
		});
	
		$('.tp-cart-plus').on('click', function () {
			var $input = $(this).parent().find('input');
			$input.val(Number($input.val()) + 1);
			$input.change();
			return false;
		});

		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 500,
			values: [75, 300],
			slide: function (event, ui) {
				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#amount").val("$" + $("#slider-range").slider("values", 0) +
			" - $" + $("#slider-range").slider("values", 1));
	
		

		$('.tp-checkout-payment-item label').on('click', function () {
			$(this).siblings('.tp-checkout-payment-desc').slideToggle(400);
			
		});
		

		$('.tp-color-variation-btn').on('click', function () {
			$(this).addClass('active').siblings().removeClass('active');
		});
		

		$('.tp-size-variation-btn').on('click', function () {
			$(this).addClass('active').siblings().removeClass('active');
		});


	
		////////////////////////////////////////////////////
		// 16. Show Login Toggle Js
		$('.tp-checkout-login-form-reveal-btn').on('click', function () {
			$('#tpReturnCustomerLoginForm').slideToggle(400);
		});



	
		////////////////////////////////////////////////////
		// 17. Show Coupon Toggle Js
		$('.tp-checkout-coupon-form-reveal-btn').on('click', function () {
			$('#tpCheckoutCouponForm').slideToggle(400);
		});


	
		////////////////////////////////////////////////////
		// 18. Create An Account Toggle Js
		$('#cbox').on('click', function () {
			$('#cbox_info').slideToggle(900);
		});


	
		////////////////////////////////////////////////////
		// 19. Shipping Box Toggle Js
		$('#ship-box').on('click', function () {
			$('#ship-box-info').slideToggle(1000);
		});
	}
	tp_ecommerce();


	////////////////////////////////////////////////////
	// 20. Wow Js
	new WOW().init();


	////////////////////////////////////////////////////
	// 21. Counter Js
	new PureCounter();
	new PureCounter({
		filesizing: true,
		selector: ".filesizecount",
		pulse: 2,
	});




	////////////////////////////////////////////////////
	// 21. Jquery proggess ber
	if (typeof ($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
		var $this = $(this),
		knobVal = $this.attr('data-rel');

		$this.knob({
		'draw': function () {
			$(this.i).val(this.cv + '%')
		}
		});

		$this.appear(function () {
		$({
			value: 0
		}).animate({
			value: knobVal
		}, {
			duration: 2000,
			easing: 'swing',
			step: function () {
			$this.val(Math.ceil(this.value)).trigger('change');
			}
		});
		}, {
		accX: 0,
		accY: -150,
		});
	});
	}


	////////////////////////////////////////////////////
	// 22. parallax 
	if ($('.scene').length > 0) {
		$('.scene').parallax({
			scalarX: 2,
			scalarY: 2,
		});
	};

	if ($('.scene-2').length > 0) {
		$('.scene-2').parallax({
			scalarX: 1,
			scalarY: 1,
		});
	};



	////////////////////////////////////////////////////
	// 22. circle percent 
	$(".circle_percent").each(function () {
        var $this = $(this),
            $dataV = $this.data("percent"),
            $dataDeg = $dataV * 3.6,
            $round = $this.find(".round_per");
        $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
        $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
        $this.prop('Counter', 0).animate({
            Counter: $dataV
        }, {
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $this.find(".percent_text").text(Math.ceil(now) + "%");
            }
        });
        if ($dataV >= 51) {
            $round.css("transform", "rotate(" + 360 + "deg)");
            setTimeout(function () {
                $this.addClass("percent_more");
            }, 1000);
            setTimeout(function () {
                $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
            }, 1000);
        }
    });



	////////////////////////////////////////////////////
	// 23. header language
	if ($("#tp-header-lang-toggle").length > 0) {
		window.addEventListener('click', function(e){
	
			if (document.getElementById('tp-header-lang-toggle').contains(e.target)){
				$(".tp-lang-list").toggleClass("tp-lang-list-open");
			}
			else{
				$(".tp-lang-list").removeClass("tp-lang-list-open");
			}
		});
	}


	
	////////////////////////////////////////////////////
	// 24. cursor style
	document.addEventListener("DOMContentLoaded", function() {
		var cursor = document.querySelector(".cursor");
		var cursor2 = document.querySelector(".cursor2");
		document.addEventListener("mousemove", function(e) {
			cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
		});
		var cursorScale = document.querySelectorAll('a, button, .brand-item,.swiper-button-prev,.swiper-button-next, .icons');
		cursorScale.forEach(link => {
			link.addEventListener('mousemove', () => {
				cursor.classList.add('grow');
				if (link.classList.contains('small')) {
					cursor.classList.remove('grow');
					cursor.classList.add('grow-small');
				}
			});
			link.addEventListener('mouseleave', () => {
				cursor.classList.remove('grow');
				cursor.classList.remove('grow-small');
			});
		});
	});


})(jQuery);