@extends('home.index')

@section('title')
	Tahap Kedua (Penguasaan Kaidah dan Hukum Bacaan) >  - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Bacaan)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center>{{ HTML::image('img/alquran1.png') }}</center>
		<center><h1 style="font-size:25px;">Isti’adzah Dan Basmallah</h1></center>
		<div id="ket2">
		Membaca Isti’adzah  ketika hendak membaca Al-Qur’an hukumnya sunnah, 
		sebagian ulama mengatakan wajib dengan alasan karena Allah telah memerintahkannya dalam Al-Qur’an surat An-Nahl ayat 98. 
		Bila mana pembaca memulai dari surat At-Taubah, Imam Qira’at mempunyai dua pendapat :<br>
		<ol type="1">
			<li>Waqaf pada Isti’adzah dan tidak memakai basmalah.</li>
			<li>Me-washal-kan Isti’adzah dengan awal surat.</li>
		</ol>
		Adapun membaca basmalah sangat dianjurkan (mustahabbah), 
		baik diawal surat maupun pertengahan surat kecuali surat At-Taubah. 
		Sebagian ulama Qira’at memberinya hukum Wajib Sina’i artinya kewajiban yang apabila ditinggalkan tidak berdosa. 
		Berikut contoh pengucapan Isti'adzah, Basmallah, Isti'adzah surat At-Taubah beserta video :
		<br><br>
		</div>
		<div id='wrapfile'>
			<center><label for="istiadzah"><h4>Isti’adzah</h4></label></center>
			<div data-role="controlgroup" data-type="horizontal" style="text-align:center;">
			    <a href="أَعُوْذُبِاللهِ مِنَ الشَّيْطاَنِ الرَّجِيْمِ#" id="audio" value="{{ asset('files/step2/A_istiadzah/istiadzah.wav') }}" data-role="button" data-theme="a">audio</a>
			    <a href="#" id="video" value="{{ asset('mp4/istiadzah.mp4') }}" data-role="button" data-theme="a">video</a>
			</div>
			<br>
			<center><label for="basmallah"><h4>Basmallah</h4></label></center>
			<div data-role="controlgroup" data-type="horizontal" style="text-align:center;">
			    <a href="بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ#" id="audio" value="{{ asset('files/step2/A_istiadzah/basmallah.wav') }}" data-role="button" data-theme="a">audio</a>
			    <a href="#" id="video" value="{{ asset('mp4/basmallah.mp4') }}" data-role="button" data-theme="a">video</a>
			</div>
			<br>
			<center><label for="istiadzahbasmallah"><h4>Isti’adzah disambung dengan basmallah</h4></label></center>
			<div data-role="controlgroup" data-type="horizontal" style="text-align:center;">
				<a href="أَعُوْذُبِاللهِ مِنَ الشَّيْطاَنِ الرَّجِيْمِ بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ#" id="audio" value="{{ asset('files/step2/A_istiadzah/istiadzah_basmallah.wav') }}" data-role="button" data-theme="a">audio</a>	
			</div>
			<br>
			<center><label for="istiadzah"><h4>Isti’adzah surat At-Taubah</h4></label></center>
			<div data-role="controlgroup" data-type="horizontal" style="text-align:center;">
				<a href="اَعُوْذًبِااللهِ مِنَ النَّارِ وَمِنْ شَرِّلْكُفَّارِوَمِنْ غَضَبِ اْلجَبَّارِ الْعِزَّةَلِلهِ وَلِرَسَوْلِهٖ وَلِلْمَؤْمِنِيْنَ #" id="audio" value="{{ asset('files/step2/A_istiadzah/istiadzah_at-taubah.wav') }}" data-role="button" data-theme="a">audio</a>
			</div>
		</div>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popAudio" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
		<div data-role="popup" id="popVideo" data-overlay-theme="a" data-theme="c" data-dismissible="true" style="margin-left:0px; width:100%; margin:0 auto;" class="ui-corner-all"></div>
	</div>
	@include('step2.menu')
@stop

@section('footer')
	<div id="footer" data-role="footer" data-position="fixed">
		<a href="{{ URL::to('/') }}">learnquran.dev</a>
	</div>
@stop

@section('js')
	$('#wrapfile').on('click','#audio',function()
	{
		var str=$(this).attr('href');
		var txt=str.length;
		var offset=txt-1;
		var slice=str.slice(0,offset);
		var file = $(this).attr('value');
		//alert(file);
		$('#popAudio').text(''+slice+'').popup('open');
		$('#myplayer').html('<audio src="'+file+'" autoplay="true"></audio>');
	});
	$('#wrapfile').on('click','#video',function()
	{
		var file=$(this).attr('value');
		//alert(file);
		var video="<video width='100%' height='100%' controls autoplay><source src='"+file+"'></video>";
		$('#popVideo').html(video).popup('open');
	});
@stop