$(document).ready(function ()
	{ var curr;
		$('.columnImg > img').each(function () 
		{
			var next = $(this);
			var srcImg = $(this).attr('src');
			var srcNext;
				
			$(this).on("click",function()
			{
				$('#myModal').css('display','block');
				$('#imgMod').attr('src',srcImg);
				// curr = $(this).index('img');
				// alert(curr);
			});

			// $('#imgMod').on("click",function(){
			// 	srcNext = next.closest('img').next('.imgGrid').attr('src');
			// 	$('#imgMod').attr('src',srcNext);

			// });
		});

		$('.close').on("click",function()
		{
			$('#myModal').css('display','none');
		});

		$(window).on('click',function(event) 
			{
	 			if (event.target == document.getElementById('myModal')) 
		 			{
		    			document.getElementById('myModal').style.display = "none";
		  			}
			});

		

	});