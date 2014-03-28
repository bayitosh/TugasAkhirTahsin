@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Shifrul Musthatilul Qur’an - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Shifrul Musthatilul Qur’an</h1></center>
			<div id="ket1">
				Shifrul Musthatilul Qur’an adalah bulatan lonjong tegak yang biasanya dletakkan di atas madd. Madd tersebut tidak dibaca panjang ketika washal, tetapi dibaca panjang ketika waqaf. Contoh lafadznya :<br>
			</div>
			<div id="wrapfile">
				<!--<a href="خَيْرٌ ۚاۘهْبِطُوْا#" value="{{-- asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul1.wav') --}}" data-role="button" data-theme="a">خَيْرٌ ۚاۘهْبِطُوْا</a>-->
				<a href="لٰكِنَّاْهُوَا للهُ رَبِّى#" value="{{ asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul2.wav') }}" data-role="button" data-theme="a">لٰكِنَّاْهُوَا للهُ رَبِّى</a>
				<a href="وَتَظُنَّوْنَ بِاللهِ الظُّنُوْناْ هُنَا لِكَ ابْتُلِيَ الْمُؤْمِنُوْنَ#" value="{{ asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul3.wav') }}" data-role="button" data-theme="a">وَتَظُنَّوْنَ بِاللهِ الظُّنُوْناْ هُنَا لِكَ ابْتُلِيَ الْمُؤْمِنُوْنَ</a>
				<a href="وَاَطَعْناالرَّسُوْلَاْ وَقَالُوْ رَبَّنَآ#" value="{{ asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul4.wav') }}" data-role="button" data-theme="a">وَاَطَعْناالرَّسُوْلَاْ وَقَالُوْ رَبَّنَآ</a>
				<a href="فَأَضَلُّوْنَا السَّبِيْلَاْ رَبَّنآ اٰتِهِمْ#" value="{{ asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul5.wav') }}" data-role="button" data-theme="a">فَأَضَلُّوْنَا السَّبِيْلَاْ رَبَّنآ اٰتِهِمْ</a>
				<a href="اِنّآ اَعْتَدْ نَالِلْكٰفِرِيْنَ سَلٰسِلَاْ وَاَغْلٰلاًوَّسَعِيْرًا#" value="{{ asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul6.wav') }}" data-role="button" data-theme="a">اِنّآ اَعْتَدْ نَالِلْكٰفِرِيْنَ سَلٰسِلَاْ وَاَغْلٰلاًوَّسَعِيْرًا</a>
				<a href="وَاَكْوَابٍ كَانَتْ قَوَارِيرَاْ قَوَارِيْرَاْ مِنْ فِضَّةٍ#" value="{{ asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul7.wav') }}" data-role="button" data-theme="a">وَاَكْوَابٍ كَانَتْ قَوَارِيرَاْ قَوَارِيْرَاْ مِنْ فِضَّةٍ</a>
				<a href="وَلَآ اَنَاْ عَا بِدٌمَّاعَبدْتُّمْ#" value="{{ asset('files/step4/K_Shifrul_musthatilul/shifrul_mustathilul8.wav') }}" data-role="button" data-theme="a">وَلَآ اَنَاْ عَا بِدٌمَّاعَبدْتُّمْ</a>
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