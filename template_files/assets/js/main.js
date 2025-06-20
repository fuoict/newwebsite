(function($){
	"use strict";

	// Header Sticky
	$(window).on('scroll',function() {
		if ($(this).scrollTop() > 35){  
			$('.navbar-area').addClass("sticky");
		}
		else{
			$('.navbar-area').removeClass("sticky");
		}
	});

	 // Banner slides
	 $('.slider-courser').owlCarousel({
		nav: true,
		loop: true,
		dots: false,
		margin: 0,
		autoplay: true,
		autoplayHoverPause: true,
		autoplayTimeout:3000,
		smartSpeed:1000,
		navText: [
			"<i class='bx bx-left-arrow-alt'></i>",
			"<i class='bx bx-right-arrow-alt'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1200: {
				items: 1
			}
		}
	});

	 // Courses slides
	 $('.courses-courser').owlCarousel({
		nav: false,
		loop: true,
		dots: true,
		margin: 0,
		autoplay: false,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			},
			1200: {
				items: 3
			}
		}
	});

	 // Campus slides
	 $('.campus-slider').owlCarousel({
		nav: false,
		loop: true,
		dots: false,
		center: true,
		margin: 20,
		autoHeight:true,
		autoplay: true,
		autoplayHoverPause: true,
		smartSpeed:1000,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 2
			},
			1200: {
				items: 2

			}
		}
	});

	// Event Slides
	$('.slider-event').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplayHoverPause: true,
		autoplay: true,
		margin: 30,
		items: 3,
		navText: [
			"<i class='bx bx-chevron-left'></i>",
			"<i class='bx bx-chevron-right'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 2
			},
			1200: {
				items: 3

			}
		}
	});

	// About Content Slides
	$('.about-content-courser').owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		dotsData: true,
		autoplayHoverPause: true,
		autoplay: true,
		margin: 30,
		items: 3,
		navText: [
			"<i class='bx bx-arrow-back bx-rotate-180'></i>",
			"<i class='bx bx-arrow-back bx-rotate-0'></i>"
		],
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1200: {
				items: 1

			}
		}
	});

	// Popup Video
	$('.popup-youtube').magnificPopup({
		disableOn: 320,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
	
	// Testimonial Slides
	$('.lgun-testimonial-navigator').owlCarousel({
		loop: true,
		nav: true,
		dots: false,
		autoplayHoverPause: true,
		autoplay: true,
		items: 1,
		navText: [
			"<i class='bx bx-left-arrow-alt'></i>",
			"<i class='bx bx-right-arrow-alt'></i>"
		]
	});

	// Animation 
	AOS.init({
		once: true,
		duration: 2000,
	});

	// Faq section 
	const faqItems = document.querySelectorAll('.faq-item');

	faqItems.forEach(item => {
	  const question = item.querySelector('.faq-question');
	  const answer = item.nextElementSibling;
	  const icon = item.querySelector('i');
	
	  item.addEventListener('click', () => {
		faqItems.forEach(otherItem => {
		  if (otherItem !== item) {
			const otherAnswer = otherItem.nextElementSibling;
			const otherIcon = otherItem.querySelector('i');
	
			otherAnswer.classList.remove('active');
			otherIcon.classList.remove('active');
			otherAnswer.style.maxHeight = "0";
		  }
		});
	
		answer.classList.toggle('active');
		icon.classList.toggle('active');
		if (answer.classList.contains('active')) {
		  answer.style.maxHeight = answer.scrollHeight + "px";
		} else {
		  answer.style.maxHeight = "0";
		}
	  });
	});

	// Preloader
	$(window).on('load', function () {
		$('#preloader').delay(350).fadeOut('slow'); // fade out the preloader background
		$('body').delay(350).css({ 'overflow': 'visible' }); // show the body content
	});

	// Go to Top
	$(function(){
		
		// Scroll Event
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 600) $('.go-top').addClass('active');
			if (scrolled < 600) $('.go-top').removeClass('active');
		});  

		// Click Event
		$('.go-top').on('click', function() {
			$("html, body").animate({ scrollTop: "0" },  500);
		});
	});

}(jQuery));