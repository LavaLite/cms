/** ********************************************** **
	@Author			Dorin Grigoras
	@Website		www.stepofweb.com
	@Last Update	Saturday, March 15, 2014

	NOTE! 	Do not change anything here if you want to
			be able to update in the future! Please use
			your custom script (eg. custom.js).


	TABLE CONTENTS
	-------------------------------
	01. Top Nav
	02. Animate
	03. Superslides
	04. OWL Carousel
	05. Popover
	06. Lightbox
	07. ScrollTo
	08. Parallax
	09. Masonry Filter
	10. Toggle
	11. Background Image
	12. Global Search
	13. Quick Cart
	14. Placeholder

	GOOGLE MAP
	AFTER RESIZE
	COUNT TO
	FITVIDS
	WAIT FOR IMAGES [used by masonry]
*************************************************** **/

	/* Init */
	jQuery(window).ready(function () {
		Atropos();
	});


/** Core
 **************************************************************** **/
	function Atropos() {
		_topNav();
		_animate();
		_superslide();
		_owl_carousel();
		_popover();
		_lightbox();
		_scrollTo();
		_parallax();
		_masonry();
		_toggle();
		_bgimage();
		_globalSearch();
		_quickCart();
		_placeholder();

		/** Bootstrap Tooltip **/ 
		jQuery("a[data-toggle=tooltip]").tooltip();
		
		/** Fitvids [Youtube|Vimeo] **/
		if(jQuery(".fullwidthbanner iframe").length < 1 && jQuery(".fullscreenbanner iframe").length < 1 && jQuery(".fullscreenvideo").length < 1) { // disable fitvids if revolution slider video is present!
			jQuery("body").fitVids(); 
		}

		/** 
			price slider 

			<script type="text/javascript" charset="utf-8">
				var slider_config = { from: 10, to: 500, heterogeneity: ['50/100', '75/250'], step: 10, dimension: '&nbsp;$', skin: 'round_plastic' };
			</script>
		**/
		if(jQuery().slider && jQuery(".price-slider").length > 0) {
			jQuery("#Slider2").slider(slider_config);
		}
	}


/** 01. Top Nav
 **************************************************************** **/
function _topNav() {
	var addActiveClass = false;

	jQuery("#topMain li.dropdown > a, #topMain li.dropdown-submenu > a").bind("click", function(e) {
		e.preventDefault();

		if($(window).width() > 979) {
			return;
		}


		addActiveClass = jQuery(this).parent().hasClass("resp-active");
		jQuery("#topMain").find(".resp-active").removeClass("resp-active");

		if(!addActiveClass) {
			jQuery(this).parents("li").addClass("resp-active");
		}

		return;

	});

	// Drop Downs - do not hide on click
	jQuery("#topHead .dropdown-menu, #topNav .mega-menu .dropdown-menu").bind("click", function(e) {
		e.stopPropagation();
	});

	jQuery(window).scroll(function() {

		if(jQuery(window).width() > 1006) {
			topMain(); // on scroll
		}

	});	
	
	if(jQuery(window).width() > 1006) {
		topMain(); // on load
	}



		// #topHead Fixes
		window._headHeight		= 81;
		window._headHeightSmall	= 30;

		function _topNavCalibrate() {

			if(jQuery("#topHead").length > 0) {
				window._headHeight 		= jQuery("header#topHead").outerHeight() + jQuery("header#topNav").outerHeight() - 10;
				window._headHeightSmall	= 66;

				jQuery('#wrapper').css({"padding-top":window._headHeight + "px"});
				jQuery('#topHead').removeClass('fixed').addClass('fixed');

				if(jQuery('#header_shadow').length > 0) {
					jQuery('#header_shadow').css({"top":window._headHeight + "px"});
				}

			} else {

				if(jQuery(window).width() < 1006) {
					jQuery('#wrapper').css({"margin-top":"-30px"});
					jQuery('#header_shadow').css({"top":"40px"});
				} else {
					jQuery('#wrapper').css({"margin-top":"0px"});
					jQuery('#header_shadow').css({"top":"80px"});				
				}

			}

		}

		// recalibrate menu (mobile = slim mode) on resize
		jQuery(window).resize(function() {
			_topNavCalibrate();
		});	_topNavCalibrate();


	// scoll is on top!
	window.topNavSmall = false;


	function topMain() {
		var _scrollTop 		= jQuery(document).scrollTop();

		if(window.topNavSmall === false && _scrollTop > 0) {
		
			jQuery('header#topNav div.nav-main-collapse').addClass('topFix');
			jQuery('#topNav').stop().animate({ 'height':'60px'},400);
			jQuery('header#topNav div.nav-main-collapse').stop().animate({ 'margin-top':'6px'},400);
			jQuery('header#topNav button').stop().animate({ 'margin-top':'0'},100);
			jQuery('header#topNav a.logo').stop().animate({ 'margin-top':'-10px'},400);

			if(jQuery('#header_shadow').length > 0) {
				jQuery('#header_shadow').stop().animate({ 'top':window._headHeightSmall + 'px'},400);/* just a little visible */
			}

			window.topNavSmall = true;
		} 

		if(window.topNavSmall === true && _scrollTop < 3) {
			jQuery('header#topNav div.nav-main-collapse').removeClass('topFix');
			jQuery('#topNav').stop().animate({ 'height':'81px'},400);
			jQuery('header#topNav div.nav-main-collapse').stop().animate({ 'margin-top':'16px'},400);
			jQuery('header#topNav button').stop().animate({ 'margin-top':'8px'},100);
			jQuery('header#topNav a.logo').stop().animate({ 'line-height':'50px', 'margin-top':'0'},400);

			if(jQuery('#header_shadow').length > 0) {
				jQuery('#header_shadow').stop().animate({ 'top':window._headHeight + 'px'},400);
			}

			window.topNavSmall = false;
		}

	}
}


