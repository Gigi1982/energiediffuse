(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$(window).scroll(function() {    
            var scroll = $(window).scrollTop();
            var videoHeight = $('.video-container').height();
            
                
             //>=, not <=
            if (scroll >= 420) {
                //clearHeader, not clearheader - caps H
                $(".header").addClass("bigHeader");
            } else {$(".header").removeClass("bigHeader");}
        });
		
	});
	
})(jQuery, this);
