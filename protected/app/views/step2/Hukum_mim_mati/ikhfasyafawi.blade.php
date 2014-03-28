@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Mim Mati - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>		
		<span><b>Tahap II <br>(Hukum Mim Mati)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Ikhfa Syafawi</h1></center>
		<div id="ket1">
		Ikhfa Syafawi, ikhfa berarti samar dan syafawi berarti bibir. 
		Ikhfa syafawi yaitu apabila mim mati bertemu dengan ba, cara pengucapannya yakni mim tampak samar disertai dengan ghunnah,
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="فَبَشِّرْ هُمْ بِعَذَابٍ أَلِيْمٍ#" value="{{ asset('files/step2/C_Hukum_mim_mati/a_Ikhfa_Syafawi/contoh1.wav') }}" data-role="button" data-theme="a">فَبَشِّرْ هُمْ بِعَذَابٍ أَلِيْمٍ</a>
			<a href="عَلَيْهِمْ بِوَكيْلٍ#" value="{{ asset('files/step2/C_Hukum_mim_mati/a_Ikhfa_Syafawi/contoh2.wav') }}" data-role="button" data-theme="a">عَلَيْهِمْ بِوَكيْلٍ</a>
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