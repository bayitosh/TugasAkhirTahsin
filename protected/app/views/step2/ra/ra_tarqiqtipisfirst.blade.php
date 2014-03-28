@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Ra' - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Ra')</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Ra’ bisa dibaca tebal dan tipis (diutamakan dibaca tipis)</h1></center><br>
	<div id="wrapfile">
		<div id="ket1">Ra’ bisa dibaca tebal karena didahului dengan huruf fathah dan dhammah, tetapi diutamakan dibaca tipis, karena asalnya terdapat huruf ya’( ي ) setelah ra’( ر ) yang dihapus, sehingga asalnya dibaca tipis, contoh lafadznya: </div> 
			<a href="عَذَا بِي وَنُذُرِ#" value="{{ asset('files/step2/H_Hukum_Ra/d_Ra_diutamakan_tipis/contoh.wav') }}" data-role="button" data-theme="a">عَذَا بِي وَنُذُرِ</a>
		<br>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
	</div>
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