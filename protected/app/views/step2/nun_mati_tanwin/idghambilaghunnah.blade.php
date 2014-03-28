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
		<center><h1 style="font-size:25px;">Idgham bila Ghunnah</h1></center>
		<div id="ket1">
		Idgham bila Ghunnah artinya tanpa memakai ghunnah (dengung). 
		Dalam pengertian nun sukun atau tanwin adalah apabila nun sukun atau tanwin bertemu dengan salah satu huruf lam dan ra.
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="وَيْل لِّكُلِّ هُمَزَةٍلُّمَزَةٍ#" value="{{ asset('files/step2/B_nun_mati_tanwin/c_Idgham_Bilaghunnah/la.wav') }}" data-role="button" data-theme="a">huruf ل pada وَيْل لِّكُلِّ هُمَزَةٍلُّمَزَةٍ</a>
			<a href=" اِلاَّ مَنْ رَّحِمَهُ ا للهُ #" value="{{ asset('files/step2/B_nun_mati_tanwin/c_Idgham_Bilaghunnah/ro.wav') }}" data-role="button" data-theme="a">huruf ر pada  اِلاَّ مَنْ رَّحِمَهُ ا للهُ </a>
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