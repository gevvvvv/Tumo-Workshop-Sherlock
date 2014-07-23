$(document).ready(function(){

	var options = {
		width: 1022,
		height: 650,
		interval: 3000,
	};

	$('#slyder').css({width:options.width + "px", height:options.height + 'px'});

	$('#scrollDiv').css({width:options.width * 5 + 'px', height:options.height});

	$('#scrollDiv img').css({width: options.width, height: options.height});

	var interval = setInterval(function(){

		$('#slyder').animate({scrollLeft:'+=1022px'}, 700, "linear");

		if($('#slyder').scrollLeft() >= options.width * 5)
		{

			$('#slyder').animate({scrollLeft:'0px'}, 700, "linear");

		}

	}, options.interval);



});