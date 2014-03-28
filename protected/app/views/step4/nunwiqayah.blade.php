@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Nun Wiqayah - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Nun Wiqayah</h1></center>
			<div id="ket1">
				Nun Wiqayah (nun penjaga). Nun berharakat kasrah yang harus dibaca di antara tanwin dan hamzah washal agar tanwin tetap terjaga. 
				Menyambung tanwin antara hamzah washal adalah tidak mungkin sebab keduanya huruf mati. Nun wiqayah ini tidak tertulis didalam mushaf. Contoh lafadznya :<br>
			</div>
			<div id="wrapfile">
				<a href="خَيْرٌ ۚاۘهْبِطُوْا#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah1.wav') }}" data-role="button" data-theme="a">خَيْرٌ ۚاۘهْبِطُوْا</a>
				<a href="خَيْرً اۘلْوَصِيَّةُ#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah2.wav') }}" data-role="button" data-theme="a">خَيْرً اۘلْوَصِيَّةُ</a>
				<a href="ثَلٰثَةٌ ۚ اۘنْتَهُوْا#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah3.wav') }}" data-role="button" data-theme="a">ثَلٰثَةٌ ۚ اۘنْتَهُوْا</a>
				<a href="يَوْمَئِذٍ اۘلْحَقُّ#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah4.wav') }}" data-role="button" data-theme="a">يَوْمَئِذٍ اۘلْحَقُّ</a>
				<a href="بِرَحْمَةٍۚ اۘدْخُلُواْالْجَنَّةَ#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah5.wav') }}" data-role="button" data-theme="a">بِرَحْمَةٍۚ اۘدْخُلُواْالْجَنَّةَ</a>
				<a href="جَمِيْعًا اۘلَّذِى لَهُ#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah6.wav') }}" data-role="button" data-theme="a">جَمِيْعًا اۘلَّذِى لَهُ</a>
				<a href="قَوْمًاۙ اۘللهُ#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah7.wav') }}" data-role="button" data-theme="a">قَوْمًاۙ اۘللهُ</a>
				<a href="مَثَلً اۘلْقَوْمُ الَّذِيْنَ#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah8.wav') }}" data-role="button" data-theme="a">مَثَلً اۘلْقَوْمُ الَّذِيْنَ</a>
				<a href="وَقَا لَتِ اۘلْيَهُوْدُ عُزَيْرٌ اۘبْنُاللهِ#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah9.wav') }}" data-role="button" data-theme="a">وَقَا لَتِ اۘلْيَهُوْدُ عُزَيْرٌ اۘبْنُاللهِ</a>
				<a href="وَأَمْوٰتٌ اۘقْتَرَفْتُمُوْهَا#" value="{{ asset('files/step4/G_Nun_Wiqayah/Nun_Wiqayah10.wav') }}" data-role="button" data-theme="a">وَأَمْوٰتٌ اۘقْتَرَفْتُمُوْهَا</a>
			</div>
		</ol>
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