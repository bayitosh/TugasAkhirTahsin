@extends('layout.main')

@section('title')
	Tahap I (Pengenalan Huruf Hijaiyah) - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a><br>
		<span><b>Tahap I</b></span>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center>{{ HTML::image('img/basmallah.png') }}</center>
		<center><h1 style="font-size:25px;">Lafal Huruf Hijaiyah</h1></center>
		<center><h3 style="font-size:20px;">Berikut contoh pelafalan huruf :</h3></center>
		<div id="wrapfile">
			<a href="ءَا إِيْ أُوْ بَأْ أُوْأً أَ نِ أَأْ نَ مِنَ الْمُؤنِ مَئِيْأً اَنِءً#" value="{{ asset('files/step1/aiu.wav') }}" data-role="button" data-theme="a">ءَا إِيْ أُوْ بَأْ أُوْأً أَ نِ أَأْ نَ مِنَ الْمُؤنِ مَئِيْأً اَنِءً</a>
			<a href="عَاعيْ عُوْ بَعْ عُوْعًا عَنِ عَعْنَ مِنَ الْمُعْنِ مَعِيْعًا عَنِعًا#" value="{{ asset('files/step1/ainu.wav') }}" data-role="button" data-theme="a">عَاعيْ عُوْ بَعْ عُوْعًا عَنِ عَعْنَ مِنَ الْمُعْنِ مَعِيْعًا عَنِعًا</a>
			<a href="بَابِيْ بُوْ بَبْ بُوْ باً بَنِ بَبْنَ مِنَ الْمُبْنِ مَبِيْبًا بَانِبَا#" value="{{ asset('files/step1/babibu.wav') }}" data-role="button" data-theme="a">بَابِيْ بُوْ بَبْ بُوْ باً بَنِ بَبْنَ مِنَ الْمُبْنِ مَبِيْبًا بَانِبَا</a>
			<a href="تَا تِيْ تُوْ بَتْ تُوْ تًا تَنِ تَتْنَ مَنَ الْمُتْنِ مَتِيْتًا تَنِتًا#" value="{{ asset('files/step1/tatitu.wav') }}" data-role="button" data-theme="a">تَا تِيْ تُوْ بَتْ تُوْ تًا تَنِ تَتْنَ مَنَ الْمُتْنِ مَتِيْتًا تَنِتًا</a>
			<a href="ثَا ثِيْ ثُوْ بَثْ ثُوْ ثًا ثَنِ ثَثْنَ مِنَ الْمُثْنِ مَثِيْثًا ثَنِثًا#" value="{{ asset('files/step1/tsatsistsu.wav') }}" data-role="button" data-theme="a">ثَا ثِيْ ثُوْ بَثْ ثُوْ ثًا ثَنِ ثَثْنَ مِنَ الْمُثْنِ مَثِيْثًا ثَنِثًا</a>
			<a href="جَا جِيْ جُوْ بَجْ جُوْ جًاجَنِ جَجْنَ مِنَ الْمُجْنِ مَجِيْجًا جَنِجًا#" value="{{ asset('files/step1/jajiju.wav') }}" data-role="button" data-theme="a">جَا جِيْ جُوْ بَجْ جُوْ جًاجَنِ جَجْنَ مِنَ الْمُجْنِ مَجِيْجًا جَنِجًا</a>
			<a href="حَا حيْ حُوْ بَحْ حُوْحًا حَنِ حَحْنَ مِنَ الْمُحْنِ مَحِيْحًا حَنِحًا#" value="{{ asset('files/step1/hahihu.wav') }}" data-role="button" data-theme="a">حَا حيْ حُوْ بَحْ حُوْحًا حَنِ حَحْنَ مِنَ الْمُحْنِ مَحِيْحًا حَنِحًا</a>
			<a href="خَا خِيْ خُوْ بَخْ خُوْخًا خَنِ خَخْنَ مِنَ الْمُخْنِ مَخِيْخًا خَنِخًا#" value="{{ asset('files/step1/khakhikhu.wav') }}" data-role="button" data-theme="a">خَا خِيْ خُوْ بَخْ خُوْخًا خَنِ خَخْنَ مِنَ الْمُخْنِ مَخِيْخًا خَنِخًا</a>
			<a href="دَا دِيْ دُوْبَدْ دُوْدًادَنِ دَدْ نَ مِنَ الْمُدْنِ مَدِيْدًا دًنِدًا#" value="{{ asset('files/step1/dadidu.wav') }}" data-role="button" data-theme="a">دَا دِيْ دُوْبَدْ دُوْدًادَنِ دَدْ نَ مِنَ الْمُدْنِ مَدِيْدًا دًنِدًا</a>
			<a href="ذَا ذِيْ ذُوْبَذْ ذُوْذًاذَنِ ذَذْ نَ مِنَ الْمُذْنِ مَذِيْذًا ذَنِذًا#" value="{{ asset('files/step1/dzazizu.wav') }}" data-role="button" data-theme="a">ذَا ذِيْ ذُوْبَذْ ذُوْذًاذَنِ ذَذْ نَ مِنَ الْمُذْنِ مَذِيْذًا ذَنِذًا</a>
			<a href="رَارِيْرُوْبَرْرُوْرًارَنِ رَرْنَ مِنَ الْمُرْنِ مَرِيْرًا رَنِرًا#" value="{{ asset('files/step1/rariru.wav') }}" data-role="button" data-theme="a">رَارِيْرُوْبَرْرُوْرًارَنِ رَرْنَ مِنَ الْمُرْنِ مَرِيْرًا رَنِرًا</a>
			<a href="زَازِيْ زُوْ بَزْزُوْزًازَنِ زَزْنَ مِنَ الْمُزْنِ مَزِيْزًا زَنِزًا#" value="{{ asset('files/step1/zazizu.wav') }}" data-role="button" data-theme="a">زَازِيْ زُوْ بَزْزُوْزًازَنِ زَزْنَ مِنَ الْمُزْنِ مَزِيْزًا زَنِزًا</a>
			<a href="سَا سِيْ سُوْ بَسْ سُوْسًا سَنِ سَسْنَ مِنَ الْمُسْنِ مَسِيْسًا سَنِسًا#" value="{{ asset('files/step1/sasisu.wav') }}" data-role="button" data-theme="a">سَا سِيْ سُوْ بَسْ سُوْسًا سَنِ سَسْنَ مِنَ الْمُسْنِ مَسِيْسًا سَنِسًا</a>
			<a href="شَا شِيْ شُوْ بَشْ شُوْشًا شَنِ شَشْنَ مِنَ الْمُشْنِ مَشِيْشًا شًنِشًا#" value="{{ asset('files/step1/syasyisyu.wav') }}" data-role="button" data-theme="a">شَا شِيْ شُوْ بَشْ شُوْشًا شَنِ شَشْنَ مِنَ الْمُشْنِ مَشِيْشًا شًنِشًا</a>
			<a href="صَاصِيْ صُوْ بَصْ صُوْصًا صَنِ صَصْنَ مِنَ الْمُصْنِ مَصِيْصًا صًنِصًا#" value="{{ asset('files/step1/shashishu.wav') }}" data-role="button" data-theme="a">صَاصِيْ صُوْ بَصْ صُوْصًا صَنِ صَصْنَ مِنَ الْمُصْنِ مَصِيْصًا صًنِصًا</a>
			<a href="ضَاضِيْ ضُوْ بَضْ ضُوْضًا ضَنِ ضَضْنَ مِنَ الْمُضْنِ مَضِيْضًا ضَنِضًا#" value="{{ asset('files/step1/dladlidlu.wav') }}" data-role="button" data-theme="a">ضَاضِيْ ضُوْ بَضْ ضُوْضًا ضَنِ ضَضْنَ مِنَ الْمُضْنِ مَضِيْضًا ضَنِضًا</a>
			<a href="طَاطِيْ طُوْبَطْ طُوْطًا طَنِ طَطْنَ مِنَ الْمُطْنِ مَطِيْطًاطَنِطًا#" value="{{ asset('files/step1/thathithu.wav') }}" data-role="button" data-theme="a">طَاطِيْ طُوْبَطْ طُوْطًا طَنِ طَطْنَ مِنَ الْمُطْنِ مَطِيْطًاطَنِطًا</a>
			<a href="ظَاظِيْ ظُوْبَظْ ظُوْظًا ظَنِ ظَظْنَ مِنَ الْمُظْنِ مَظِيْظًاظَنِظًا#" value="{{ asset('files/step1/zhazhizhu.wav') }}" data-role="button" data-theme="a">ظَاظِيْ ظُوْبَظْ ظُوْظًا ظَنِ ظَظْنَ مِنَ الْمُظْنِ مَظِيْظًاظَنِظًا</a>
			<a href="غَاغِيْ غُوْ بَغْ غُوْغًا غَنِ غَغْنَ مِنَ الْمُغْنِ مَغِيْغًا غَنِغًا#" value="{{ asset('files/step1/ghaghighu.wav') }}" data-role="button" data-theme="a">غَاغِيْ غُوْ بَغْ غُوْغًا غَنِ غَغْنَ مِنَ الْمُغْنِ مَغِيْغًا غَنِغًا</a>
			<a href="فَافِيْ فُوْ بَفْ فُوْفًا فَنِ فَفْنَ مِنَ الْمُفْنِ مَفِيْفًا فًنِفًا#" value="{{ asset('files/step1/fafifu.wav') }}" data-role="button" data-theme="a">فَافِيْ فُوْ بَفْ فُوْفًا فَنِ فَفْنَ مِنَ الْمُفْنِ مَفِيْفًا فًنِفًا</a>
			<a href="قَاقِيْ قُوْ بَقْ قُوْقًا قَنِ قَقْنَ مِنَ الْمُقْنِ مَقِيْقًا قَنِقًا#" value="{{ asset('files/step1/qaqiqu.wav') }}" data-role="button" data-theme="a">قَاقِيْ قُوْ بَقْ قُوْقًا قَنِ قَقْنَ مِنَ الْمُقْنِ مَقِيْقًا قَنِقًا</a>
			<a href="كَاكيْ كُوْ بَكْ كُوْكًا كَنِ كَكْنَ مِنَ الْمُكْنِ مَكِيْكًا كَنِكًا#" value="{{ asset('files/step1/kakiku.wav') }}" data-role="button" data-theme="a">كَاكيْ كُوْ بَكْ كُوْكًا كَنِ كَكْنَ مِنَ الْمُكْنِ مَكِيْكًا كَنِكًا</a>
			<a href="لاَليْ لُوْ بَلْ لُوْلاً لَنِ لَلْنَ مِنَ الْمُلْنِ مَلِيْلاً لَنِلاً#" value="{{ asset('files/step1/Lalilu.wav') }}" data-role="button" data-theme="a">لاَليْ لُوْ بَلْ لُوْلاً لَنِ لَلْنَ مِنَ الْمُلْنِ مَلِيْلاً لَنِلاً</a>
			<a href="مَا مِيْ مُوْ بَمْ مُوْمًامَنِ مَمْنَ مِنَ الْمُمْنِ مَمِيْمًا مَنِمًا#" value="{{ asset('files/step1/mamimu.wav') }}" data-role="button" data-theme="a">مَا مِيْ مُوْ بَمْ مُوْمًامَنِ مَمْنَ مِنَ الْمُمْنِ مَمِيْمًا مَنِمًا</a>
			<a href="نَانيْ نُوْ بَنْ نُوْنًا نَنِ نَنْنَ مِنَ الْمُنْنِ مَنِيْنًا نَنِنًا#" value="{{ asset('files/step1/naninu.wav') }}" data-role="button" data-theme="a">نَانيْ نُوْ بَنْ نُوْنًا نَنِ نَنْنَ مِنَ الْمُنْنِ مَنِيْنًا نَنِنًا</a>
			<a href="وَاويْ وُوْ بَوْ وُوْوًاوَنِ وَوْنَ مِنَ الْمُوْنِ مَوِيْوًا وَنِوًا#" value="{{ asset('files/step1/wawiwu.wav') }}" data-role="button" data-theme="a">وَاويْ وُوْ بَوْ وُوْوًاوَنِ وَوْنَ مِنَ الْمُوْنِ مَوِيْوًا وَنِوًا</a>
			<a href="هَاهيْ هُوْ بَهْ هُوْهًاهَنِ هَهْنَ مِنَ الْمُهْنِ مَهِيْهًا هَنِهًا#" value="{{ asset('files/step1/hakhihu.wav') }}" data-role="button" data-theme="a">هَاهيْ هُوْ بَهْ هُوْهًاهَنِ هَهْنَ مِنَ الْمُهْنِ مَهِيْهًا هَنِهًا</a>
			<a href="يَاييْ يُوْ بَيْ يُوْيًايَنِ يَيْنَ مِنَ الْمُيْنِ مَيِيْيًا يَنِيًا#" value="{{ asset('files/step1/yayiyu.wav') }}" data-role="button" data-theme="a">يَاييْ يُوْ بَيْ يُوْيًايَنِ يَيْنَ مِنَ الْمُيْنِ مَيِيْيًا يَنِيًا</a>
		</div>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
	</div>
	@include('step1.menu')
@stop

@section('js')
	$('#wrapfile').on('click','a',function()
	{
		var str=$(this).attr('href');
		var txt=str.length;
		var offset=txt-1;
		var slice=str.slice(0,offset);
		var file = $(this).attr('value');
		$('#popDisplay').text(''+slice+'').popup('open');
		$('#myplayer').html('<audio src="'+file+'" autoplay="true"></audio>');
	});
@stop