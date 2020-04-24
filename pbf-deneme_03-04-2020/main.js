var expanded = false;
var opSehirClass = "sehirSec";
var opSehirID = "checkSehir";

	$(".sehirSec").click(function(){

		 
	  var checkboxes = $("#checkSehir");
	  if (!expanded) {
	    checkboxes.css("display","block");
	    expanded = true;
	  } else {
	    checkboxes.css("display","none");
	    expanded = false;
	  }
	});