/** 02. Animate
 **************************************************************** **/
function _animate() {

	// Animation [appear]
	jQuery("[data-animation]").each(function() {
		var _t = jQuery(this);

		if(jQuery(window).width() > 767) {

			_t.appear(function() {

				var delay = (_t.attr("data-animation-delay") ? _t.attr("data-animation-delay") : 1);

				if(delay > 1) _t.css("animation-delay", delay + "ms");
				_t.addClass(_t.attr("data-animation"));

				setTimeout(function() {
					_t.addClass("animation-visible");
				}, delay);

			}, {accX: 0, accY: -150});

		} else {

			_t.addClass("animation-visible");

		}

	});

	// Bootstrap Progress Bar
	jQuery("[data-appear-progress-animation]").each(function() {
		var $_t = jQuery(this);

		if(jQuery(window).width() > 767) {

			$_t.appear(function() {
				_delay = 1;

				if($_t.attr("data-appear-progress-animation-delay")) {
					_delay = $_t.attr("data-appear-progress-animation-delay");
				}

				if(_delay > 1) {
					$_t.css("animation-delay", _delay + "ms");
				}

				$_t.addClass($_t.attr("data-appear-progress-animation"));

				setTimeout(function() {

					$_t.addClass("animation-visible");

				}, _delay);

			}, {accX: 0, accY: -150});

		} else {

			$_t.addClass("animation-visible");

		}

	});


	jQuery("[data-appear-progress-animation]").each(function() {
		var $_t = jQuery(this);

		$_t.appear(function() {

			var _delay = ($_t.attr("data-appear-animation-delay") ? $_t.attr("data-appear-animation-delay"): 1);

			if(_delay > 1) {
				$_t.css("animation-delay", _delay + "ms");
			}

			$_t.addClass($_t.attr("data-appear-animation"));
			setTimeout(function() {

				$_t.animate({"width": $_t.attr("data-appear-progress-animation")}, 1000, "easeOutQuad", function() {
					$_t.find(".progress-bar-tooltip").animate({"opacity": 1}, 500, "easeOutQuad");
				});

			}, _delay);

		}, {accX: 0, accY: -50});

	});


	// Count To
	jQuery(".countTo [data-to]").each(function() {
		var $_t = jQuery(this);

		$_t.appear(function() {

			$_t.countTo();

		}, {accX:0, accY:-150});

	});


	/* Knob Circular Bar */
	if(jQuery().knob) {

		jQuery(".knob").knob();

	}


	/* Animation */
	jQuery('.animate_from_top').each(function () {
		jQuery(this).appear(function() {
			jQuery(this).delay(150).animate({opacity:1,top:"0px"},1000);
		});	
	});

	jQuery('.animate_from_bottom').each(function () {
		jQuery(this).appear(function() {
			jQuery(this).delay(150).animate({opacity:1,bottom:"0px"},1000);
		});	
	});


	jQuery('.animate_from_left').each(function () {
		jQuery(this).appear(function() {
			jQuery(this).delay(150).animate({opacity:1,left:"0px"},1000);
		});	
	});


	jQuery('.animate_from_right').each(function () {
		jQuery(this).appear(function() {
			jQuery(this).delay(150).animate({opacity:1,right:"0px"},1000);
		});	
	});

	jQuery('.animate_fade_in').each(function () {
		jQuery(this).appear(function() {
			jQuery(this).delay(350).animate({opacity:1,right:"0px"},1000);
		});	
	});
}




/** 03. Superslides
 **************************************************************** **/
