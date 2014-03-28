@extends('layout.main')

@section('title')
	Tahap III > Cara Melafalkan Bacaan yang Diwaqafkan - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap III</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center>{{ HTML::image('img/basmallah.png') }}</center>
		<center><h1 style="font-size:25px;">Cara Melafalkan Bacaan yang Diwaqafkan</h1></center>
			<div id="ket2"><center><h4>Waktu berhenti membaca Al-Qur’an menurut ahli qiraat terdiri dari 6 ketentuan sebagai berikut:</h4></center><br>
				<div id="wrapfile">
					<div id="ket1">Apabila akhir kalimat itu berakhiran sukun (mati), sehingga cara membacanya harus dibunyikan mati, contoh lafadznya: </div>
						<a href="وَأَمَّابِنِعْمَةِرَبِّكَ فَحَدِّثْ#" value="{{ asset('files/step3/1_Waqaf.wav') }}" data-role="button" data-theme="a">وَأَمَّابِنِعْمَةِرَبِّكَ فَحَدِّثْ</a><br>
					
					<div id="ket1">Apabila akhir kalimat itu berakhiran fathah, kasrah dan dhammah sehingga huruf tersebut dimatikan dan dibaca pendek, contoh lafadznya: </div>
						<a href="إِنَّ شَانِئَكَ هُوَالْأَبْتَرُ#" value="{{ asset('files/step3/2_Waqaf.wav') }}" data-role="button" data-theme="a">إِنَّ شَانِئَكَ هُوَالْأَبْتَرُ</a><br>
					
					<div id="ket1">Apabila pada akhir kalimat itu terdapat huruf ta marbuthah, ketika berhenti dibaca menjadi ha sukun dan dibaca pendek, contoh lafadznya: </div>
						<a href="الْقَارِعَةُ#" value="{{ asset('files/step3/3_Waqaf.wav') }}" data-role="button" data-theme="a">الْقَارِعَةُ</a><br>
					
					<div id="ket1">Apabila pada akhir kalimat itu didahului oleh huruf mati, cara membacanya adalah dengan mematikan dua huruf terakhir dengan suara pendek atau dibunyikan setengah suara, contoh lafadznya: </div>
						<a href="إِذَا جَآءَ نَصْرُاللهِ وَالْفَتْحُ#" value="{{ asset('files/step3/4_Waqaf1.wav') }}" data-role="button" data-theme="a">إِذَا جَآءَ نَصْرُاللهِ وَالْفَتْحُ</a>
						<a href="فِى الْعِلْمِ وَالْجِسْمِ#" value="{{ asset('files/step3/4_Waqaf2.wav') }}" data-role="button" data-theme="a">فِى الْعِلْمِ وَالْجِسْمِ</a>
						<a href="فَاَكَلَهُالذِّئْبُ#" value="{{ asset('files/step3/4_Waqaf3.wav') }}" data-role="button" data-theme="a">فَاَكَلَهُالذِّئْبُ</a><br>
					
					<div id="ket1">Apabila huruf terakhir itu fathahtain, sehingga bunyi ‘n’ dihilangkan dan dibaca fathah dengan panjang 2 harakat, contoh lafadznya: </div>
						<a href="وَالْٰعَٰدِ ٰيتِ ضَبْحًا#" value="{{ asset('files/step3/5_Waqaf.wav') }}" data-role="button" data-theme="a">وَالْٰعَٰدِ ٰيتِ ضَبْحًا</a><br>
					
					<div id="ket1">Apabila huruf terakhir itu huruf bertasydid, cara membacanya adalah dengan ditahan sebentar, contoh lafadznya: </div>
						<a href="تَبَّتْ يَدَآ أَبِيْ لَهَبٍ وَّتَبَّ#" value="{{ asset('files/step3/6_Waqaf1.wav') }}" data-role="button" data-theme="a">تَبَّتْ يَدَآ أَبِيْ لَهَبٍ وَّتَبَّ</a>
						<a href="قُلْ هِيَ مَوَٰقِيْتُ لِلنَّاسِ وَالْحَجِّ#" value="{{ asset('files/step3/6_Waqaf2.wav') }}" data-role="button" data-theme="a">قُلْ هِيَ مَوَٰقِيْتُ لِلنَّاسِ وَالْحَجِّ</a><br>
				</div>
				<div id="myplayer" style="display:none;"></div>
				<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
			</div>	
	</div>
@include('step3.menu')
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