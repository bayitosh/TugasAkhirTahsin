@extends('layout.main')

@section('title')
	Tahap IV (Bacaan Gharib) > Hamzah Qatha' dan Washal - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Hamzah Qatha' dan Washal</h1></center>
			<div id="ket1">
			Hamzah Qatha’ adalah hamzah yang selalu dibaca dan ditulis, baik di awal, ditengah maupun diakhir kata. 
			Cara membaca hamzah qatha’disesuaikan dengan harakat yang tertulis. Hamzah washal adalah hamzah yang harus 
			dibaca di awal kalimat dan tidak dibaca di tengah kalimat. Cirinya adalah adanya huruf shad kecil (ص) di atas alif tanpa harakat
			</div>
			<br>
			<div id="wrapfile">
				<center>
					<h4>Hamzah Washal dibaca dhammah, contoh ayat:</h4>
					<a href="اۘشْكُرْ#" value="{{ asset('files/step4/I_Hamzah_sukun/hamzah_dhammah1.wav') }}" data-role="button" data-theme="a">اۘشْكُرْ</a>
					<a href="اۘدْعُ#" value="{{ asset('files/step4/I_Hamzah_sukun/hamzah_dhammah2.wav') }}" data-role="button" data-theme="a">اۘدْعُ</a>
					<a href="اۘسْجُدْ#" value="{{ asset('files/step4/I_Hamzah_sukun/hamzah_dhammah3.wav') }}" data-role="button" data-theme="a">اۘسْجُدْ</a><br>
					<h4>Hamzah Washal dibaca kasrah, contoh ayat:</h4>
					<a href="اِهْدِ نَاالصِّراَطَ اْلمُسْتَقِيْمَ#" value="{{ asset('files/step4/I_Hamzah_sukun/hamzah_kasrah.wav') }}" data-role="button" data-theme="a">اِهْدِ نَاالصِّراَطَ اْلمُسْتَقِيْمَ</a><br>
					<h4>Hamzah Qatha’, contoh ayat:</h4>
					<a href="مِنْ إِسْتَبْرَ قٍ#" value="{{ asset('files/step4/I_Hamzah_sukun/hamzah_sukun.wav') }}" data-role="button" data-theme="a">مِنْ إِسْتَبْرَ قٍ</a>
				</center>
			</div>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
	</div>
	@include('step4.menu')
@stop

@section('js')
	$('#yabshuth').change(function(e)
	{
		e.preventDefault();
		var id = $(this).val();
		$('#myplayer').html('<audio src="{{ asset('files/step4/I_Hamzah_sukun') }}/'+id+'" autoplay="true"></audio>');
	});
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