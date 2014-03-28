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
		<center><h1 style="font-size:25px;">Idgham Mutaqaribain</h1></center>
		<div id="ket1">
		Idgham Mutaqaribain berarti dua hal yang berdekatan. Maksudnya adalah bertemunya dua huruf yang berdekatan makhrajnya tetapi sifatnya berlainan, 
		berikut contoh pengucapannya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="يَبُنَيَّ ارْكَبْ مَّعَنَا#" value="{{ asset('files/step2/E_Hukum_idgham/c_Idgham_Mutaqaribain/ba-ma.wav') }}" data-role="button" data-theme="a">huruf م dan ب pada يَبُنَيَّ ارْكَبْ مَّعَنَا</a>
			<a href="وَقُلْ رَّبِّ أَدْخِلْنِيْ#" value="{{ asset('files/step2/E_Hukum_idgham/c_Idgham_Mutaqaribain/la-ra.wav') }}" data-role="button" data-theme="a">huruf ر dan لْ pada وَقُلْ رَّبِّ أَدْخِلْنِيْ</a>
			<a href="أَلَمْ نَخْلُقْكُمْ#" value="{{ asset('files/step2/E_Hukum_idgham/c_Idgham_Mutaqaribain/qa-ka.wav') }}" data-role="button" data-theme="a" >huruf ك dan قْ pada أَلَمْ نَخْلُقْكُمْ</a>
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