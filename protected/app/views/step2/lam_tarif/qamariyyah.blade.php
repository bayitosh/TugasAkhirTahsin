@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Lam Ta’rif - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>		
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Lam Ta’rif)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Alif-lam Qamariyyah</h1></center>
		<div id="ket1">
		Alif-lam Qamariyyah disebut dengan izh-har qamariyyah yang terjadi apabila alif-lam bertemu dengan salah satu huruf qamariyyah. 
		Dalam penulisannya, huruf alif-lam qamariyyah memakai tanda sukun pada huruf lam sebagai tanda bahwa huruf tersebut harus dibaca jelas dan terang,
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="الْأَحَد#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/a.wav') }}" data-role="button" data-theme="a">الْأَحَد</a>
			<a href="الْعَلِيْمُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/ain.wav') }}" data-role="button" data-theme="a">الْعَلِيْمُ</a>
			<a href="الْبَصِيْر#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/ba.wav') }}" data-role="button" data-theme="a">الْبَصِيْر</a>
			<a href="الْفَتَّاحُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/fa.wav') }}" data-role="button" data-theme="a">الْفَتَّاحُ</a>
			<a href="الْغَفُوْرُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/gha.wav') }}" data-role="button" data-theme="a">الْغَفُوْرُ</a>
			<a href="الْحَلِيْم#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/ha.wav') }}" data-role="button" data-theme="a">الْحَلِيْم</a>
			<a href="الْهاَدِي#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/hak.wav') }}" data-role="button" data-theme="a" >الْهاَدِي</a>
			<a href="الْجَلِيْل#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/ja.wav') }}" data-role="button" data-theme="a">الْجَلِيْل</a>
			<a href="الْكَرِيْم#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/ka.wav') }}" data-role="button" data-theme="a">الْكَرِيْم</a>
			<a href="الْخَبِيْر#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/kha.wav') }}" data-role="button" data-theme="a">الْخَبِيْر</a>
			<a href="الْمُؤْ مِنُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/ma.wav') }}" data-role="button" data-theme="a">الْمُؤْ مِنُ</a>
			<a href="الْقدِيْرُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/qa.wav') }}" data-role="button" data-theme="a">الْقدِيْرُ</a>
			<a href="الْوَدُوْد#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/wa.wav') }}" data-role="button" data-theme="a">الْوَدُوْد</a>
			<a href="الْيَوْم#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/qamariyyah/ya.wav') }}" data-role="button" data-theme="a">الْيَوْم</a>
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