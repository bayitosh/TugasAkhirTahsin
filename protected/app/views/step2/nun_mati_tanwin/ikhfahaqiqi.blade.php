@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Nun Mati dan Tanwin - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Nun Mati dan Tanwin)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Ikhfa Haqiqi</h1></center>
		<div id="ket1">
		Ikhfa haqiqi secara bahasa artinya samar atau tertutup. 
		Sedangkan menurut istilah  adalah mengucapkan huruf dengan sifat antara izh-har dan idgham, 
		tanpa tasydid dan dengan menjaga ghunnah pada huruf yang diikhfakan,
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="وَقَدْ خاَبَ مَنْ دَسَّهاَ#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/da.wav') }}" data-role="button" data-theme="a">huruf د pada وَقَدْ خاَبَ مَنْ دَسَّهاَ</a>
			<a href="وَمَنْ ضَلَّ فَقَدْخُسِرَ#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/dla.wav') }}" data-role="button" data-theme="a">huruf ض pada وَمَنْ ضَلَّ فَقَدْخُسِرَ </a>
			<a href="أَأَ نْذَرْتَهُمْ #" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/dza.wav') }}" data-role="button" data-theme="a" >huruf ذ pada أَأَ نْذَرْتَهُمْ</a>
			<a href="اَلَمْ يَجِدْكَ يَتِيْمًافَأٰوٰى #" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/fa.wav') }}" data-role="button" data-theme="a">huruf ف pada اَلَمْ يَجِدْكَ يَتِيْمًافَأٰوٰى</a>
			<a href="وَاْلإِنْجِيْل#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/ja.wav') }}" data-role="button" data-theme="a">huruf ج pada وَاْلإِنْجِيْل</a>
			<a href="رَسُوْلٌ كَرِيْمٍ#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/ka.wav') }}" data-role="button" data-theme="a">huruf ك pada رَسُوْلٌ كَرِيْمٍ</a>
			<a href="مِنْ قَبْلِكَ #" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/qa.wav') }}" data-role="button" data-theme="a" >huruf ق pada مِنْ قَبْلِكَ </a>
			<a href="قَوْلاًسَدِيْدا#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/sa.wav') }}" data-role="button" data-theme="a">huruf س pada قَوْلاًسَدِيْدا</a>
			<a href="عَمَلاً صَالِحًا#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/sha.wav') }}" data-role="button" data-theme="a">huruf ص pada عَمَلاً صَالِحًا</a>
			<a href="شَيْءٍشَهِيْد#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/sya.wav') }}" data-role="button" data-theme="a">huruf ش pada شَيْءٍشَهِيْد</a>
			<a href="جَنّٰتٍ تَجْرِي#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/ta.wav') }}" data-role="button" data-theme="a" >huruf ت pada جَنّٰتٍ تَجْرِي</a>
			<a href="لَيْلاًطَوِيْلا#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/tha.wav') }}" data-role="button" data-theme="a">huruf ط pada لَيْلاًطَوِيْلا</a>
			<a href="مَنْ ثَقُلَتْ مَوَازِيْنُهُ#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/tsa.wav') }}" data-role="button" data-theme="a">huruf ث pada مَنْ ثَقُلَتْ مَوَازِيْنُهُ</a>
			<a href="رَبِّ أَنْزِ لْنِيْ#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/za.wav') }}" data-role="button" data-theme="a">huruf ز pada رَبِّ أَنْزِ لْنِيْ</a>
			<a href="يَنْظُرُاْلمَرْئٌ#" value="{{ asset('files/step2/B_nun_mati_tanwin/e_Ikhfa/zha.wav') }}" data-role="button" data-theme="a">huruf ظ pada يَنْظُرُاْلمَرْئٌ</a>
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