@extends('layout.main')

@section('title')
	Tahap Kedua > Ghunnah Musyaddadah - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Mim dan Nun Bertasydid)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center>{{ HTML::image('img/basmallah.png') }}</center>
		<center><h1 style="font-size:25px;">Ghunnah Musyaddadah</h1></center>
		<div id="ket1">
		Dalam ilmu tajwid, hukum mim dan nun yang bertasydid dikenal dengan istilah ghunnah musyaddadah. 
		Ghunnah menurut bahasa artinya dengung, musyaddadah artinya bertasydid. 
		Ghunnah menurut istilah ialah suara yang jelas yang keluar dari pangkal hidung dengan tidak menggunakan lidah pada waktu mengucapkannya,
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="عَمّ يَتَسَآءَ لُوْنَ#" value="{{ asset('files/step2/D_Mim_nun_bertasydid/Mim_tasydid.wav') }}" data-role="button" data-theme="a">huruf مّ pada عَمّ يَتَسَآءَ لُوْنَ</a>
			<a href="قُلْ أَعُوْذُ بِرَبِّ النَّاسِ#" value="{{ asset('files/step2/D_Mim_nun_bertasydid/Nun_tasydid.wav') }}" data-role="button" data-theme="a">huruf نّ pada قُلْ أَعُوْذُ بِرَبِّ النَّاسِ</a>
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