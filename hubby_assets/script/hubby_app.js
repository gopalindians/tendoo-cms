// JavaScript Document
$(document).ready(function()
{
	var w_height	=	window.innerHeight;
	var w_width		=	window.innerWidth;
	var app_footer_height	=	$('#footer').height();
	var app_header_height	=	$('#header').height();
	function body_height_setter()
	{
		$('#body').css({"min-height": w_height - (app_footer_height + app_header_height)+'px'});
	}
	$(window).resize(function()
	{
		if($('#body').height() >= 700)
		{
			body_height_setter();
		}
	})
	// Binding Links
	$('*[data-url]').each(function()
	{
		$(this).bind('click',function()
		{
			document.location	=	$(this).attr('data-url');
		});
	});
	// Function
	body_height_setter();
	$('[button_ref]').each(function(){
		$(this).click(function(){
			document.location	=	$(this).attr('button_ref');
		});
	});
});