function _superslide() {

	if(jQuery("#slider").length > 0) {

		var data_autoplay 		= jQuery("#slider").attr('data-autoplay'),
			data_mouseover_stop = jQuery("#slider").attr('data-mouseover-stop');

			if(data_autoplay) {
				if(data_autoplay == '') {
					var data_autoplay = false;
				} else {
					var data_autoplay = parseInt(data_autoplay);
				}
			} else {
				var data_autoplay = false;
			}

			if(!data_autoplay) {
				data_mouseover_stop = false;
			}

		jQuery("#slider").superslides({
			animation: "fade", 				// slide|fade
			pagination: true, 				// true|false
			play: data_autoplay,	 		// false to disable autoplay -OR- miliseconds (eg.: 1000 = 1s)
			animation_speed: 600,			// animation transition

			elements: {
			  preserve: '.preserve',
			  nav: '.slides-navigation',
			  container: '.slides-container',
			  pagination: '.slides-pagination'
			}
		});

		if(data_mouseover_stop == 'true') {

			// Stop on mouse over ! 
			jQuery('#slider').on('mouseenter', function() {
				jQuery(this).superslides('stop');
				// console.log('Stopped')
			});
			jQuery('#slider').on('mouseleave', function() {
				jQuery(this).superslides('start');
				// console.log('_start')
			});

		}

		jQuery(window).load(function () {
			jQuery("#slider").css({"background":"none"});
		});

	}
}




/** 04. OWL Carousel
 **************************************************************** **/
function _owl_carousel() {

	var total = jQuery("div.owl-carousel").length,
		count = 0;

	jQuery("div.owl-carousel").each(function() {

		var slider 		= jQuery(this);
		var options 	= slider.attr('data-plugin-options');

		var defaults = {
			items: 					5,
			itemsCustom: 			false,
			itemsDesktop: 			[1199,4],
			itemsDesktopSmall: 		[980,3],
			itemsTablet: 			[768,2],
			itemsTabletSmall: 		false,
			itemsMobile: 			[479,1],
			singleItem: 			true,
			itemsScaleUp: 			false,

			slideSpeed: 			200,
			paginationSpeed: 		800,
			rewindSpeed: 			1000,

			autoPlay: 				false,
			stopOnHover: 			false,

			navigation: 			false,
			navigationText: [
								'<i class="fa fa-chevron-left"></i>',
								'<i class="fa fa-chevron-right"></i>'
							],
			rewindNav: 				true,
			scrollPerPage: 			false,

			pagination: 			true,
			paginationNumbers: 		false,

			responsive: 			true,
			responsiveRefreshRate: 	200,
			responsiveBaseWidth: 	window,

			baseClass: 				"owl-carousel",
			theme: 					"owl-theme",

			lazyLoad: 				false,
			lazyFollow: 			true,
			lazyEffect: 			"fade",

			autoHeight: 			false,

			jsonPath: 				false,
			jsonSuccess: 			false,

			dragBeforeAnimFinish: 	true,
			mouseDrag: 				true,
			touchDrag: 				true,

			transitionStyle: 		false,

			addClassActive: 		false,

			beforeUpdate: 			false,
			afterUpdate: 			false,
			beforeInit: 			false,
			afterInit: 				false,
			beforeMove: 			false,
			afterMove: 				false,
			afterAction: 			false,
			startDragging: 			false,
			afterLazyLoad: 			false
		}

		var config = jQuery.extend({}, defaults, options, slider.data("plugin-options"));
		slider.owlCarousel(config).addClass("owl-carousel-init");
	});
}




/** 05. Popover
 **************************************************************** **/
function _popover() {

		jQuery("a[data-toggle=popover]").bind("click", function(e) {
			e.preventDefault();
		});

		var isVisible 	= false,
			clickedAway = false;

		jQuery("a[data-toggle=popover], button[data-toggle=popover]").popover({

				html: true,
				trigger: 'manual'

			}).click(function(e) {

				jQuery(this).popover('show');
				jQuery('.popover-title').append('<button type="button" class="close">&times;</button>');
				clickedAway = false;
				isVisible = true;
				e.preventDefault();

			});

			jQuery(document).click(function(e) {

				if(isVisible & clickedAway) {

					jQuery("a[data-toggle=popover], button[data-toggle=popover]").popover('hide')
					isVisible = clickedAway = false;

				} else {

					clickedAway = true;

				}

			});

		jQuery("a[data-toggle=popover], button[data-toggle=popover]").popover({

			html: true,
			trigger: 'manual'

		}).click(function(e) {

			$(this).popover('show');
			$('.popover-title').append('<button type="button" class="close">&times;</button>');
			$('.close').click(function(e){

				jQuery("a[data-toggle=popover], button[data-toggle=popover]").popover('hide');

			});

			e.preventDefault();
		});


	// jQuery("a[data-toggle=popover], button[data-toggle=popover]").popover();
}




/** 06. LightBox
 **************************************************************** **/
