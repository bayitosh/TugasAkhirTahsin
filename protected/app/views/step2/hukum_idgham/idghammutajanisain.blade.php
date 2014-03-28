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
		<center><h1 style="font-size:25px;">Idgham Mutajanitsain</h1></center>
		<div id="ket1">
		Idgham Mutajanisain artinya dua hal yang sejenis. Maksudnya adalah bertemunya dua huruf yang sama makhrajnya tetapi berbeda sifatnya,
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="قَدْتَبَيَّنَ#" value="{{ asset('files/step2/E_Hukum_idgham/b_Idgham_Mutajanisain/da-ta.wav') }}" data-role="button" data-theme="a">huruf دْ dan ت pada قَدْتَبَيَّنَ</a>
			<a href="أَنَّهُمْ إِذْ ظَّلَمُوْا#" value="{{ asset('files/step2/E_Hukum_idgham/b_Idgham_Mutajanisain/dza-zha.wav') }}" data-role="button" data-theme="a">huruf ظ dan ذْ pada أَنَّهُمْ إِذْ ظَّلَمُوْا</a>
			<a href="أ جِيْبَتْ دَّعْوَتُكُمَ#" value="{{ asset('files/step2/E_Hukum_idgham/b_Idgham_Mutajanisain/ta-da.wav') }}" data-role="button" data-theme="a" >huruf د dan تْ pada أ جِيْبَتْ دَّعْوَتُكُمَ</a>
			<a href="وَقَا لَتْ طَاءِفَةٌ#" value="{{ asset('files/step2/E_Hukum_idgham/b_Idgham_Mutajanisain/ta-tha.wav') }}" data-role="button" data-theme="a">huruf ط dan تْ pada وَقَا لَتْ طَاءِفَةٌ</a>
			<a href="لَئِنْ بَسَطْتَ#" value="{{ asset('files/step2/E_Hukum_idgham/b_Idgham_Mutajanisain/tha-ta.wav') }}" data-role="button" data-theme="a">huruf ت dan طْ pada لَئِنْ بَسَطْتَ</a>
			<a href="يَلْهَثْ ذَّا لِكَ#" value="{{ asset('files/step2/E_Hukum_idgham/b_Idgham_Mutajanisain/tsa-dza.wav') }}" data-role="button" data-theme="a">huruf ذ dan ثْ pada يَلْهَثْ ذَّا لِكَ</a>
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