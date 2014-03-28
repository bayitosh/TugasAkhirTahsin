@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Qalqalah - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Qalqalah)</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Qalqalah Kubra</h1></center>
		<div id="ket2">
		Qalqalah Kubra artinya besar. Jika huruf qalqalah bersukun ‘aridh karena diwaqafkan, maka ia dinamakan qalqalah kubra. 
		Qalqalah kubra terjadi apabila huruf qalqalah:
		<ul>
			<li>Bersukun ’aridh karena diwaqafkan. Dengan kata lain, huruf tersebut asalnya berharakat tetapi menjadi bersukun karena dibaca waqaf</li>
			<li>Bersukun diakhir kalimat</li>
		</ul>
		berikut contoh pengucapan nya :
		</div>
		<br>
		<div id="wrapfile">
			<a href="سَوْ طَ عَذَابٍ#" value="{{ asset('files/step2/I_Qalqalah/b_Qalqalah_kubra/kubra1.wav') }}" data-role="button" data-theme="a">سَوْ طَ عَذَابٍ</a>
			<a href="وَالسَّمّآءِذَا تِ البُرٌوْجِ#" value="{{ asset('files/step2/I_Qalqalah/b_Qalqalah_kubra/kubra2.wav') }}" data-role="button" data-theme="a">وَالسَّمّآءِذَا تِ البُرٌوْجِ</a>
			<a href="ذٰلِكَ لَشَهِيْدٌ#" value="{{ asset('files/step2/I_Qalqalah/b_Qalqalah_kubra/kubra3.wav') }}" data-role="button" data-theme="a">ذٰلِكَ لَشَهِيْدٌ</a>
			<a href="وَاْلأَسْباَطُ#" value="{{ asset('files/step2/I_Qalqalah/b_Qalqalah_kubra/kubra4.wav') }}" data-role="button" data-theme="a">وَاْلأَسْباَطُ</a>
			<a href="مِنْ شَرِّماَخَلَقُ#" value="{{ asset('files/step2/I_Qalqalah/b_Qalqalah_kubra/kubra5.wav') }}" data-role="button" data-theme="a">مِنْ شَرِّماَخَلَقُ</a>
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