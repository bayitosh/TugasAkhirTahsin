@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Shifrul Mustadir - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Shifrul Mustadir</h1></center>
			<div id="ket1">
			Shifrul mustadir adalah bulatan sempurna yang diletakkan di atas huruf madd yang menunjukkan bahwa madd 
			tersebut tidak dibaca panjang, baik ketika washal atau waqaf. Contoh lafadznya :
			</div>
			<div id="wrapfile">
				<a href="اَفَا۫ءِنْ مَّاتَ#" value="{{ asset('files/step4/J_Shifrul_Mustadir/shifrul_mustadir1.wav') }}" data-role="button" data-theme="a">اَفَا۫ءِنْ مَّاتَ</a>
				<a href="وَثَمُوْ دا۫فمَآ أَبْقٰى#" value="{{ asset('files/step4/J_Shifrul_Mustadir/shifrul_mustadir2.wav') }}" data-role="button" data-theme="a">وَثَمُوْ دا۫فمَآ أَبْقٰى</a>
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