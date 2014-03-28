@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Saktah - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Saktah</h1></center>
			<div id="ket1">
				Menurut bahasa saktah adalah menahan. Menurut istilah ialah menahan (suara pada) suatu kalimat
				tanpa bernafas, dengan niat melanjutkan kembali bacaan, contoh lafadznya :<br>
			</div>
			<div id="wrapfile">
				
				<a href="وَلَمْ يَجْعَلْ لَهُ,عِوَجًاۜ قَيِّماً#" value="{{ asset('files/step4/A_Saktah/saktah1.wav') }}" id="audio" data-role="button" data-theme="a">وَلَمْ يَجْعَلْ لَهُ,عِوَجًاۜ قَيِّماً</a>
				<a href="مِنْ مَرْقَدِ نَاۜۗ هٰذَا#" value="{{ asset('files/step4/A_Saktah/saktah2.wav') }}" data-role="button" data-theme="a">مِنْ مَرْقَدِ نَاۜۗ هٰذَا</a>
				<a href="وَقِيْلَ مَنْۜ رَاقٍ#" value="{{ asset('files/step4/A_Saktah/saktah3.wav') }}" data-role="button" data-theme="a">وَقِيْلَ مَنْۜ رَاقٍ</a>
				<a href="كَلاَّۖ ۖبَلْ ۜرَانَ#" value="{{ asset('files/step4/A_Saktah/saktah4.wav') }}" data-role="button" data-theme="a">مِنْ مَرْقَدِ نَاۜۗ هٰذَا</a>
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