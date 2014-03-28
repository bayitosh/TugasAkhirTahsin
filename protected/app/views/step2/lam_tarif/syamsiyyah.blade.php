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
		<center><h1 style="font-size:25px;">Alif-lam Syamsiyyah</h1></center>
		<div id="ket1">
		Alif-lam Syamsiyyah  terjadi apabila alif-lam bertemu dengan salah satu huruf syamsiyyah. 
		Suara alif-lam dimasukkan kedalam huruf syamsiyyah yang ada di hadapannya. 
		Akibatnya suara alif-lam-pun menjadi hilang karena ditukar dengan huruf syamsiyyah,
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="الدَّاعيْ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/da.wav') }}" data-role="button" data-theme="a">الدَّاعيْ</a>
			<a href="الضُّحٰى#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/dla.wav') }}" data-role="button" data-theme="a">الضُّحٰى</a>
			<a href="الذِّكْرُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/dza.wav') }}" data-role="button" data-theme="a">الذِّكْرُ</a>
			<a href="الَّيْلُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/la.wav') }}" data-role="button" data-theme="a">الَّيْلُ</a>
			<a href="النَّعِيْم#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/na.wav') }}" data-role="button" data-theme="a">النَّعِيْم</a>
			<a href="الرَّحِيْم#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/ra.wav') }}" data-role="button" data-theme="a">الرَّحِيْم</a>
			<a href="السَّمِيْع#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/sa.wav') }}" data-role="button" data-theme="a" >السَّمِيْع</a>
			<a href="الصَّبُوْرُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/sha.wav') }}" data-role="button" data-theme="a">الصَّبُوْرُ</a>
			<a href="الشَّكُوْرُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/sya.wav') }}" data-role="button" data-theme="a">الشَّكُوْرُ</a>
			<a href="التَّوَابُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/ta.wav') }}" data-role="button" data-theme="a">التَّوَابُ</a>
			<a href="الطَّامَّة#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/tha.wav') }}" data-role="button" data-theme="a">الطَّامَّة</a>
			<a href="الثَّاقِبُ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/tsa.wav') }}" data-role="button" data-theme="a">الثَّاقِبُ</a>
			<a href="الزُّوْر#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/za.wav') }}" data-role="button" data-theme="a">الزُّوْر</a>
			<a href="الظِّلّ#" value="{{ asset('files/step2/F_Hukum_Lam_tarif/syamsiyyah/zha.wav') }}" data-role="button" data-theme="a">الظِّلّ</a>
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