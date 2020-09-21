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


 $(".send").click(function() {
 	var imgs = $(this).parent();
 	if(imgs.attr("id") == '1'){
 	$('div#1').addClass("row");
 	$('div#1').removeClass("rowShow");}
 	if(imgs.attr("id") == '2'){
 	$('div#2').addClass("row");
 	$('div#2').removeClass("rowShow");}
 	imgs = imgs.find("img")
 	var alerting = "";
 	imgs.each(function() {
 		alerting += $(this).attr("src") + ": " + $(this).parent().css("background-color") + "\n"
 	})
 	alert(alerting);
 })

$(".mainImg img").click(function() {
	var id = $(this).attr("class");
	if (id == '1') {

		$('div#1').removeClass("row");
		$('div#1').addClass("rowShow");
	}

	else if (id == '2') {

		$('div#2').removeClass("row");
		$('div#2').addClass("rowShow");
	}
	

})

});