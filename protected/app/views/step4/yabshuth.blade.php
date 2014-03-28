@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Yabshuth - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Yabshuth</h1></center>
			<div id="ket1">
				Yabshuth adalah variasi membaca huruf shad menjadi sin atau sebaliknya huruf sin menjadi shad.<br><br>
			</div>
			<div id="wrapfile">
			<div id="ket1">
				<h4>Shad dibaca shad, contoh ayat :</h4>
				<a href="لَسْتَ عَلَيْهِمْ بِمُصَيْطِرٍ#" value="{{ asset('files/step4/H_yabsuth/yabsuth_shad.wav') }}" data-role="button" data-theme="a">لَسْتَ عَلَيْهِمْ بِمُصَيْطِرٍ</a><br>
				<h4>Sin dibaca sin, contoh ayat :</h4>
				<a href="اَللهُ يَبْسُطُ الرِّزْقَ لِمَنْ يَشَآءُ وَيَقْدِرُ#" value="{{ asset('files/step4/H_yabsuth/yabsuth_sin.wav') }}" data-role="button" data-theme="a">اَللهُ يَبْسُطُ الرِّزْقَ لِمَنْ يَشَآءُ وَيَقْدِرُ</a>
				<a href="اِنَّ رَبَّكَ يَبْسُطُ الرِّزْقَ لِمَنْ يَّشَآءُ وَيَقْدِرُ#" value="{{ asset('files/step4/H_yabsuth/yabsuth_sin2.wav') }}" data-role="button" data-theme="a">اِنَّ رَبَّكَ يَبْسُطُ الرِّزْقَ لِمَنْ يَّشَآءُ وَيَقْدِرُ</a><br>
				<h4>Shad boleh dibaca sin, contoh ayat :</h4>
				<a href="اَمْ عِنْدَ هُمْ خَزَآءِنُ رَبِّكَ اَمْ هُمُ الْمُصَۜيْطِرُوْنٍ#" value="{{ asset('files/step4/H_yabsuth/yabsuth_sin3.wav') }}" data-role="button" data-theme="a">اَمْ عِنْدَ هُمْ خَزَآءِنُ رَبِّكَ اَمْ هُمُ الْمُصَۜيْطِرُوْنٍ</a>
			</div>
			</div>
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