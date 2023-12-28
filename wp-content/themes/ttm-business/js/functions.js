( function($){
	"use strict"
	
	jQuery( document ).ready( function($) {

		jQuery( '#primary-menu' ).slicknav({
			'label' : ' ',
			'closedSymbol': '+', 
			'openedSymbol': '-', 
			appendTo : '#site-navigation-mobile'
		});
	
	
	jQuery( ".prt-header-search-link a" ).addClass('sclose');	
	jQuery( ".search-wrapper a" ).on('click', function(){
		jQuery(".field.searchform-s").focus();	
		
		if (jQuery('.prt-header-search-link a').hasClass('sclose')) {	
			jQuery(this).removeClass('sclose').addClass('open');	
			jQuery(".prt-search-overlay").addClass('st-show');	
			jQuery('body').addClass('prt-search-on');						
		} else {
			jQuery(this).removeClass('open').addClass('sclose');	
			jQuery(".prt-search-overlay").removeClass('st-show');
			jQuery('body').removeClass('prt-search-on');						
		}	
	});	
	
});

})( jQuery );