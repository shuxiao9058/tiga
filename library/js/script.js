/* Author:
Satrya - http://twitter.com/msattt
*/
var $j = jQuery.noConflict();
$j(document).ready(function(){
	
	// Reponsive videos
	$j("#content").fitVids();
	
	// Reponsive menus
	$j(".secondary-nav").mobileMenu();
	
	// Drop down menus
	$j(".main-navigation ul li ul, .secondary-navigation ul li ul").parent().addClass("arrow");
	$j(".main-navigation ul li, .secondary-navigation ul li").hover(function(){
        $j(this).addClass("hover");
        $j(this).find("ul:first").slideToggle("fast");
    }, function(){
        $j(this).removeClass("hover");
        $j(this).find("ul:first").hide("fast");
    
    });
	
	// Fancybox shortcode
	$j(".fancyimg, .format-gallery-item a").fancybox({
		'overlayShow'	: true,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic'
	});
	
	// Slideshow
    $j(".rslides").responsiveSlides({
		auto: true,
        pager: true,
        nav: true,
        speed: 500,
		pauseControls: true,
		pause: true,
        maxwidth: 700
    }).find(".featured-slides").hover(
		function() { $j(this).find(".slides-content").slideDown(); },
		function() { $j(this).find(".slides-content").slideUp(); }
	);
	
});