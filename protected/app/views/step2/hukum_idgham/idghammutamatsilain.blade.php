@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Idgham - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>		
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Idgham)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Idgham Mutammatsilain</h1></center>
		<div id="ket1">
		Idgham Mutamatsilain yang berarti dua hal yang sama. 
		Maksudnya adalah bertemunya dua huruf yang sama baik makhraj maupun sifatnya. 
		Cara membacanya ialah dengan memasukkan huruf yang pertama kepada huruf yang kedua sehingga menjadi satu huruf dalam pengucapan,
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="إِضْرِبْ بِّعَصَاكَ الْحَجَرَ#" value="{{ asset('files/step2/E_Hukum_idgham/a_Idgham_Mutamatsilain/contoh1.wav') }}" data-role="button" data-theme="a">إِضْرِبْ بِّعَصَاكَ الْحَجَرَ</a>
			<a href="رَبِحتْ تِجاَرَ تُهُمْ#" value="{{ asset('files/step2/E_Hukum_idgham/a_Idgham_Mutamatsilain/contoh2.wav') }}" data-role="button" data-theme="a">رَبِحتْ تِجاَرَ تُهُمْ</a>
			<a href="إِذْذّ هَبَ مُغَاضِبًا#" value="{{ asset('files/step2/E_Hukum_idgham/a_Idgham_Mutamatsilain/contoh3.wav') }}" data-role="button" data-theme="a" >إِذْذّ هَبَ مُغَاضِبًا</a>
			<a href="مَالَمْ تَسْتَطِعْ عَّلَيْهِ#" value="{{ asset('files/step2/E_Hukum_idgham/a_Idgham_Mutamatsilain/contoh4.wav') }}" data-role="button" data-theme="a">مَالَمْ تَسْتَطِعْ عَّلَيْهِ</a>
			<a href="يُدْرِ كْكُّمُ#" value="{{ asset('files/step2/E_Hukum_idgham/a_Idgham_Mutamatsilain/contoh5.wav') }}" data-role="button" data-theme="a">يُدْرِ كْكُّمُ</a>
			<a href="بَلْ لَّعَنَهُمُ اللهُ#" value="{{ asset('files/step2/E_Hukum_idgham/a_Idgham_Mutamatsilain/contoh6.wav') }}" data-role="button" data-theme="a">بَلْ لَّعَنَهُمُ اللهُ</a>
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