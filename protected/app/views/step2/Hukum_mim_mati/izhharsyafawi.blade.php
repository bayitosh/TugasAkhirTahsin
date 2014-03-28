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
		<center><h1 style="font-size:25px;">Izh-har Syafawi</h1></center>
		<div id="ket1">
		Izh-har Syafawi, izh-har artinya jelas atau terang sedangkan syafawi artinya bibir. 
		Apabila mim mati bertemu dengan selain huruf mim dan ba’. Cara pengucapannya adalah mim harus tampak jelas tanpa ghunnah.
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="فَلَهُمْ أَجْرٌ غَيْرُمَمْنُوْن#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/a.wav') }}" data-role="button" data-theme="a">huruf ا pada فَلَهُمْ أَجْرٌ غَيْرُمَمْنُوْن</a>
			<a href="قُلْ لَوْأَنْتُمْ تَمْلِكُوْنَ #" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/ta.wav') }}" data-role="button" data-theme="a">huruf ت padaقُلْ لَوْأَنْتُمْ تَمْلِكُوْنَ</a>
			<a href="عَالِيَهُمْ ثِيَابُ سُنْدُسٍ #" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/tsa.wav') }}" data-role="button" data-theme="a">huruf ث pada عَالِيَهُمْ ثِيَابُ سُنْدُسٍ</a>
			<a href="أَنَّ لَهُمْ جَنّٰتٍ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/ja.wav') }}" data-role="button" data-theme="a">huruf ج pada أَنَّ لَهُمْ جَنّٰتٍ</a>
			<a href="لَمَعَهُمْ حَبِطَتْ أعْمَا لَهُمْ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/ha.wav') }}" data-role="button" data-theme="a">huruf ح pada لَمَعَهُمْ حَبِطَتْ أعْمَا لَهُمْ</a>
			<a href="أُوْلٓئِكَ هُمْ خَيْرُاْلبَرِيَّةِ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/kha.wav') }}" data-role="button" data-theme="a">huruf خ pada أُوْلٓئِكَ هُمْ خَيْرُاْلبَرِيَّةِ</a>
			<a href="وَاَنْتُمْ دَا خِرُوْنَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/da.wav') }}" data-role="button" data-theme="a" >huruf د pada وَاَنْتُمْ دَا خِرُوْنَ</a>
			<a href="وَاتَّبّعّتْهُمْ ذُرِّيَّتُهُم#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/dza.wav') }}" data-role="button" data-theme="a">huruf ذ pada وَاتَّبّعّتْهُمْ ذُرِّيَّتُهُم</a>
			<a href="جآءَكُمْ رَسُوْلُوْنَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/ra.wav') }}" data-role="button" data-theme="a">huruf ر pada جآءَكُمْ رَسُوْلُوْنَ</a>
			<a href="أَمْ زَاغَتْ عَنْهُمْ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/za.wav') }}" data-role="button" data-theme="a">huruf ز pada أَمْ زَاغَتْ عَنْهُمْ</a>
			<a href="وَيَهْدِيَكُمْ سُنَنٌ الَّذِ يْنَ مِنْ قَبْلِكُمْ #" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/sa.wav') }}" data-role="button" data-theme="a">huruf س pada وَيَهْدِيَكُمْ سُنَنٌ الَّذِ يْنَ مِنْ قَبْلِكُمْ</a>
			<a href="وَأَمْرُهُمْ شُوَرٰى#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/sya.wav') }}" data-role="button" data-theme="a">huruf ش pada وَأَمْرُهُمْ شُوَرٰى</a>
			<a href="وَلَهَدَ يْناَ هُمْ صِرَاطاًمُّسْتَقِيْمًا#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/sha.wav') }}" data-role="button" data-theme="a">huruf ص pada وَلَهَدَ يْناَ هُمْ صِرَاطاًمُّسْتَقِيْمًا</a>
			<a href="فِيْكُمْ ضَعْفًا#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/dla.wav') }}" data-role="button" data-theme="a">huruf ض pada فِيْكُمْ ضَعْفًا</a>
			<a href="لَيْسَ لَهُمْ طَعَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/tha.wav') }}" data-role="button" data-theme="a" >huruf ط pada لَيْسَ لَهُمْ طَعَامٌ</a>
			<a href="فَمِنْ هُمْ ظًالِمٌ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/zha.wav') }}" data-role="button" data-theme="a">huruf ظ pada فَمِنْ هُمْ ظًالِمٌ</a>
			<a href="وَلآاَنْتُمْ عَبِدُوْنَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/ain.wav') }}" data-role="button" data-theme="a">huruf ع pada وَلآاَنْتُمْ عَبِدُوْنَ</a>
			<a href="عَلَيْهِمْ غَيْرِ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/gha.wav') }}" data-role="button" data-theme="a">huruf غ pada عَلَيْهِمْ غَيْرِ</a>
			<a href="كُنْتُمْ فِيْهِ تَخْتَلِفُوْنَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/fa.wav') }}" data-role="button" data-theme="a">huruf ف pada كُنْتُمْ فِيْهِ تَخْتَلِفُوْنَ</a>
			<a href="بَلْ هُمْ قَوْمٌ طاَغُوْنَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/qa.wav') }}" data-role="button" data-theme="a" >huruf ق pada بَلْ هُمْ قَوْمٌ طاَغُوْنَ</a>
			<a href="فَجَعَلَهٌمْ كَعَصْفٍ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/ka.wav') }}" data-role="button" data-theme="a">huruf ك pada فَجَعَلَهٌمْ كَعَصْفٍ</a>
			<a href="فَإِنَّ هُمْ لَمُحْضَرٌوْنَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/la.wav') }}" data-role="button" data-theme="a">huruf ل pada فَإِنَّ هُمْ لَمُحْضَرٌوْنَ</a>
			<a href="أَلَمْ نَشْرَحْ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/na.wav') }}" data-role="button" data-theme="a">huruf ن pada أَلَمْ نَشْرَحْ</a>
			<a href="۞عَلَيْهِمْ وَلاَالضّآلِّيْنَ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/wa.wav') }}" data-role="button" data-theme="a">huruf و pada  ۞عَلَيْهِمْ وَلاَالضّآلِّيْن</a>
			<a href="أَمْهِلْهُم#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/hak.wav') }}" data-role="button" data-theme="a" >huruf ه pada أَمْهِلْهُم</a>
			<a href="لَمْ يَلِدْ#" value="{{ asset('files/step2/C_Hukum_mim_mati/c_Izh-har_syafawi/ya.wav') }}" data-role="button" data-theme="a">huruf ي pada لَمْ يَلِدْ</a>
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