

window.onscroll = function() 
{
      if (window.pageYOffset >= sticky)
        {
          if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight-t) 
            {
         
              document.getElementById('hiddenarrowdown').style.display = "none";
              document.getElementById('headerLogo').style.display = "";
              navbar.classList.add("sticky");
              navbar.classList.remove("normalPos");
              document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0.7)"           
            }
          else 
            {
             
              document.getElementById('hiddenarrowdown').style.display = "";
              document.getElementById('headerLogo').style.display = "";
              navbar.classList.add("sticky"); 
              navbar.classList.remove("normalPos");
              document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0.7)"          
            }
        }
      else
        {
          if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight-t) 
            {
              document.getElementById('hiddenarrowdown').style.display = "none";
              document.getElementById('headerLogo').style.display = "none";
              navbar.classList.remove("sticky");
              navbar.classList.add("normalPos");
              document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0)"
            }
          else 
            {
              document.getElementById('headerLogo').style.display = "none";
              document.getElementById('hiddenarrowdown').style.display = "";
              navbar.classList.remove("sticky"); 
              navbar.classList.add("normalPos");
              document.getElementById("navbar").style.backgroundColor = "rgba(0,0,0,0)"
            }
        }
    };
var navbar = document.getElementById("navbar");
var sticky = document.getElementById("navbar").offsetTop;
var x = window.innerHeight;
var t = x*0.065;



function openCloseBottom()

{
  document.getElementById("openclose").classList.remove("fadeUp");
  document.getElementById("openclose").classList.remove("fadeDown");
  
    if(document.getElementById("openclose").style.display == "")
    {
      document.getElementById("openclose").style.display = "inline-block";
      document.getElementById("openclose").classList.add("fadeUp");
      document.getElementById("uparrow").style.bottom = "14vh";
      document.getElementById("uparrow").style.transform = "rotateX(180deg)";
      document.getElementById("uparrow").style.borderTopLeftRadius = "0";
      document.getElementById("uparrow").style.borderTopRightRadius = "0";
      document.getElementById("uparrow").style.borderBottomLeftRadius = "10px";
      document.getElementById("uparrow").style.borderBottomRightRadius = "10px";
      
    }
    else if(document.getElementById("openclose").style.display == "inline-block")
    {
      
      document.getElementById("openclose").classList.add("fadeDown");
      document.getElementById("uparrow").style.bottom = "";
      document.getElementById("uparrow").style.transform = "rotateX(0deg)";
      document.getElementById("uparrow").style.borderTopLeftRadius = "10px";
      document.getElementById("uparrow").style.borderTopRightRadius = "10px";
      document.getElementById("uparrow").style.borderBottomLeftRadius = "0";
      document.getElementById("uparrow").style.borderBottomRightRadius = "0";
      setTimeout(function(){document.getElementById("openclose").style.display = ""},150);
      
    }
  
  
};

function mapSize()

{

    if(document.getElementById('map').style.height != '')
    {
        document.getElementById("map").style.height = '';
        document.getElementById("map").style.width = '';
        document.getElementById("map").style.transition = '1.5s';
        document.getElementById("mapIm").src = "mapBüyüt.png";
    }

    else
    {
        document.getElementById("map").style.height = '100vh';
        document.getElementById("map").style.width = '100%';
        document.getElementById("map").style.transition = '1.5s';
        document.getElementById("mapIm").src = "küçültMap.png";
    }

}