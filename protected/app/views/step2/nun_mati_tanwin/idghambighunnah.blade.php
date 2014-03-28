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
		<center><h1 style="font-size:25px;">Idgham bi Ghunnah</h1></center>
		<div id="ket1">
		Idgham bi Ghunnah artinya secara bahasa berarti memasukkan. 
		Menurut ilmu tajwid adalah pengucapan nun mati atau tanwin secara lebur ketika bertemu huruf idgham.
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="اِنِّيْ لَكُمْ نَذِيْرٌمُّبِيْنَ#" value="{{ asset('files/step2/B_nun_mati_tanwin/b_Idgham_Bighunnah/Bighunnah_ma.wav') }}" data-role="button" data-theme="a">huruf م pada اِنِّيْ لَكُمْ نَذِيْرٌمُّبِيْنَ</a>
			<a href="عَامِلَتٌ نَّا صِبَةٌ#" value="{{ asset('files/step2/B_nun_mati_tanwin/b_Idgham_Bighunnah/Bighunnah_na.wav') }}" data-role="button" data-theme="a">huruf ن pada عَامِلَتٌ نَّا صِبَةٌ</a>
			<a href="إِلاَّحَمِيْمَا وَّغَسَّاقاَ#" value="{{ asset('files/step2/B_nun_mati_tanwin/b_Idgham_Bighunnah/Bighunnah_wa.wav') }}" data-role="button" data-theme="a" >huruf و pada إِلاَّحَمِيْمَا وَّغَسَّاقاَ</a>
			<a href="وُجُوْهٌ يَّوْمَئِذٍخَاشِعَةٍ#" value="{{ asset('files/step2/B_nun_mati_tanwin/b_Idgham_Bighunnah/ghunnah_ya.wav') }}" data-role="button" data-theme="a">huruf ي pada وُجُوْهٌ يَّوْمَئِذٍخَاشِعَةٍ</a>
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