function _lightbox() {

	if(typeof(jQuery.magnificPopup) == "undefined") {
		return false;
	}

	jQuery.extend(true, jQuery.magnificPopup.defaults, {
		tClose: 		'Close',
		tLoading: 		'Loading...',

		gallery: {
			tPrev: 		'Previous',
			tNext: 		'Next',
			tCounter: 	'%curr% / %total%'
		},

		image: 	{ 
			tError: 	'Image not loaded!' 
		},

		ajax: 	{ 
			tError: 	'Content not loaded!' 
		}
	});

	jQuery(".lightbox").each(function() {

		var _t 			= jQuery(this),
			options 	= _t.attr('data-plugin-options'),
			config		= {},
			defaults 	= {
				type: 				'image',
				fixedContentPos: 	false,
				fixedBgPos: 		false,
				mainClass: 			'mfp-no-margins mfp-with-zoom',
				image: {
					verticalFit: 	true
				},

				zoom: {
					enabled: 		false,
					duration: 		300
				},

				gallery: {
					enabled: false,
					navigateByImgClick: true,
					preload: 			[0,1],
					arrowMarkup: 		'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
					tPrev: 				'Previou',
					tNext: 				'Next',
					tCounter: 			'<span class="mfp-counter">%curr% / %total%</span>'
				},
			};

		if(_t.data("plugin-options")) {
			config = jQuery.extend({}, defaults, options, _t.data("plugin-options"));
		}

		jQuery(this).magnificPopup(config);

	});
}




/** 07. ScrollTo
 **************************************************************** **/
function _scrollTo() {

	jQuery("a.scrollTo").bind("click", function(e) {
		e.preventDefault();

		var href = jQuery(this).attr('href');

		if(href != '#') {
			jQuery('html,body').animate({scrollTop: jQuery(href).offset().top - 60}, 1000, 'easeInOutExpo');
		}
	});

	jQuery("a.toTop").bind("click", function(e) {
		e.preventDefault();
		jQuery('html,body').animate({scrollTop: 0}, 1000, 'easeInOutExpo');
	});
}




/** 08. Parallax
 **************************************************************** **/
function _parallax() {

	if(typeof(jQuery.stellar) == "undefined") {

		jQuery(".parallax").addClass("parallax-init");
		return false;

	}

	jQuery(window).load(function () {

		if(jQuery(".parallax").length > 0) {

			if(!Modernizr.touch) {

				jQuery(window).stellar({

					responsive:				true,
					scrollProperty: 		'scroll',
					parallaxElements:		false,
					horizontalScrolling: 	false,
					horizontalOffset: 		0,
					verticalOffset: 		0
				});

			} else {

				jQuery(".parallax").addClass("disabled");

			}
		}

		jQuery(".parallax").addClass("parallax-init");

		// responsive
		jQuery(window).afterResize(function() {
			jQuery.stellar('refresh');
		});

	});
}




/** 09. Masonry Filter
 **************************************************************** **/
function _masonry() {

	jQuery(window).load(function() {

		jQuery("span.js_loader").remove();
		jQuery("li.masonry-item").addClass('fadeIn');

		jQuery(".masonry-list").each(function() {

			var _c = jQuery(this);

			_c.waitForImages(function() { // waitForImages Plugin - bottom of this file

				_c.masonry({
					itemSelector: '.masonry-item'
				});

			});

		});

	});

	jQuery("ul.isotope-filter").each(function() {

		var _el		 		= jQuery(this),
			destination 	= jQuery("ul.sort-destination[data-sort-id=" + jQuery(this).attr("data-sort-id") + "]");

		if(destination.get(0)) {

			jQuery(window).load(function() {

				destination.isotope({
					itemSelector: 	"li",
					layoutMode: 	'sloppyMasonry'
				});

				_el.find("a").click(function(e) {

					e.preventDefault();

					var $_t 	= jQuery(this),
						sortId 	= $_t.parents(".sort-source").attr("data-sort-id"),
						filter 	= $_t.parent().attr("data-option-value");

					_el.find("li.active").removeClass("active");
					$_t.parent().addClass("active");

					destination.isotope({
						filter: filter
					});

					jQuery(".sort-source-title[data-sort-id=" + sortId + "] strong").html($_t.html());
					return false;

				});

			});

		}

	});


	jQuery(window).load(function() {

		jQuery("ul.isotope").addClass('fadeIn');

	});
}





/** 10. Toggle
 **************************************************************** **/
function _toggle() {

	var $_t = this,
		previewParClosedHeight = 25;

	jQuery("div.toggle.active > p").addClass("preview-active");
	jQuery("div.toggle.active > div.toggle-content").slideDown(400);
	jQuery("div.toggle > label").click(function(e) {

		var parentSection 	= jQuery(this).parent(),
			parentWrapper 	= jQuery(this).parents("div.toogle"),
			previewPar 		= false,
			isAccordion 	= parentWrapper.hasClass("toogle-accordion");

		if(isAccordion && typeof(e.originalEvent) != "undefined") {
			parentWrapper.find("div.toggle.active > label").trigger("click");
		}

		parentSection.toggleClass("active");

		if(parentSection.find("> p").get(0)) {

			previewPar 					= parentSection.find("> p");
			var previewParCurrentHeight = previewPar.css("height");
			var previewParAnimateHeight = previewPar.css("height");
			previewPar.css("height", "auto");
			previewPar.css("height", previewParCurrentHeight);

		}

		var toggleContent = parentSection.find("> div.toggle-content");

		if(parentSection.hasClass("active")) {

			jQuery(previewPar).animate({height: previewParAnimateHeight}, 350, function() {jQuery(this).addClass("preview-active");});
			toggleContent.slideDown(350);

		} else {

			jQuery(previewPar).animate({height: previewParClosedHeight}, 350, function() {jQuery(this).removeClass("preview-active");});
			toggleContent.slideUp(350);

		}

	});
}




