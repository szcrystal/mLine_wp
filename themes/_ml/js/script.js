(function($) {

var szcExec = (function() {
    
    return {
    
        opts: {
            crtClass: 'current',
            btnID: '.top_btn',
            all: 'html, body',
            animEnd: 'webkitAnimationEnd MSAnimationEnd oanimationend animationend', //mozAnimationEnd
            transitEnd: 'webkitTransitionEnd MSTransitionEnd otransitionend transitionend', //mozTransitionEnd 
        },
        
        addCurrent: function() {
            var url = window.location;
            $('.main-navigation a[href="'+url+'"]').addClass(this.opts.crtClass);
        },
        
        
        scrollFunc: function() {
            var t = this,
                tb = $(t.opts.btnID);
            
            tb.css('display','none').on('click', function() {
                $(t.opts.all).animate({ scrollTop:0 }, 1200, 'easeOutExpo');
            });

            $(document).scroll(function(){

                if($(this).scrollTop() < 200)
                    tb.fadeOut(200);
                else 
                    tb.fadeIn(300);
                    //$(this).stop();
            });
            
        },
       
       	menuSlide: function() {
       		
            $('.tgl-bar').on('click', function(){
            	
                $target = $('#masthead .main-navigation');
                
                $('.sub-menu:visible').slideUp(100);
                $target.slideToggle(250);
                
//                if($target.is(':visible')) {
//                
//                }
//                else {
//	                $target.slideDown(250);
//                }
            
            });
       
       		
       	},
       
       	subMenuSlide: function() {

			var speed = this.isSpTab('sp') ? 250 : 0;
            
            var $toggle = $('#mobile-menu > li.menu-item-has-children > a');
            
       		$toggle.on('click', function(){
				
                //open時に他リンクをクリックした時
                $toggle.not(this).next('.sub-menu:visible').slideUp(speed);
                
                $subMenu = $(this).next('.sub-menu');

				if($subMenu.is(':visible')) {
                   $subMenu.slideUp(270);
                }
                else {
                	$subMenu.slideDown(270);
                }
                
                return false;
            });
            
            
            if(this.isSpTab('tab')) {
                $('#page').on('click', function(){
                    $('.sub-menu:visible').slideUp(200);
                });
            }
            
       },
       
       
       	isAgent: function(user) {
       		if( navigator.userAgent.indexOf(user) > 0 ) return true;
        },
        
        isSpTab: function(arg) {
        	//var arr = ['iPhone','iPod','Mobile ','Mobile;','Windows Phone','IEMobile', 'iPad','Kindle','Sony Tablet','Nexus 7','Android Tablet'];
        	
            var arr = [];
            
            if(arg == 'sp')
            	arr = ['iPhone','iPod','Mobile ','Mobile;','Windows Phone','IEMobile'];
            
            else if(arg == 'tab')
            	arr = ['iPad','Kindle','Sony Tablet','Nexus 7','Android Tablet'];
            
            else
            	arr = ['iPhone','iPod','Mobile ','Mobile;','Windows Phone','IEMobile', 'iPad','Kindle','Sony Tablet','Nexus 7','Android Tablet'];
            
        	
            var th = this;
            var bool = false;
            
            arr.forEach(function(e, i, a) { //e:要素 i:index a:配列オブジェクト
            	if(th.isAgent(e)) {
                	bool = true;
                    return; //Exit
                }
            });
            
            return bool;
        },


    } //return

})();


$(function(e){ // -----------------------------
    
//    szcExec.addCurrent(); 
//    szcExec.scrollFunc();

    szcExec.menuSlide();
    szcExec.subMenuSlide();

});



})(jQuery);
