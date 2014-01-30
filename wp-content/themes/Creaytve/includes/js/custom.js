/*global jQuery:false */
jQuery(document).ready(function ($) {
	"use strict";	

/*-----------------------------------------------------------------------------------*/
/*	01. TOTOP BUTTON
/*-----------------------------------------------------------------------------------*/

$('.totop').click(function () { 
        $('html, body').animate({
            scrollTop: 0
        }, 600);
        return false;
    });

/*-----------------------------------------------------------------------------------*/
/*	02. PORTFOLIO FILTERING
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


/*-----------------------------------------------------------------------------------*/
/*	03. MENU BUTTON SLIDER
/*-----------------------------------------------------------------------------------*/

		$("#overlay").hide();
		$("#drawer-toggle, #drawer-toggle2").toggle(function () {
		
		    $(".icon-reorder").attr('class', 'icon-remove');
		   
		    $("#overlay").slideToggle(300);
		    $(this).addClass('active');
		    
		     return false;
		    
		}, function () {

 		$(".icon-remove").attr('class', 'icon-reorder');
		    
		    $("#overlay").slideToggle(300);
		    $(this).removeClass('active');
		    
		     return false;
		});

/*-----------------------------------------------------------------------------------*/
/*	04. FLEXSLIDER
/*-----------------------------------------------------------------------------------*/
	
	$(".flexslider").flexslider({
        	animation: 'slide',
        	touch: true,
		smoothHeight: true,
        	slideshow: true,
        	controlNav: false,
        	directionNav: true,
		prevText: "",
		nextText: "", 
    	});
							
/*-----------------------------------------------------------------------------------*/
/*	05. CUSTOM FITVIDS
/*-----------------------------------------------------------------------------------*/

    $("#wrapper").fitVids({ customSelector: "iframe[src^='http://w.soundcloud.com']"});
    $(".fitvid").fitVids();

/*-----------------------------------------------------------------------------------*/
/*	06. SEARCH BUTTON & WIDGET BUTTON TOGGLE
/*-----------------------------------------------------------------------------------*/

	$(".hero-search-inner").hide();
	$(".hero-widget-inner").hide();
    		
		$("#search-toggle").click(function () {
		
		$("#search-toggle").toggleClass('active');
			if ($("#widget-toggle").hasClass('active')) {
				$("#widget-toggle").toggleClass('active');
				$(".hero-widget-inner").slideUp(300);
				$(".hero-search-inner").slideToggle(300)  } else {
		$(".hero-widget-inner").slideUp(300);
		$(".hero-search-inner, .hero-inner").slideToggle(300) }
	
		return false;

    		});
    		
		$("#widget-toggle").click(function () {
		
		$("#widget-toggle").toggleClass('active');
			if ($("#search-toggle").hasClass('active')) {
				$("#search-toggle").toggleClass('active');
				$(".hero-search-inner").slideUp(300);
				$(".hero-widget-inner").slideToggle(300)  } else {
		$(".hero-search-inner").slideUp(300);
		$(".hero-widget-inner, .hero-inner").slideToggle(300) }
	
		return false;

    		});

/*-----------------------------------------------------------------------------------*/
/*	07. SCROLL BUTTON BLOG
/*-----------------------------------------------------------------------------------*/

	$('a[href^="#"]').click(function(){
    		$('html, body').animate({
        	scrollTop: $( $(this).attr('href') ).offset().top
    		}, 500);
    		return false;
	});

/*-----------------------------------------------------------------------------------*/
/*	08. FITVID
/*-----------------------------------------------------------------------------------*/

	$(".fitvid").fitVids();

	$("#wrapper").fitVids({
	customSelector: "iframe[src^='http://w.soundcloud.com']"
	});

/*-----------------------------------------------------------------------------------*/
/*	09. RESPONSIVE MENU FOR MOBILE DEVICES
/*-----------------------------------------------------------------------------------*/

    $('.nav2').mobileMenu();
    $('select.select-menu').each(function () {
        var title = $(this).attr('title');
        if ($('option:selected', this).val() !== '') { title = $('option:selected', this).text();}
        $(this)
            .css({
            'z-index': 10,
            'opacity': 0,
            '-khtml-appearance': 'none'
        })
            .change(function () {
            var val = $('option:selected', this).text();
            $(this).next().text(val);
        });
    });

});