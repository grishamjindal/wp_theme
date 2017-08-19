/**
 * Infinite Scroll + Masonry + ImagesLoaded
 */
jQuery(function($) {

	// Main content container
	var $container = $('#blog-grid');

    // get Isotope instance
    var iso = $container.data('isotope');
	// Infinite Scroll
	$container.infiniteScroll({
        path: 'a.next',
        append: '.post-item',
        outlayer: iso,
        history: 'push',
        hideNav: '.pagination',
        status: '.page-load-status'
	});

	$(document).ready(function(){
		$('#search-icon').click(function() {
			$('#search-icon').hide();
			$('#search-form-alt').show();
			$('#search-input').focus();
		});
		$('#search-input').blur(function() {
			$('#search-form-alt').hide();
			$('#search-icon').show();
		});
	});
});