(function( $ ) {
	'use strict';
	$(window).on('scroll touchmove', function() {
        $('#header').toggleClass('scrolled', $(document).scrollTop() > 0);
        $('#header').toggleClass('bg-color', $(document).scrollTop() > 50);
    });
})( jQuery );