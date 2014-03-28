@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Qalqalah - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Qalqalah)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Qalqalah Sughra</h1></center>
		<div id="ket1">
		Qalqalah Shughra artinya kecil. Jika huruf qalqalah bertanda sukun asli, maka ia dinamakan qalqalah shughra. 
		Qalqalah shughra terjadi pada dua kondisi, yaitu apabila huruf qalqalah bersukun ashli dan bersukun ditengah kalimat.
		berikut contoh pengucapan nya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="أَبْصَا رِهِمْ#" value="{{ asset('files/step2/I_Qalqalah/a_Qalqalah_Shughra/sughra1.wav') }}" data-role="button" data-theme="a">أَبْصَا رِهِمْ</a>
			<a href="أَجْرٌ عَظِيْمٌ#" value="{{ asset('files/step2/I_Qalqalah/a_Qalqalah_Shughra/sughra2.wav') }}" data-role="button" data-theme="a">أَجْرٌ عَظِيْمٌ</a>
			<a href="أَدْخُلُوْهَ#" value="{{ asset('files/step2/I_Qalqalah/a_Qalqalah_Shughra/sughra3.wav') }}" data-role="button" data-theme="a">أَدْخُلُوْهَ</a>
			<a href="اَطْعَمَهُم#" value="{{ asset('files/step2/I_Qalqalah/a_Qalqalah_Shughra/sughra4.wav') }}" data-role="button" data-theme="a">اَطْعَمَهُم</a>
			<a href="مِنْ أَقْطَار#" value="{{ asset('files/step2/I_Qalqalah/a_Qalqalah_Shughra/sughra5.wav') }}" data-role="button" data-theme="a">مِنْ أَقْطَار</a>
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