( function( window, $, undefined ) {
	'use strict';


	$('#primary-menu .menu-item-has-children').each(function(){
	    if($(this).hasClass('current-menu-parent' || 'current_page_parent' || 'current_page_ancestor')) {
	        $(this).children('.sub-menu' ).before( '<button class="sub-menu-toggle activated" role="button" aria-pressed="false"></button>' ); // Add toggles to sub menus
	    } else {
	    	$(this).children('.sub-menu' ).before( '<button class="sub-menu-toggle" role="button" aria-pressed="false"></button>' ); // Add toggles to sub menus
	    }
	});

	// Show/hide the navigation
	$( '.menu-toggle' ).on( 'click', function() {
		var $this = $( this );
		$this.attr( 'aria-pressed', function( index, value ) {
			return 'false' === value ? 'true' : 'false';
		});

		$this.toggleClass( 'activated' );
		$( '.main-navigation #primary-menu' ).slideToggle( 'fast' );

	});


	// Show/hide Sub Menu
	$( '.sub-menu-toggle' ).on( 'click', function() {
		var $this = $( this );
		$this.attr( 'aria-pressed', function( index, value ) {
			return 'false' === value ? 'true' : 'false';
		});

		$this.toggleClass( 'activated' );
		$this.next( '.main-navigation .sub-menu' ).slideToggle( 'fast' );

	});


	// Show/hide Search Box

	$( '.search-toggle' ).on( 'click', function() {
		var $this = $( this );

		$this.attr( 'aria-pressed', function( index, value ) {
			return 'false' === value ? 'true' : 'false';
		});
		$( '.widget_search' ).slideToggle( 'fast' );
	});


	// Make sure menu is closed
	$(window).resize(function() {
		if(window.innerWidth > 768) {
			$(".main-navigation ul").removeAttr("style");
			$(".main-navigation ul .menu-item-has-children .sub-menu").removeAttr("style");
			$(".widget_search").removeAttr("style");
		}
	});



})( this, jQuery );