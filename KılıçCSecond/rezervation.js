// document.getElementById('w1').style.backgroundColor = "red";
// document.getElementById('w5').style.backgroundColor = "blue";
$(document).ready(function(){
	$('li#w1').each(function()
	{
		$(this).css("background-color","red");
	});

	$('li#w5').each(function()
	{
		$(this).css("background-color","blue");
	});

	$('li#w14').each(function()
	{
		$(this).css("background-color","green");
	});


});