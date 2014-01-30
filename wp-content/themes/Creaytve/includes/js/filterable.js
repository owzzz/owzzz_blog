/*global jQuery:false */
jQuery(window).load(function ($) {
	"use strict";	

/*-----------------------------------------------------------------------------------*/
/*	01. PORTFOLIO FILTER
/*-----------------------------------------------------------------------------------*/

    var $container = $('#portfolio-list');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
	    resizesContainer: true
        }
    });

    $('#portfolio-filter li a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    return false;
    });

    var $optionSets = $('#portfolio-filter li'),
    $optionLinks = $optionSets.find('a');
     
    $optionLinks.click(function(){
        var $this = $(this);
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('#portfolio-filter');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected'); 
    });

});