@extends('layout.main')

@section('title')
	Tahap III > Tanda-tanda Waqaf - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Tanda-tanda Waqaf</h1></center>
			<div id="ket2"><center><h4>Waqaf tersebut terdiri dari beberapa tanda, yaitu sebagai berikut :</h4></center><br>
				<div id="wrapfile">
					<div id="ket1">م= harus berhenti</div>
						<a href="إِنَّماَيَسْتَجِيْبُ الَّذَيْنَ يَسْمَعُوْنَ ۢ وَالْمَوْتَ#" data-role="button" data-theme="a">إِنَّماَيَسْتَجِيْبُ الَّذَيْنَ يَسْمَعُوْنَ ۢ وَالْمَوْتَ</a><br>
					
					<div id="ket1">ط= lebih baik berhenti</div>
						<a href="۞ مٰلِكِ يَوْمِ الدِّيْنِؕ#" data-role="button" data-theme="a">۞ مٰلِكِ يَوْمِ الدِّيْنِؕ</a><br>
						
					<div id="ket1">ج = boleh berhenti boleh terus</div>
						<a href="وَمَآأُنْزِلَ مِنْ قَبْلِكَ ۚ وَبِالْاٰخِرَةِ#" data-role="button" data-theme="a">وَمَآأُنْزِلَ مِنْ قَبْلِكَ ۚ وَبِالْاٰخِرَةِ</a><br>

					<div id="ket1">ص = boleh berhenti, terus lebih utama</div>
						<a href="۞ وَلاَ تَشْتَرُوْا بِاٰيٰتِيْ ثَمَنًا قَلِيْلاًۖۖ وَّاِيَّا يَ فَاتَّقُوْنِ#" data-role="button" data-theme="a">۞ وَلاَ تَشْتَرُوْا بِاٰيٰتِيْ ثَمَنًا قَلِيْلاًۖۖ وَّاِيَّا يَ فَاتَّقُوْنِ</a><br>
						
					<div id="ket1">قلى = berhenti lebih utama</div>
						<a href="مَا فِى الْأَرْضِۗ#" data-role="button" data-theme="a">مَا فِى الْأَرْضِۗ</a><br>
					
					<div id="ket1">صلى = diteruskan lebih utama</div>
						<a href="فَأْتُوْبِسُوْرَةٍ مِّنْ مِّثْلِهِۖ  وَادْعُوْاشُهَدآءَكُمْ#" data-role="button" data-theme="a">فَأْتُوْبِسُوْرَةٍ مِّنْ مِّثْلِهِۖ  وَادْعُوْاشُهَدآءَكُمْ</a><br>
					
					<div id="ket1">لا= tidak boleh berhenti</div>
						<a href="۞ اَلْهَكُمُ التَّكَاثُرُۙحَتّٰى زُرْتُمُ الْمَقَابِر#" data-role="button" data-theme="a">۞ اَلْهَكُمُ التَّكَاثُرُۙحَتّٰى زُرْتُمُ الْمَقَابِر</a><br>
					
					<div id="ket1">؞ = boleh berhenti pada salah satu tanda tapi tidak boleh berhenti pada keduanya</div>
						<a href="۞ ذٰلِكَ الْكِتَبُۚ لاَرَيْبَ ؞ فِيْهِ ؞ هُدًى لِّلْمُتَّقِيْنَ#" data-role="button" data-theme="a">۞ ذٰلِكَ الْكِتَبُۚ لاَرَيْبَ ؞ فِيْهِ ؞ هُدًى لِّلْمُتَّقِيْنَ</a><br>
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