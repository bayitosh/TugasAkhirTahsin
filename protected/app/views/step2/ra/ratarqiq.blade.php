@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Ra' - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Ra')</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Ra’ dibaca tipis (tarqiq)</h1></center><br>
	<div id="wrapfile">
		<div id="ket1">Ra’ berharakat kasrah, contoh lafadznya:</div> 
			<a href="مَرِ يْضًا#" value="{{ asset('files/step2/H_Hukum_Ra/a_Ra_tarqiq/tarqiq1.wav') }}" data-role="button" data-theme="a">مَرِ يْضًا</a>
		<br>
		<div id="ket1">Ra’ berharakat sukun yang didahului oleh huruf berharakat kasrah dan bersambung dalam satu kalimat. contoh lafadznya:</div>
			<a href="مِرْ فَقًا#" value="{{ asset('files/step2/H_Hukum_Ra/a_Ra_tarqiq/tarqiq2.wav') }}" data-role="button" data-theme="a">مِرْ فَقًا</a>
			<a href="فِرْ عَوْ نَ#" value="{{ asset('files/step2/H_Hukum_Ra/a_Ra_tarqiq/tarqiq3.wav') }}" data-role="button" data-theme="a">فِرْ عَوْ نَ</a>
		<br>
		<div id="ket1">Ra’ berharakat sukun yang didahului oleh ya’ sukun, contoh lafadznya:</div>
			<a href="مِنْ خَيْرِ#" value="{{ asset('files/step2/H_Hukum_Ra/a_Ra_tarqiq/tarqiq4.wav') }}" data-role="button" data-theme="a">مِنْ خَيْرِ</a>
			<a href="شَيْ ءٍ قَدِ يْرُ#" value="{{ asset('files/step2/H_Hukum_Ra/a_Ra_tarqiq/tarqiq5.wav') }}" data-role="button" data-theme="a">شَيْ ءٍ قَدِ يْرُ</a>
		<br>
		<div id="ket1">Ra’ berharakat sukun yang didahului oleh huruf sukun atau huruf-huruf selain huruf isti’la(ق غ ظ ط ض ص خ) dan huruf-huruf sukun tersebut sebelumnya terdapat huruf yang berharakat kasrah, contoh lafadznya: </div> 
			<a href="الشِعْرٌ#" value="{{ asset('files/step2/H_Hukum_Ra/a_Ra_tarqiq/tarqiq6.wav') }}" data-role="button" data-theme="a">الشِعْرٌ</a>
		<br>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
	</div>
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