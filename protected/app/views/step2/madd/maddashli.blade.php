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
		<center><h1 style="font-size:25px;">Madd Ashli</h1></center>
		<div id="ket1"><h4>
		Mad Ashli adalah hukum mad yang dasar atau pokok. Mad ashli dikenal pula dengan mad thabi’i, yang termasuk kedalam kategori mad ashli dalam riwayat hafs dari ashim adalah:
		</h4></div><br>
		<div id="wrapfile">
			<div id="ket1">Mad Thabi’i, yang terdiri dari huruf-huruf mad, dan tidak terdapat unsur tambahan lainnya seperti hamzah. contoh lafadznya: </div>
				<a href="مٰالِكِ#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_Thabii1.wav') }}" data-role="button" data-theme="a">مٰالِكِ</a>
				<a href="يَدْخُلُوْنَ#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_Thabii2.wav') }}"data-role="button" data-theme="a">يَدْخُلُوْنَ</a><br>
			<div id="ket1">Mad Badal, yaitu setiap hamzah yang dipanjangkan 2 harakat sebagai pengganti hamzah yang terhilangkan. contoh lafadznya: </div>
				<a href="أُوْ تِيَ#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_badal1.wav') }}" data-role="button" data-theme="a">أُوْ تِيَ</a>
				<a href="ءَادَم#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_badal2.wav') }}" data-role="button" data-theme="a">ءَادَم</a><br>
			<div id="ket1">Mad ‘Iwadh, yang terjadi ketika berwaqaf pada huruf yang berakhiran fathahtain. contoh lafadznya: </div>
				<a href="عَلِيْمًاحَكِيْمًا#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_iwadh1.wav') }}" data-role="button" data-theme="a">عَلِيْمًاحَكِيْمًا</a>
				<a href="غَفُوْرًارَّحِيْمًا#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_iwadh2.wav') }}" data-role="button" data-theme="a">غَفُوْرًارَّحِيْمًا</a><br>
			<div id="ket1">Mad Tamkiin, yaitu yang terdapat pada huruf ya yang bertasydid bertemu dengan ya mati. contoh lafadznya: </div>
				<a href="وَإِذَاحُيِّيْتُم#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_tamkin1.wav') }}" data-role="button" data-theme="a">وَإِذَاحُيِّيْتُم</a>
				<a href="فِيْ الْأُمِّيِّيْنَ#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_tamkin2.wav') }}" data-role="button" data-theme="a">فِيْ الْأُمِّيِّيْنَ</a><br>
			<div id="ket1">Mad Shilah, Qashirah yaitu ha’ dhamir yang tidak didahului maupun diikuti oleh huruf sukun, bertemu dengan selain hamzah. contoh lafadznya: </div>
				<a href="وَاْمْرَأَتُهُ,حَمَّالَتَ اْلْحَطَبِ#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_Shilah_qhasirah1.wav') }}" data-role="button" data-theme="a">وَاْمْرَأَتُهُ,حَمَّالَتَ اْلْحَطَبِ</a>
				<a href="لاَتَاْخُذُهُ,سِنَةٌ وَلاَنوْمٌ#" value="{{ asset('files/step2/J_Madd/a_Mad_Ashli/Mad_Shilah_qhasirah2.wav') }}" data-role="button" data-theme="a">لاَتَاْخُذُهُ,سِنَةٌ وَلاَنوْمٌ</a><br>
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