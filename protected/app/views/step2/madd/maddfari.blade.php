@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Madd - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Madd)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Mad Far’i</h1></center>
		<div id="ket1"><h4>
		Mad Far’i yaitu kebalikan dari Mad Ashli, yaitu mad yang dipengaruhi oleh sebab Hamzah dan Sukun. Kadar panjang Mad far’i cukup beragam, yaitu 2, 4, 5 dan 6 Harakat
		</h4></div><br>
		<div id="wrapfile">
			<div id="ket1">Mad Wajib Muttashil yaitu mad yang bertemu dengan Hamzah dalam satu kata. Mad ini dibaca panjang 4 atau 5 Harakat ketika washal, dan dibaca panjang 4, 5 atau 6 harakat ketika waqaf. contoh lafadznya: </div>
				<a href="وَأُوْلٓئِكَ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Wajib_muttashil1.wav') }}" data-role="button" data-theme="a">وَأُوْلٓئِكَ</a>
				<a href="كُنَّاغَآءِبِيْنَ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Wajib_muttashil2.wav') }}"data-role="button" data-theme="a">كُنَّاغَآءِبِيْنَ</a><br>
			<div id="ket1">Mad Jaiz Munfashil yaitu mad yang bertemu dengan Hamzah dalam kata yang terpisah. Mad ini dibaca panjang 4 atau 5 harakat ketika washal, dan dibaca panjang 2 harakat ketika waqaf. contoh lafadznya: </div>
				<a href="وَمَآأَدْرٰكَ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Jaiz_munfashil1.wav') }}" data-role="button" data-theme="a">وَمَآأَدْرٰكَ</a>
				<a href="لٓأَعْبُدٌ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Jaiz_munfashil2.wav') }}"data-role="button" data-theme="a">لٓأَعْبُدٌ</a><br>
			<div id="ket1">Mad Shilah Thawilah yaitu ha dhamir yang bertemu dengan hamzah dalam kata yang terpisah. Mad ini dibaca panjang 4 atau 5 harakat ketika washal, dan berubah menjadi mati ketika waqaf. contoh lafadznya: </div>
				<a href="مَالَهُ~,أَخْلَدَهُ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Silah_thawilah1.wav') }}" data-role="button" data-theme="a">مَالَهُ~,أَخْلَدَهُ</a>
				<a href="لَمْ يَرَهُ~,أَحَدٌ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Silah_thawilah2.wav') }}"data-role="button" data-theme="a">لَمْ يَرَهُ~,أَحَدٌ</a><br>
			<div id="ket1">Mad Farqi yaitu mad badal yang bertemu dengan Tasydid. contoh lafadznya: </div>
				<a href="قُلْ ءَآللهُ اَذِنَ لَكُمْ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mad_farqi1.wav') }}" data-role="button" data-theme="a">قُلْ ءَآللهُ اَذِنَ لَكُمْ</a>
				<a href="قُلْ ءَآلذَّ كَرَيْنِ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mad_farqi2.wav') }}" data-role="button" data-theme="a">قُلْ ءَآلذَّ كَرَيْنِ</a><br>
			<div id="ket1">Mad Lazim Mukhaffaf Kalimi yaitu mad yang bertemu dengan sukun yang terjadi dalam rangkaian kata. contoh lafadznya: </div>
				<a href="َآلْئَنَ وَقَدْعَصَيْتَ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mukhaffaf_kalimi1.wav') }}" data-role="button" data-theme="a">َآلْئَنَ وَقَدْعَصَيْتَ</a><br>
			<div id="ket1">Mad Lazim Mutsaqqal Kalimi yaitu mad yang bertemu dengan tasydid yang terjadi dalam rangkaian kata. contoh lafadznya: </div>
				<a href="وَلَاالضَّآليْنَ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mutsaqqal_kalimi.wav') }}" data-role="button" data-theme="a">وَلَاالضَّآليْنَ</a><br>
			<div id="ket1">Mad Mukhaffaf Harfi yaitu mad yang bertemu dengan sukun yang terjadi dalam rangkaian huruf muqatha’ah. contoh lafadznya: </div>
				<a href="نٓ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mukhaffaf_harfi1.wav') }}" data-role="button" data-theme="a">نٓ</a>
				<a href="قٓ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mukhaffaf_harfi2.wav') }}" data-role="button" data-theme="a">قٓ</a><br>
			<div id="ket1">Mad Lazim Mutsaqqal Harfi yaitu mad yang bertemu dengan tasydid yang terjdi dalam rangkaian huruf muqatha’ah. contoh lafadznya: </div>
				<a href="الٓمّ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mutsaqqal_harfi1.wav') }}" data-role="button" data-theme="a">الٓمّ</a>
				<a href="طٰسٓم#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mutsaqqal_harfi2.wav') }}" data-role="button" data-theme="a">طٰسٓم</a><br>
			<div id="ket1">Mad ‘Aridh Lissukun yairu mad yang bertemu denganhuruf yang disukunkan karena berwaqaf. contoh lafadznya: </div>
				<a href="وَلِلْكٰفِرِيْنَ عَذَابٌ أَلِيْمٌ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Aridh_issukun1.wav') }}" data-role="button" data-theme="a">وَلِلْكٰفِرِيْنَ عَذَابٌ أَلِيْمٌ</a> 
				<a href="الْحَمْدُلِلهِ رَبِّ الَعٰلَمِيْنَ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Aridh_lissukun2.wav') }}" data-role="button" data-theme="a">الْحَمْدُلِلهِ رَبِّ الَعٰلَمِيْنَ</a><br>
			<div id="ket1">Mad Liin yaitu mad yang terjadi ketika berwaqaf pada huruf yang didahului oleh huruf liin bertemu dengan huruf yang disukunkan karena berwaqaf. contoh lafadznya: </div>
				<a href="لِإِيْلٰفِ قُرَيْشٍ#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mad_liin1.wav') }}" data-role="button" data-theme="a">لِإِيْلٰفِ قُرَيْشٍ</a>
				<a href="يُؤْ مِنُوْنَ بِاْلغَيْب#" value="{{ asset('files/step2/J_Madd/b_Mad_Fari/Mad_liin2.wav') }}" data-role="button" data-theme="a">يُؤْ مِنُوْنَ بِاْلغَيْب</a><br>
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