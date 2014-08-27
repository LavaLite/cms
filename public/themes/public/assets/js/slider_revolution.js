	// VIDEOJS PATH
	// Example: 'assets/plugins/revolution-slider/videojs/'
	var _videoJsPath = 'assets/plugins/revolution-slider/videojs/';
	// ------------------------------------------------------------

jQuery(document).ready(function() {
	var revapi;

	/**
		@HALFSCREEN SLIDER
	**/
	if(jQuery(".fullwidthbanner").length > 0) {

	   revapi = jQuery('.fullwidthbanner').revolution({
			delay:9000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigationType:"both",
			navigationArrows:"solo",
			navigationStyle:"round",

			touchenabled:"on",
			onHoverStop:"on",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:0,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:1,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,


			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",

			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"on",
			hideArrowsOnMobile:"on",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:768,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			videoJsPath: _videoJsPath,
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });
	}


	/**
		@FULLSCREEN SLIDER
	**/
	if(jQuery(".fullscreenbanner").length > 0) {

		var tpj=jQuery;				
		tpj.noConflict();				
		var revapi25;
		
		tpj(document).ready(function() {
						
			if(tpj('.fullscreenbanner').revolution == undefined) {
				revslider_showDoubleJqueryError('.fullscreenbanner');
			} else {
				revapi25 = tpj('.fullscreenbanner').show().revolution({
					delay:9000,
					startwidth:1200,
					startheight:700,
					hideThumbs:10,
					
					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:4,
					
					navigationType:"none",
					navigationArrows:"none",
					navigationStyle:"round",
					
					touchenabled:"on",
					onHoverStop:"on",
					
					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:0,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,
							
					shadow:1,
					fullWidth:"off",
					fullScreen:"on",

					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,

					
					shuffle:"off",
					
											
					forceFullWidth:"on",						
					fullScreenAlignForce:"off",						
					hideThumbsOnMobile:"off",
					hideBulletsOnMobile:"on",
					hideArrowsOnMobile:"on",
					hideThumbsUnderResolution:0,
					
					hideSliderAtLimit:0,
					hideCaptionAtLimit:768,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					videoJsPath: _videoJsPath,
					fullScreenOffsetContainer: "header, .pagetitlewrap"	
				});

			// Used by styleswitcher onle - delete this on production!
			jQuery("#is_wide, #is_boxed").bind("click", function() { revapi25.revredraw(); });

			}
		});	//ready

	}


	/**
		@KEN BURNS
	**/
	if(jQuery(".fullscreenbanner.ken-burns").length > 0) {

		revapi = jQuery('.fullwidthbanner').revolution({
			dottedOverlay:"none",
			delay:9000,
			startwidth:1170,
			startheight:400,
			hideThumbs:200,
			
			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,
			
			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:"round",
			
			touchenabled:"on",
			onHoverStop:"off",
			
			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:0,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,
					
			shadow:1,
			fullWidth:"on",
			fullScreen:"off",

			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			
			shuffle:"off",
			
			autoHeight:"off",						
			forceFullWidth:"off",						
									
			hideThumbsOnMobile:"off",
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			videoJsPath:"http://server.local/revslider/wp-content/plugins/revslider/rs-plugin/videojs/",
			fullScreenOffsetContainer: ""
		});

		// Used by styleswitcher onle - delete this on production!
		jQuery("#is_wide, #is_boxed").bind("click", function() { revapi.revredraw(); });

	}

});	//ready
