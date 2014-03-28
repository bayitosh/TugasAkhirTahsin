<div data-role='header' data-theme='a' class='ui-corner-top' style='background:#fff; padding:10px; color:#fff; text-shadow:none;'>
    <center><h1><span style='font-size:50px; background:#fff; color:#000; padding:5px; 10px 5px 10px'>{{ $huruf->teks }}</span></h1></center>
</div>
<div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
	<center>
   	<a href="#" id="ChAudio" value="{{ $token }}" title="dengar audio">{{ HTML::image('img/audio.png') }}</a>
   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   	<a href="#" id="ChVideo" value="{{ $token }}" title="lihat video">{{ HTML::image('img/video.png') }}</a>
   </center>
   <div id="myplayer" style="display:none;"></div>
   <div id='myvideo'></div>
</div>
<script>
$(function()
{
	$('#ChAudio').click(function(e)
	{
		e.preventDefault();
		var token = $(this).attr('value');
		$('#myvideo').hide();
		$.ajax({
			url:'{{ URL::to("tahap-pertama/callaudiotahap1") }}',
			type:'get',
			async:false,
			data:{tok:token},
			success:function(audio)
			{
				$('#myplayer').html(audio).play();
			},
			error:function()
			{
				alert('SALAH');
			}
		});
		return false;
	});
	$('#ChVideo').click(function(e)
	{
		e.preventDefault();
		var token = $(this).attr('value');
		$('#myvideo').show();
		$.ajax({
			url:'{{ URL::to("tahap-pertama/callvideotahap1") }}',
			type:'get',
			async:false,
			data:{tok:token},
			success:function(video)
			{
				$('#myvideo').html(video).play();
			},
			error:function()
			{
				alert('SALAH');
			}
		});
		return false;
	});
});
</script>