jQuery(document).ready(function($) {
	
	/* Clone Menu CTA Button to Mobile Menu */
	$('.milly-cta-menu').parent().addClass('milly-cta-menu-wrapper').clone().appendTo('.milly-menu-bg .et_mobile_menu');
	
	$('.mobile_menu_bar').click(function(){
		$('body').toggleClass('noscroll');
	})
	
	/* Close the parent section on click */
	$('.milly-close-this-section').off().click(function(e) {
		e.preventDefault();
		$(this).closest('.et_pb_section').slideUp();
	})
	
	/* Add Account Icon to menu item */
	$('.milly-account>a').wrapInner( '<span>').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"/></svg>');
	
	/* Add Search Icon to menu item */
	$('.milly-search>a').wrapInner( '<span>').prepend('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>');
	/* Add archive class to search results page */
	$('body.search').addClass('archive');
	
	/* Milly Overlays */
	$("[class*='milly-overlay-']").each(function(){
		$(this).wrap('<div class="milly-overlay-wrapper"><div class="milly-inner-wrapper"><div>');
		if ($(this).find('.milly-close').length == 0) {
			$(this).closest('.milly-overlay-wrapper').append('<span class="milly-default-close"></span>');
		}
	});
	$('[class*=milly-show-overlay-]').off().click(function(e){
		e.preventDefault();
		var num = $(this).attr('class').match(/milly-show-overlay-(\d+)/)[1]
		var numMillyOverlay = $('.milly-overlay-'+num);
		var numMillyOverlayWrapper = numMillyOverlay.closest('.milly-overlay-wrapper');
		var numMillyVideoOverlayInside = numMillyOverlay.find('.et_pb_video_overlay');
		
		var numMillyOverlayVideoIframe = numMillyOverlayWrapper.find('.et_pb_video_box iframe');
		var numMillyOverlayVideoSrc = numMillyOverlayVideoIframe.attr("src");
		
		console.log(numMillyOverlayVideoSrc);
		
		numMillyOverlayWrapper.fadeIn('slow').addClass('is-visible');
		numMillyOverlayWrapper.closest('.et_builder_inner_content').addClass('is-visible');
		
		numMillyVideoOverlayInside.delay(1000).queue(function (next) { 
			$(this).trigger('click'); 
			next(); 
		});
		if ( numMillyOverlay.length ) { 
			$('body').addClass('milly-noscroll');
		} 
	});
	
	function MillyOverlayClose() {
		var thisObj = $(this);
		var millyOverlayWrapper = $(thisObj).closest('.milly-overlay-wrapper');
		millyOverlayWrapper.fadeOut('slow').removeClass('is-visible');
		$('body').removeClass('milly-noscroll');
		millyOverlayWrapper.closest('.et_builder_inner_content').delay(600).queue(function (next) { 
			$(this).removeClass('is-visible'); 
			next(); 
		});
		
		// if video iframe inside
		var millyOverlayVideoIframe = millyOverlayWrapper.find('.et_pb_video_box iframe');
		if (millyOverlayVideoIframe.length !== 0) {
			var millyOverlayVideoSrc = millyOverlayVideoIframe.attr('src').replace('autoplay=1', 'autoplay=0');
			millyOverlayVideoIframe.attr('src', millyOverlayVideoSrc);
		}
		
		// if video html inside
		var millyOverlayVideoHTML = millyOverlayWrapper.find('.et_pb_video_box video');
		if (millyOverlayVideoHTML.length !== 0) {
			millyOverlayVideoHTML.trigger('pause');
		}
		
	}
	$('.milly-close').off().click(function(e){
		e.preventDefault();
	});
	$('.milly-close, .milly-default-close').on('click', MillyOverlayClose);
	
	if ( dlov_values.dlov_overlay_escape === 'on' ) {
		$(document).on('keyup', function(e) {
		  if (e.key == "Escape") $('.milly-close, .milly-default-close').click();
		});
	}
	if ( dlov_values.dlov_overlay_click === 'on' ) {
		$('.milly-inner-wrapper > div').on('click', MillyOverlayClose).on('click', 'div', function(e) 	{e.stopPropagation();}
		);
	}
	
	
	
	$('.milly-default-close').addClass(dlov_values.dlov_overlay_icon);
	if ( dlov_values.dlov_overlay_icon == 'dlov_icon1' ) {
		$('.milly-default-close').each(function(){
			$(this).append('<svg class="dlov_icon1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 26 26"><path d="M14.06 13 24.78 2.28a.75.75 0 1 0-1.06-1.06L13 11.94 2.28 1.22a.75.75 0 1 0-1.06 1.06L11.94 13 1.22 23.72a.75.75 0 1 0 1.06 1.06L13 14.06l10.72 10.72a.747.747 0 0 0 1.06 0 .75.75 0 0 0 0-1.06L14.06 13z"/></svg>')
		});
	}
	if ( dlov_values.dlov_overlay_icon == 'dlov_icon2' ) {
		$('.milly-default-close').each(function(){
			$(this).append('<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512"><path d="M443.6 387.1 312.4 255.4l131.5-130c5.4-5.4 5.4-14.2 0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4-3.7 0-7.2 1.5-9.8 4L256 197.8 124.9 68.3c-2.6-2.6-6.1-4-9.8-4-3.7 0-7.2 1.5-9.8 4L68 105.9c-5.4 5.4-5.4 14.2 0 19.6l131.5 130L68.4 387.1c-2.6 2.6-4.1 6.1-4.1 9.8 0 3.7 1.4 7.2 4.1 9.8l37.4 37.6c2.7 2.7 6.2 4.1 9.8 4.1 3.5 0 7.1-1.3 9.8-4.1L256 313.1l130.7 131.1c2.7 2.7 6.2 4.1 9.8 4.1 3.5 0 7.1-1.3 9.8-4.1l37.4-37.6c2.6-2.6 4.1-6.1 4.1-9.8-.1-3.6-1.6-7.1-4.2-9.7z"/></svg>')
		});
	}
	if ( dlov_values.dlov_overlay_icon == 'dlov_icon3' ) {
		$('.milly-default-close').each(function(){
			$(this).append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zM11.4 10l2.83-2.83-1.41-1.41L10 8.59 7.17 5.76 5.76 7.17 8.59 10l-2.83 2.83 1.41 1.41L10 11.41l2.83 2.83 1.41-1.41L11.41 10z"/></svg>')
		});
	}
	if ( dlov_values.dlov_overlay_icon == 'dlov_icon4' ) {
		$('.milly-default-close').each(function(){
			$(this).append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M64 0a64 64 0 1 0 64 64A64.07 64.07 0 0 0 64 0Zm0 122a58 58 0 1 1 58-58 58.07 58.07 0 0 1-58 58Z"/><path d="M92.12 35.79a3 3 0 0 0-4.24 0L64 59.75l-23.87-24A3 3 0 0 0 35.88 40l23.88 24-23.88 24a3 3 0 0 0 4.25 4.24L64 68.25l23.88 24A3 3 0 0 0 92.13 88L68.24 64l23.89-24a3 3 0 0 0-.01-4.21Z"/></svg>')
		});
	}
	
	/* Milly Mobile Menu */
			
	$('.milly-menu .et_mobile_menu .menu-item-has-children').prepend('<a href="#" class="dlov-sub-menu-toggle"></a>');
	$('.dlov-sub-menu-toggle').click(function (e) {
		e.preventDefault();
		$(this).toggleClass('toggled');
		$(this).parent('li').toggleClass('toggled');
	});
	
	var MillyEmptyParentLinks = $('.milly-menu .et_mobile_menu .menu-item-has-children > a[href="#"').not('.dlov-sub-menu-toggle');
	
	var MillyMobileToggles = $('.dlov-sub-menu-toggle');
	MillyEmptyParentLinks.off('click');
	MillyEmptyParentLinks.each(function (i) {
		if ($(this).attr("href") === '#') {
			$(this).off('click').click(function () {
				MillyMobileToggles[i].click(function () {
					$(this).toggleClass('toggled');
				});
			});
		}
	});
	
	/* Milly Parallax Effect */
	if ( dlov_values.dlov_enable_parallax === 'on' ) {
		
		$(".milly-parallax").each(function(){
			var InnerModule1 = $(this).find('.et_pb_module').eq(0);
			var InnerModule2 = $(this).find('.et_pb_module').eq(1);
			var InnerModule3 = $(this).find('.et_pb_module').eq(2);
			
			$(this).mousemove(function(e) {
					parallaxIt(e, InnerModule1, -20);
					if (InnerModule2.length != 0) {
						parallaxIt(e, InnerModule2, 100);
					}
					if (InnerModule3.length != 0) {
						parallaxIt(e, InnerModule3, 30);
					}
				});
				function parallaxIt(e, target, movement) {
						var $this = target.closest(".milly-parallax");
						var relX = e.pageX - $this.offset().left;
						var relY = e.pageY - $this.offset().top;
					
					
						TweenMax.to(target, 1, {
							x: (relX - $this.width() / 2) / $this.width() * movement,
							y: (relY - $this.height() / 2) / $this.height() * movement
						});
					}
				
		});
	}
	
	
	/* Milly Blurbs */
	
	$('.milly-blurb1').each(function(){
		var $BlurbIcon = $(this).find('.et-pb-icon');
		$BlurbIcon.clone().insertAfter($BlurbIcon).html('');
	})
	
	$('.milly-blurb2').each(function(){
		var $BlurbIcon = $(this).find('.et-pb-icon');
		$BlurbIcon.wrapInner('<em>');
	})
	
	/* Milly Inline Modules /Buttons */
	$('.milly-inline-module.et_pb_button').each(function(){
		$(this).parent().addClass('milly-inline-module');
	});
	
	/* Milly Sliders */
	if ( dlov_values.dlov_enable_sliders === 'on' ) {
		var $carousel = $('.milly-testimonial-slider .et_pb_column');
		$carousel.on( 'ready.flickity', function() {
			$('.milly-testimonial-slider .flickity-prev-next-button').after('<div class="milly-slider-overlay">')
		});
		$('.milly-testimonial-slider .et_pb_column').flickity({
			cellAlign: 'left',
			cellSelector: '.et_pb_testimonial',
			pageDots: false,
			groupCells: '80%',
			freeScroll: true,
			contain: true
		});
		
		$('.milly-shop-slider ul').flickity({
			cellAlign: 'left',
			cellSelector: 'li.product',
			pageDots: false,
			contain: true,
			freeScroll: true,
			wrapAround: true
		});
		
		$('.milly-logo-slider .et_pb_column').flickity({
			cellAlign: 'left',
			cellSelector: '.et_pb_image',
			pageDots: false,
			prevNextButtons: false,
			freeScroll: true,
			autoPlay: true,
			contain: true
		});
		
		$('.milly-row-slider').flickity({
			pageDots: false,
			contain: true,
			wrapAround: true,
			adaptiveHeight: true
		});
		
		$('.milly-row-inline-slider').wrapInner('<div class="milly-row-wrapper">');
		$('.milly-row-inline-slider .milly-row-wrapper').flickity({
			pageDots: false,
			adaptiveHeight: true,
			cellAlign: 'left',
			cellSelector: '.et_pb_row',
			freeScroll: true,
			wrapAround: true,
			contain: true
		});
		
		$('.milly-tab-content').wrapAll('<div class="milly-tab-wrapper">');
		var $milly_tab_carousel = $('.milly-tab-wrapper').flickity({
			pageDots: false,
			prevNextButtons: false,
			draggable: false,
			adaptiveHeight: true
		});
		
		$('.milly-mini-slider').flickity({
			pageDots: true,
			prevNextButtons: false,
			contain: true,
			wrapAround: true,
			adaptiveHeight: true
		});
	
		$('.milly-tab-nav .et_pb_column').off().click(function(e){
			e.preventDefault();
			var current_tab = '#' + $(this).attr('id');
			$milly_tab_carousel.flickity( 'selectCell', current_tab );
			$('.milly-tab-nav .et_pb_column').removeClass('is-selected');
			$(this).addClass('is-selected');
		});
	}
	
	$('.post-meta, .et_pb_title_meta_container').html(function () {
		return $(this).html().replace(/\|/g, '<span class="pipe">|</span>');
	});
	
	$('.et_pb_pricing_table').addClass('milly-accent-button');
	$('.et_pb_featured_table').removeClass('milly-accent-button').addClass('milly-primary-button');
	
	/* Hide Login text on my account page if there is no registration form */
	if ($('.woocommerce-form-register').length == 0) {
		$('.woocommerce-form-login').parent().find('>h2').detach();
	}
	/* Hide "Additional information" heading if there is no product attributes */
	if ($('.single-product .woocommerce-product-attributes').length == 0) {
		$('.single-product .et_pb_wc_additional_info>div>h2').detach();
	}
	

});