/** 11. Background Image
	class="boxed" should be added to body.
	Add to body - example: data-background="assets/images/boxed_background/1.jpg"
 **************************************************************** **/
	function _bgimage() {
		if(jQuery('body').hasClass('boxed')) {
			backgroundImageSwitch();
		}
		function backgroundImageSwitch() {
			var data_background = jQuery('body').attr('data-background');
			if(data_background) {
				jQuery.backstretch(data_background);
				jQuery('body').addClass('transparent'); // remove backround color of boxed class
			}
		}
	}




/** 12. Global Search
 **************************************************************** **/
	function _globalSearch() {

		jQuery('li.search, li.search input').bind("click", function(e) {
			e.stopPropagation();
		});

		jQuery('li.search input').bind("click", function() {
			return false;
		});

		jQuery('li.search').bind("click", function() {

			if(jQuery(this).hasClass('open')) {

				disable_overlay();
				enable_scroll();
				jQuery(this).removeClass('open');

			} else {

				enable_overlay();
				disable_scroll();
				jQuery(this).addClass('open');
				jQuery('li.quick-cart').removeClass('open'); // close quick cart

			}

		});

		// 'esc' key
		jQuery(document).keydown(function(e) {
			var code = e.keyCode ? e.keyCode : e.which;
			if(code == 27) {
				jQuery('li.search, li.quick-cart').removeClass('open');
				disable_overlay();
				enable_scroll();
			}
		});

		jQuery(document).bind("click", function() {
			if(jQuery('li.search').hasClass('open')) {
				jQuery('li.search, li.quick-cart').removeClass('open');
				disable_overlay();
				enable_scroll();
			}
		});

	}



/** 13. Quick Cart
 **************************************************************** **/
	function _quickCart() {

		jQuery('li.quick-cart').bind("click", function() {

			jQuery('li.quick-cart .quick-cart-content').bind("click", function(e) {
				e.stopPropagation();
			});

			if(jQuery(this).hasClass('open')) {

				disable_overlay();
				enable_scroll();
				jQuery(this).removeClass('open');

			} else {

				enable_overlay();
				disable_scroll();
				jQuery(this).addClass('open');
				jQuery('li.search').removeClass('open'); // close search

			}

			return false;
		});

		// 'esc' key
		jQuery(document).keydown(function(e) {
			var code = e.keyCode ? e.keyCode : e.which;
			if(code == 27) {
				jQuery('li.search, li.quick-cart').removeClass('open');
				disable_overlay();
				enable_scroll();
			}
		});

		jQuery(document).bind("click", function() {
			if(jQuery('li.quick-cart').hasClass('open')) {
				jQuery('li.search, li.quick-cart').removeClass('open');
				disable_overlay();
				enable_scroll();
			}
		});

	}





/** 14. Placeholder
 **************************************************************** **/
	function _placeholder() {

		//check for IE
		if(navigator.appVersion.indexOf("MSIE")!=-1) {

			jQuery('[placeholder]').focus(function() {

				var input = jQuery(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}

			}).blur(function() {

				var input = jQuery(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.addClass('placeholder');
				input.val(input.attr('placeholder'));
				}

			}).blur();

		}

	}



/** **************************************************************************************************************** **/
/** **************************************************************************************************************** **/
/** **************************************************************************************************************** **/
/** **************************************************************************************************************** **/



	// scroll 
	function wheel(e) {
	  e.preventDefault();
	}

	function disable_scroll() {
	  if (window.addEventListener) {
		  window.addEventListener('DOMMouseScroll', wheel, false);
	  }
	  window.onmousewheel = document.onmousewheel = wheel;
	}

	function enable_scroll() {
		if (window.removeEventListener) {
			window.removeEventListener('DOMMouseScroll', wheel, false);
		}
		window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
	}

	// overlay
	function enable_overlay() {
		jQuery("span.global-overlay").remove(); // remove first!
		jQuery('body').append('<span class="global-overlay"></span>');
	}
	function disable_overlay() {
		jQuery("span.global-overlay").remove();
	}



