@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Nun Mati dan Tanwin - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Nun Mati dan Tanwin)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Izh-Har Halqi</h1><center>
		<div id="ket1">
		Izh-Har Halqi secara bahasa artinya jelas, 
		menurut ilmu tajwid adalah pembacaan nun mati atau tanwin sesuai dengan makhrajnya , 
		dibaca jelas dan terang tanpa dighunnahkan.
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="رَسُوْلٌ اَمِىْنٌ#" value="{{ asset('files/step2/B_nun_mati_tanwin/a_Izh-har/a.wav') }}" data-role="button" data-theme="a">huruf ا pada رَسُوْلٌ اَمِىْنٌ</a>
			<a href="مِنْ عَذَابٍ عَلِيْمٍ#" value="{{ asset('files/step2/B_nun_mati_tanwin/a_Izh-har/ain.wav') }}" data-role="button" data-theme="a">huruf ع pada مِنْ عَذَابٍ عَلِيْمٍ</a>
			<a href="مِنْ غَيْرِكُمْ#" value="{{ asset('files/step2/B_nun_mati_tanwin/a_Izh-har/gha.wav') }}" data-role="button" data-theme="a" >huruf غ pada مِنْ غَيْرِكُمْ</a>
			<a href="عَلِىْمً حَكِيْمًا#" value="{{ asset('files/step2/B_nun_mati_tanwin/a_Izh-har/ha.wav') }}" data-role="button" data-theme="a">huruf ح pada عَلِىْمً حَكِيْمًا</a>
			<a href="لَمْ اَنْهاَ كُماَ#" value="{{ asset('files/step2/B_nun_mati_tanwin/a_Izh-har/hak.wav') }}" data-role="button" data-theme="a">huruf ه pada لَمْ اَنْهاَ كُماَ</a>
			<a href="مَنْ خَشِيَ الرَّ حْمَن#" value="{{ asset('files/step2/B_nun_mati_tanwin/a_Izh-har/kha.wav') }}" data-role="button" data-theme="a">huruf خ pada مَنْ خَشِيَ الرَّ حْمَن</a>
		</div>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
	</div>
	@include('step2.menu')
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