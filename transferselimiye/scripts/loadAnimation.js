   $(window).on('load',function(){
              $('body').animate({opacity: 1},1200);
              $('section').each(function(){
                $(this).animate({marginLeft: 0},1200);})



    	$(".nav-link.text-uppercase.font-weight-bold").click(function(){
    		
    			var scrl = $(this).attr("href");
    			$('html,body').animate({scrollTop: $(scrl).offset().top},1000);})
    		
              
    })





   /* $(window).on('load',function() {

      var x = 0;
      var a = $("section");
      var b;

      var y  = window.pageYOffset;
      $(window).on('scroll',function(){
          y  = window.pageYOffset;
          if(y > x){
            
            a = a.next(); 
            
            $('html, body').animate({scrollTop: a.offset().top},1000);
            
          }
          else{
            
            a = a.prev();
            
            $('html, body').animate({scrollTop: a.offset().top},1000);
            
          }
          x = y;
        
        
      });
    }); */