/**	MEDIA ELEMENTS
*************************************************** **/
	if(jQuery().mediaelementplayer && jQuery('video').length > 0 && jQuery(".fullscreenbanner video").length < 1 && jQuery(".fullwidthbanner video").length < 1) { // exclude revolution slider videos
		jQuery('video').mediaelementplayer({
			// if the <video width> is not specified, this is the default
			defaultVideoWidth: 480,
			// if the <video height> is not specified, this is the default
			defaultVideoHeight: 270,
			// if set, overrides <video width>
			videoWidth: '100%', // -1
			// if set, overrides <video height>
			videoHeight: '100%', // -1
			// width of audio player
			audioWidth: 400,
			// height of audio player
			audioHeight: 30,
			// initial volume when the player starts
			startVolume: 0.8,
			// useful for <audio> player loops
			loop: true,
			// enables Flash and Silverlight to resize to content size
			enableAutosize: true,
			// the order of controls you want on the control bar (and other plugins below)
			features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
			// Hide controls when playing and mouse is not over the video
			alwaysShowControls: false,
			// force iPad's native controls
			iPadUseNativeControls: false,
			// force iPhone's native controls
			iPhoneUseNativeControls: false, 
			// force Android's native controls
			AndroidUseNativeControls: false,
			// forces the hour marker (##:00:00)
			alwaysShowHours: false,
			// show framecount in timecode (##:00:00:00)
			showTimecodeFrameCount: false,
			// used when showTimecodeFrameCount is set to true
			framesPerSecond: 25,
			// turns keyboard support on and off for this instance
			enableKeyboard: true,
			// when this player starts, it will pause other players
			pauseOtherPlayers: true,
			// array of keyboard commands
			keyActions: []

		});

		setTimeout('eventClickTrigger()', 1000);
		function eventClickTrigger() {
			jQuery('video').trigger('click');
			// resizeToCover();
		}

		// VOVER STYLE
		var min_w = 300; // minimum video width allowed
		var vid_w_orig;  // original video dimensions
		var vid_h_orig;

		jQuery(function() { // runs after DOM has loaded
			vid_w_orig = parseInt(jQuery('video, source').attr('width'));
			vid_h_orig = parseInt(jQuery('video, source').attr('height'));
			jQuery(window).resize(function () { resizeToCover(); });
		});

		function resizeToCover() {

			// set the video viewport to the window size
			jQuery('.video-wrap').width(jQuery(window).width());
			jQuery('.video-wrap').height(jQuery(window).height());

			// use largest scale factor of horizontal/vertical
			var scale_h = jQuery(window).width() / vid_w_orig;
			var scale_v = jQuery(window).height() / vid_h_orig;
			var scale = scale_h > scale_v ? scale_h: scale_v;

			// don't allow scaled width < minimum video width
			if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;};

			// now scale the video
			jQuery('video, source').width(scale * vid_w_orig);
			jQuery('video, source').height(scale * vid_h_orig);

			// and center it by scrolling the video viewport
			jQuery('.video-wrap').scrollLeft((jQuery('video').width() - jQuery(window).width()) / 2);
			jQuery('.video-wrap').scrollTop((jQuery('video').height() - jQuery(window).height()) / 2);
		}	

	}



