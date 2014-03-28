@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Lam Jalallah - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>		
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Lam Jalallah)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Tafkhim</h1></center>
		<div id="ket1">
		Tafkhim artinya tebal atau berat. Membaca huruf lam dengan bunyi tebal atau berat seperti bunyi “LAH dan LOH”. 
		Bunyi tafkhim terjadi apabila sebelum huruf lam jalalah terdapat harakat fathah atau dhammah, berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="اَعَدَّالله#" value="{{ asset('files/step2/G_Lam_Jalallah/a_Tafkhim/tafkhim1.wav') }}" data-role="button" data-theme="a">اَعَدَّالله</a>
			<a href="نَصْرُالله#" value="{{ asset('files/step2/G_Lam_Jalallah/a_Tafkhim/tafkhim2.wav') }}" data-role="button" data-theme="a">نَصْرُالله</a>
			<a href="يُرِيْدُالله#" value="{{ asset('files/step2/G_Lam_Jalallah/a_Tafkhim/tafkhim3.wav') }}" data-role="button" data-theme="a">يُرِيْدُالله</a>
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