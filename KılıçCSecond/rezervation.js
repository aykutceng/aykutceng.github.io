// document.getElementById('w1').style.backgroundColor = "red";
// document.getElementById('w5').style.backgroundColor = "blue";
$(document).ready(function(){
	$('li#w1').each(function()
	{
		$(this).css("background-color","#EF5350");
	});

	$('li#w5').each(function()
	{
		$(this).css("background-color","#42A5F5");
	});

	$('li#w14').each(function()
	{
		$(this).css("background-color","#66D06A");
	});


});