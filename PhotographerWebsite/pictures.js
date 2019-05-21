$(document).ready(function(){


	$('img#familyFiltered').each(function()
			{
				$(this).css("display","inline-block");
			});



	$('li#familyFilter').click(function(){
		$('img#familyFiltered').each(function()
			{
				$(this).css("display","inline-block");
			});
		$('img#cosplayFiltered').each(function()
			{
				$(this).css("display","none");
			});

		$('img#modelFiltered').each(function()
			{
				$(this).css("display","none");
			});

	});



	$('li#cosplayFilter').click(function(){
		$('img#familyFiltered').each(function()
			{
				$(this).css("display","none");
			});
		$('img#cosplayFiltered').each(function()
			{
				$(this).css("display","inline-block");
			});

		$('img#modelFiltered').each(function()
			{
				$(this).css("display","none");
			});

	});



	$('li#modelFilter').click(function(){
		$('img#familyFiltered').each(function()
			{
				$(this).css("display","none");
			});
		$('img#cosplayFiltered').each(function()
			{
				$(this).css("display","none");
			});

		$('img#modelFiltered').each(function()
			{
				$(this).css("display","inline-block");
			});

	});




	/************************** MODAL AÇMA KAPAMA *********************/


	$('.filteredPhotos > img').each(function () 
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