app.common = {
    init: function(){

			$(document).scroll(function(){
				if($(document).scrollTop()>=300)
				{
					$(".UpArrow").css("display","block");
				}
				else if($(document).scrollTop()<300)
				{
					$(".UpArrow").css("display","none");
				
				}
			});
			$(".UpArrow").click(function(){
	
			
			});
	
    },
    finalize: function(){

    }
};