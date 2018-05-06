$(function()
{
	$("#main-content").css("marginLeft","300px");
		$("#openSidebar").click(function()
		{
			$(".sidebar").css("display","block");
			$("#main-content").css("marginLeft","300px");
			$("#main-content").css("width","78%");
	
		})

		$("#close").click(function()
		{
			$(".sidebar").css("display","none");
			$("#main-content").css("marginLeft","0px");
			$("#main-content").css("width","100%");
			
		})

})