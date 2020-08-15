document.onreadystatechange = function () {
  var state = document.readyState;
  if (state == 'interactive') {
       document.getElementById('contents').style.display="none";
       document.getElementById('loading').style.display="none";
       document.getElementById('navbar').style.display="none";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('loadMain').style.display="none";
         document.getElementById('contents').style.display="";
       document.getElementById('loading').style.display="";
       document.getElementById('navbar').style.display="";

      },1000);
  }
}