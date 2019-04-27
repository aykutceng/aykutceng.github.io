$(document).ready(function(){

 $(".days > li").click(function(){

 	var li = $(this);
 	var col;

 	document.getElementById('rezColorBack').style.display = 'block';

 	$('.rezColor input').on('change', function() {

 	col = $('input[name=rezColor]').filter(':checked').val();

 	
    });

    $('#degistir').one('click', function() {



 	li.css('background-color', col);
 	document.getElementById('rezColorBack').style.display = '';
 	$('.rezColor input[name=rezColor]').prop('checked', false);

 	
 	
    });


 
 	
    $('#iptal').on('click', function() {

 	document.getElementById('rezColorBack').style.display = '';
 	$('.rezColor input[name=rezColor]').prop('checked', false);

 	
    });


 });

});