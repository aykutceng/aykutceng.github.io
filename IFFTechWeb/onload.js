onload = function() 
    {
    	if(window.matchMedia("(min-width: 992px)").matches)
    	{
    		document.getElementById('loading').style.backgroundSize = "17% auto,47% 250%,47% 250%";
    		document.getElementById('loading').style.transition = "1.5s cubic-bezier(0.1,0.1,0.25,1)";
    	}

    	else if(window.matchMedia("(min-width: 768px)").matches)
    	{
    		document.getElementById('loading').style.backgroundSize = "24% auto,43% 200%,43% 200%";
    		document.getElementById('loading').style.transition = "1.5s cubic-bezier(0.1,0.1,0.25,1)";
    	}

    	else if(window.matchMedia("(min-width: 600px)").matches)
    	{
    		document.getElementById('loading').style.backgroundSize = "32% auto,38% 150%,38% 150%";
    		document.getElementById('loading').style.transition = "1.5s cubic-bezier(0.1,0.1,0.25,1)";
    	}

    	else if(window.matchMedia("(max-width: 600px)").matches)
    	{
    		document.getElementById('loading').style.backgroundSize = "38% auto,34% 80%,34% 80%";
    		document.getElementById('loading').style.transition = "1.5s cubic-bezier(0.1,0.1,0.25,1)";
    	}
    };