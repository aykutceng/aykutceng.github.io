


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