/**	GOOGLE MAP
*************************************************** **/
	function contactMap() {

		var latLang = new google.maps.LatLng($googlemap_latitude,$googlemap_longitude);

		var mapOptions = {
			zoom:$googlemap_zoom,
			center: latLang,
			disableDefaultUI: false,
			navigationControl: false,
			mapTypeControl: false,
			scrollwheel: false,
			// styles: styles,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById('gmap'), mapOptions);
		google.maps.event.trigger(map, 'resize');
		map.setZoom( map.getZoom() );

		var marker = new google.maps.Marker({
			icon: 'data:image/png;base64,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',
			position: latLang,
			map: map,
			title: ""
		});

		marker.setMap(map);
		google.maps.event.addListener(marker, "click", function() {
			// Add optionally an action for when the marker is clicked
		});

		// kepp googlemap responsive - center on resize
		google.maps.event.addDomListener(window, 'resize', function() {
			map.setCenter(latLang);
		});

	}

	
	function showMap(initWhat) {
		var script 		= document.createElement('script');
		script.type 	= 'text/javascript';
		script.src 		= 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&callback='+initWhat;
		document.body.appendChild(script);
	}

	
	// INIT CONTACT, NLY IF #contactMap EXISRS
	if(jQuery("#gmap").length > 0) {
		showMap('contactMap');
	}



/**	@Facebook
*************************************************** **/
	/*
		https://developers.facebook.com/docs/plugins/like-button/

		ADD TO YOUR CODE (just change data-href, that's all):

		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
	*/
	if(jQuery("div.fb-like").length > 0) {

		jQuery('body').append('<div id="fb-root"></div>');

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

	}

/**	@Google Plus
*************************************************** **/
	/*
		https://developers.google.com/+/web/+1button/

		<!-- Place this tag where you want the +1 button to render. -->
		<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300"></div>
	*/
	if(jQuery("div.g-plusone").length > 0) {

		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/platform.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();

	}

/**	@Twitter
*************************************************** **/
	/*
		https://dev.twitter.com/docs/tweet-button

		<!-- Place this tag where you want the twitter button to render. -->
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
	*/
	if(jQuery("a.twitter-share-button").length > 0) {

		!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(!d.getElementById(id)){js=d.createElement(s);
			js.id=id;js.src="https://platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js,fjs);}
		}(document,"script","twitter-wjs");

	}
	




/** AFTER RESIZE
	http://www.mcshaman.com/afterresize-js-jquery-plugin/
 **************************************************************** **/

( function( $ ) {
	"use strict";
	
	// Define default settings
	var defaults = {
		action: function() {},
		runOnLoad: false,
		duration: 500
	};
	
	// Define global variables
	var settings = defaults,
		running = false,
		start;
	
	var methods = {};
	
	// Initial plugin configuration
	methods.init = function() {
		
		// Allocate passed arguments to settings based on type
		for( var i = 0; i <= arguments.length; i++ ) {
			var arg = arguments[i];
			switch ( typeof arg ) {
				case "function":
					settings.action = arg;
					break;
				case "boolean":
					settings.runOnLoad = arg;
					break;
				case "number":
					settings.duration = arg;
					break;
			}
		}
	
		// Process each matching jQuery object
		return this.each(function() {
		
			if( settings.runOnLoad ) { settings.action(); }
			
			jQuery(this).resize( function() {
				
				methods.timedAction.call( this );
				
			} );
		
		} );
	};
	
	methods.timedAction = function( code, millisec ) {
		
		var doAction = function() {
			var remaining = settings.duration;
			
			if( running ) {
				var elapse = new Date() - start;
				remaining = settings.duration - elapse;
				if( remaining <= 0 ) {
					// Clear timeout and reset running variable
					clearTimeout(running);
					running = false;
					// Perform user defined function
					settings.action();
				
					return;
				}
			}
			wait( remaining );
		};
		
		var wait = function( time ) {
			running = setTimeout( doAction, time );
		};
		
		// Define new action starting time
		start = new Date();
		
		// Define runtime settings if function is run directly
		if( typeof millisec === 'number' ) { settings.duration = millisec; }
		if( typeof code === 'function' ) { settings.action = code; }
		
		// Only run timed loop if not already running
		if( !running ) { doAction(); }
		
	};

	
	$.fn.afterResize = function( method ) {
		
		if( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ) );
		} else {
			return methods.init.apply( this, arguments );
		}
		
	};
	
})(jQuery);




