$(function()
{
	$(window).scroll(function()
	{
		if($(window).scrollTop() >= 120)
		{
			$(".navbar").css({"background-color":"white"});
			$(".brand, .navbar-nav li a").css("color","#0e2311");
		} else {
			$(".navbar").css("background-color","");
			$(".brand, .navbar-nav li a").css("color","white");
		}
	})
})