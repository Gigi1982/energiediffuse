(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$(window).scroll(function() {    
            var scroll = $(window).scrollTop();
            var videoHeight = $('.video-container').height();
            
                
             //>=, not <=
            if (scroll >= 420) {
                //clearHeader, not clearheader - caps H
                $(".home .header").addClass("bigHeader");
            } else {$(".header").removeClass("bigHeader");}
            
            $('.animation').each(function(){
                if ($(this).is(":in-viewport")) {
                    $(this)[0].play();
                    //console.log('è nel viewport');
                } else {
                    $(this)[0].pause();
                    //console.log('non è nel viewport');
                }
            })
        });
        
        $('.mobile-navbar').click(function(){
            $('body').addClass('mobmenu-open');
            return false;
        });
        
        $('.close-navbar').click(function(){
            $('body').removeClass('mobmenu-open');
            return false;
        });
		
	});
	
})(jQuery, this);