/** COUNT TO
	https://github.com/mhuggins/jquery-countTo
 **************************************************************** **/
 (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return jQuery(this).each(function () {
			// set options for current element
			var settings = jQuery.extend({}, $.fn.countTo.defaults, {
				from:            jQuery(this).data('from'),
				to:              jQuery(this).data('to'),
				speed:           jQuery(this).data('speed'),
				refreshInterval: jQuery(this).data('refresh-interval'),
				decimals:        jQuery(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = jQuery(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// __construct the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));





/** FITVIDS
	http://fitvidsjs.com/
 **************************************************************** **/
(function( $ ){

  "use strict";

  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null
    };

    if(!document.getElementById('fit-vids-style')) {

      var div = document.createElement('div'),
          ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0];

      div.className = 'fit-vids-style';
      div.id = 'fit-vids-style';
      div.style.display = 'none';
      div.innerHTML = '&shy;<style>         \
        .fluid-width-video-wrapper {        \
           width: 100%;                     \
           position: relative;              \
           padding: 0;                      \
        }                                   \
                                            \
        .fluid-width-video-wrapper iframe,  \
        .fluid-width-video-wrapper object,  \
        .fluid-width-video-wrapper embed {  \
           position: absolute;              \
           top: 0;                          \
           left: 0;                         \
           width: 100%;                     \
           height: 100%;                    \
        }                                   \
      </style>';

      ref.parentNode.insertBefore(div,ref);

    }

    if ( options ) {
      jQuery.extend( settings, options );
    }

    return this.each(function(){
      var selectors = [
        "iframe[src*='player.vimeo.com']",
        "iframe[src*='youtube.com']",
        "iframe[src*='youtube-nocookie.com']",
        "iframe[src*='kickstarter.com'][src*='video.html']",
        "object",
        "embed"
      ];

      if (settings.customSelector) {
        selectors.push(settings.customSelector);
      }

      var $allVideos = jQuery(this).find(selectors.join(','));
      $allVideos = $allVideos.not("object object"); // SwfObj conflict patch

      $allVideos.each(function(){
        var $_t = jQuery(this);
        if (this.tagName.toLowerCase() === 'embed' && $_t.parent('object').length || $_t.parent('.fluid-width-video-wrapper').length) { return; }
        var height = ( this.tagName.toLowerCase() === 'object' || ($_t.attr('height') && !isNaN(parseInt($_t.attr('height'), 10))) ) ? parseInt($_t.attr('height'), 10): $_t.height(),
            width = !isNaN(parseInt($_t.attr('width'), 10)) ? parseInt($_t.attr('width'), 10): $_t.width(),
            aspectRatio = height / width;
        if(!$_t.attr('id')){
          var videoID = 'fitvid' + Math.floor(Math.random()*999999);
          $_t.attr('id', videoID);
        }
        $_t.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $_t.removeAttr('height').removeAttr('width');
      });
    });
  };
})(jQuery);

// remove fitvids for a specific element: jQuery("#myDiv").unFitVids();
jQuery.fn.unFitVids = function () {
    var id = jQuery(this).attr("id");
    var $children = jQuery("#" + id + " .fluid-width-video-wrapper").children().clone();
    jQuery("#" + id + " .fluid-width-video-wrapper").remove(); //removes the element
    jQuery("#" + id).append($children); //adds it to the parent
};





/** WAIT FOR IMAGES [used by masonry]
	https://github.com/alexanderdickson/waitForImages
 **************************************************************** **/
;(function ($) {
    // Namespace all events.
    var eventNamespace = 'waitForImages';

    // CSS properties which contain references to images.
    $.waitForImages = {
        hasImageProperties: ['backgroundImage', 'listStyleImage', 'borderImage', 'borderCornerImage', 'cursor']
    };

    // Custom selector to find `img` elements that have a valid `src` attribute and have not already loaded.
    $.expr[':'].uncached = function (obj) {
        // Ensure we are dealing with an `img` element with a valid `src` attribute.
        if (!$(obj).is('img[src!=""]')) {
            return false;
        }

        // Firefox's `complete` property will always be `true` even if the image has not been downloaded.
        // Doing it this way works in Firefox.
        var img = new Image();
        img.src = obj.src;
        return !img.complete;
    };

    $.fn.waitForImages = function (finishedCallback, eachCallback, waitForAll) {

        var allImgsLength = 0;
        var allImgsLoaded = 0;

        // Handle options object.
        if ($.isPlainObject(arguments[0])) {
            waitForAll = arguments[0].waitForAll;
            eachCallback = arguments[0].each;
			// This must be last as arguments[0]
			// is aliased with finishedCallback.
            finishedCallback = arguments[0].finished;
        }

        // Handle missing callbacks.
        finishedCallback = finishedCallback || $.noop;
        eachCallback = eachCallback || $.noop;

        // Convert waitForAll to Boolean
        waitForAll = !! waitForAll;

        // Ensure callbacks are functions.
        if (!$.isFunction(finishedCallback) || !$.isFunction(eachCallback)) {
            throw new TypeError('An invalid callback was supplied.');
        }

        return this.each(function () {
            // Build a list of all imgs, dependent on what images will be considered.
            var obj = $(this);
            var allImgs = [];
            // CSS properties which may contain an image.
            var hasImgProperties = $.waitForImages.hasImageProperties || [];
            // To match `url()` references.
            // Spec: http://www.w3.org/TR/CSS2/syndata.html#value-def-uri
            var matchUrl = /url\(\s*(['"]?)(.*?)\1\s*\)/g;

            if (waitForAll) {

                // Get all elements (including the original), as any one of them could have a background image.
                obj.find('*').addBack().each(function () {
                    var element = $(this);

                    // If an `img` element, add it. But keep iterating in case it has a background image too.
                    if (element.is('img:uncached')) {
                        allImgs.push({
                            src: element.attr('src'),
                            element: element[0]
                        });
                    }

                    $.each(hasImgProperties, function (i, property) {
                        var propertyValue = element.css(property);
                        var match;

                        // If it doesn't contain this property, skip.
                        if (!propertyValue) {
                            return true;
                        }

                        // Get all url() of this element.
                        while (match = matchUrl.exec(propertyValue)) {
                            allImgs.push({
                                src: match[2],
                                element: element[0]
                            });
                        }
                    });
                });
            } else {
                // For images only, the task is simpler.
                obj.find('img:uncached')
                    .each(function () {
                    allImgs.push({
                        src: this.src,
                        element: this
                    });
                });
            }

            allImgsLength = allImgs.length;
            allImgsLoaded = 0;

            // If no images found, don't bother.
            if (allImgsLength === 0) {
                finishedCallback.call(obj[0]);
            }

            $.each(allImgs, function (i, img) {

                var image = new Image();

                // Handle the image loading and error with the same callback.
                $(image).on('load.' + eventNamespace + ' error.' + eventNamespace, function (event) {
                    allImgsLoaded++;

                    // If an error occurred with loading the image, set the third argument accordingly.
                    eachCallback.call(img.element, allImgsLoaded, allImgsLength, event.type == 'load');

                    if (allImgsLoaded == allImgsLength) {
                        finishedCallback.call(obj[0]);
                        return false;
                    }

                });

                image.src = img.src;
            });
        });
    };
}(jQuery));