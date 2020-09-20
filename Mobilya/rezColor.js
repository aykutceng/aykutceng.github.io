$(document).ready(function(){

 $(".row .res").click(function(){

 	var li = $(this);
 	var col;

 	document.getElementById('rezColorBack').style.display = 'block';

 	$('.rezColor input').on('change', function() {

 	col = $('input[name=rezColor]').filter(':checked').val();

 	
    });

    $('#degistir').one('click', function() {



 	li.css("background-color", col);
 	document.getElementById('rezColorBack').style.display = '';
 	$('.rezColor input[name=rezColor]').prop('checked', false);

 	
 	
    });


 
 	
    $('#iptal').on('click', function() {

 	document.getElementById('rezColorBack').style.display = '';
 	$('.rezColor input[name=rezColor]').prop('checked', false);

 	
    });


 });


 $("#send").click(function() {
 	var imgs = $(".row .res img");
 	var alerting = "";
 	imgs.each(function() {
 		alerting += $(this).attr("src") + ": " + $(this).parent().css("background-color") + "\n"
 	})
 	alert(alerting);
 })

});