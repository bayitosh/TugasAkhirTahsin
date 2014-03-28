$(document).on('pagebeforeshow','[data-role="page"]',function()
{
	$(""+btnaudio+"").click(function(e)
	{
		e.preventDefault();
		var token = $(this).attr('value');
		$.ajax({
			url:baseurl+'/tahap-pertama/callaudiotahap1',
			type:'get',
			data:{tok:token},
			success:function(audio)
			{
				$('#myplayer').html(audio);
			}
		});
	});
});