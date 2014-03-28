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
		<center><h1 style="font-size:25px;">Iqlab</h1></center>
		<div id="ket1">
		Iqlab menurut bahasa artinya merubah. 
		Sedangkan menurut istilah adalah menjadikan suatu huruf kepada makhraj huruf lain seraya tetap menjaga ghunnah 
		(sengau pada huruf yang ditukar). Pengertian menurut nun sukun tanwin adalah pengucapan nun mati atau tanwin  
		bertemu huruf ba’ yang dirubah menjadi mim disertai dengan ghunnah tapi hanya dalam bentuk suara bukan tulisan.
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="اِذِانْبَعَثَ اَشْقٰهَاَ#" value="{{ asset('files/step2/B_nun_mati_tanwin/d_Iqlab/Iqlab_2.wav') }}" data-role="button" data-theme="a">huruf  ٌ pada اِذِانْبَعَثَ اَشْقٰهَاَ</a>
			<a href="عَلِيْمٌ بِذَاتِ الصُّدُوْر#" value="{{ asset('files/step2/B_nun_mati_tanwin/d_Iqlab/Iqlab.wav') }}" data-role="button" data-theme="a">huruf  نْ  pada عَلِيْمٌ بِذَاتِ الصُّدُوْر</a>
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