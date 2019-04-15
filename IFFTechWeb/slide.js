var intervall;


onload = function()
{

  intervall = setInterval( function(){ plusSlides(1) },8000);

};


function notSliding() { clearInterval(intervall)};

  function Sliding() {intervall = setInterval( function(){ plusSlides(1) },8000)};



/*var tekrar;




$(   function () 
        {
          startSlide();

          $('#slaytHover').hover(function () 
                                      {
                                          stopSlide(); 
                                      }, 
                                function () 
                                      {
                                          startSlide();
                                      }
                                )
        }   
  );


function startSlide(){ tekrar =  setInterval( function(){ plusSlides(1) },2000);   };

function stopSlide(){ clearInterval(tekrar);};*/






var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  clearInterval(intervall);
  showSlides(slideIndex += n);
  intervall = setInterval( function(){ plusSlides(1) },8000);  
}


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
};

function platformFun(imgs) {
    var platformImg = document.getElementById("platformImg");
    var platformText = document.getElementById("platformText");
    platformImg.src = imgs.src;
    platformText.innerHTML = imgs.alt;
    platformImg.parentElement.style.display = "block";
};
