$(document).ready(function()
{
	var resize	= 	function(e)
	{
		if(typeof $(e).attr('dynamix_resized') == 'undefined')
		{
			if(typeof $(e).attr('dynamix_width') != 'undefined')
			{
				var size = $(e).attr('dynamix_width');
				var parentSize = $(e).parent().width();
				$(e).width((parentSize * size)/100);
			}
			if(typeof $(e).attr('dynamix_height') != 'undefined')
			{
				var height = $(e).attr('dynamix_height');
				var parentHeight = $(e).parent().height();
				$(e).height((parentHeight * height)/100);
			}
			if(typeof $(e).attr('dynamix_width_copy') != 'undefined')
			{
				var p_el	=	$(e).attr('dynamix_width_copy');
				$(e).width($('#'+p_el).width());
			}
			if(typeof $(e).attr('dynamix_height_copy') != 'undefined')
			{
				var p_el	=	$(e).attr('dynamix_height_copy');
				$(e).height($('#'+p_el).height());
			}
			$(e).attr('dynamix_resized','true');
		}
	}
	$('*[dynamix_resizer]').each(function()
	{
		resize($(this));
	});
});