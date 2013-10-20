<div id="hubby_bottom" style="height:100px;">
<script>
	$(document).ready(function()
	{
		var height	=	$('#hubby_menu').height();
		var bottom	=	$('#hubby_bottom').height();
		var body	=	$('#hubby_body').height(window.document.height - (height + bottom));
	});
</script>
</div>