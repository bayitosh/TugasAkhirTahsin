@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Naql - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap IV</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Naql</h1></center>
			<div id="ket1">
				Naql berarti memindahkan. Menurut istilah ialah memindahkan harakat suatu huruf kepada huruf lainnya ketika dibaca, contoh lafadznya :<br>
			</div>
			<div id="wrapfile">
				<a href="بِئْسَ اۘلاِۘسْمُ الْفُسٌوْقَ بَعْدَالْإِيْمٰنِ#" value="{{ asset('files/step4/E_Naql/Naql.wav') }}" data-role="button" data-theme="a">بِئْسَ اۘلاِۘسْمُ الْفُسٌوْقَ بَعْدَالْإِيْمٰنِ</a>
			</div>
		</ol>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
	</div>
	@include('step4.menu')
@stop

@section('js')
	$('#wrapfile').on('click','a',function()
	{
		var str=$(this).attr('href');
		var txt=str.length;
		offset=txt-1;
		var slice=str.slice(0,offset);
		var file = $(this).attr('value');
		$('#popDisplay').text(''+slice+'').popup('open');
		$('#myplayer').html('<audio src="'+file+'" autoplay="true"></audio>');
	});
@stop