// function rota()
// {

	

// 	if(document.getElementById('rotaİç').style.display == '')
// 		{ 
// 			document.getElementById('rotaİç').style.display = 'block';
// 			document.getElementById('GenSak').innerHTML = document.getElementById('GenSak').innerHTML.replace("+","-");
// 		}
// 	else 
// 		{ 
// 			document.getElementById('rotaİç').style.display = '';
// 			document.getElementById('GenSak').innerHTML = document.getElementById('GenSak').innerHTML.replace("-","+");
// 		}
// }


$(document).ready(function(){

 $("p.rota").click(function(){
 
 $(".rotaİç").slideUp('slow')
 $(this).closest('.rotaAçKapa').find('.rotaİç').slideDown('slow')

 $(".rotaAçKapa").find("#GenSak").html("+")
 $(this).find('#GenSak').html("-")



 });

});



