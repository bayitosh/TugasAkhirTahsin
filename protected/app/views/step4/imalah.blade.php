@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Tashil - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Imalah</h1></center>
			<div id="ket1">
			Imalah berarti miring. Menurut istilah adalah menyondongkan (suara) fathah ke arah kasrah dan (huruf) Alif( ا ) ke Ya( ى ). 
			Maksudnya ialah menuturkan suara fathah condong kea rah kasrah, sehingga keluar bunyi seperti huruf “e”, contoh lafadznya: 
			</div>
			<div id="wrapfile">
				<a href="بِسْمِ اللهِ مَجْرٰهَا وَمُرْسَهَا#" value="{{ asset('files/step4/C_Imalah/imalah.wav') }}" data-role="button" data-theme="a">بِسْمِ اللهِ مَجْرٰهَا وَمُرْسَهَا</a>
			</div>
		</ol>
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