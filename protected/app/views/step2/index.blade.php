@extends('home.index')

@section('title')
	Tahap Kedua > Penguasaan Kaidah dan Hukum Bacaan - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>		
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II</b></span><br>
    </div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center>{{ HTML::image('img/basmallah.png') }}</center>
		<center><h1 style="font-size:25px;">Kaidah dan Hukum Bacaan</h1></center>
		<div id="ket2">
		Dalam membaca Al-Qur’an, sebelumnya pembaca harus mengerti  tata cara membaca Al-Qur’an yang benar, 
		dari definisi sebelumnya telah dijelaskan bahwa seseorang belum dapat dikatakan baik Qira’ahnya bila belum mampu menerapkan 3 esensi/rukun dalam tajwid, 
		salah satunya pengusaan makhrijul huruf. Dilihat dari tata cara maknawiyah yaitu membaca Al-Qur’an  disertai dengan bacaan tajwid dan jangan sekali-kali melagukan Al-Qur’an, 
		tetapi tidak mengindahkan tata cara tajwidnya, sehingga menjadikan bacaannya keliru. Pada umumnya kesalahan membaca Al-Qur’an dapat diklasifikasikan menjadi dua bagian, yaitu 
		<ol type="1">
			<li>Kesalahan Khofi, yaitu kesalahan tersembunyi atau lebih tepatnya kesalahan ringan, yang bila kesalahan ini dilakukan tidak menjadikan berubah makna terhadap kalimat yang diucapkan</li>
			<li>Kesalahan jali, yaitu kesalahan yang jelas atau lebih tepatnya kesalahan berat. Kriteria kesalahan jali di antaranya adalah mengubah arti yang dimaksud dalam Al-Qur’an. Kesalahan jali mengakibatkan hukumnya haram</li>
		</ol>
		</div>
	</div>
	@include('step2.menu')
@stop

@section('footer')
	<div id="footer" data-role="footer" data-position="fixed">
		<a href="{{ URL::to('/') }}">learnquran.dev</a>
	</div>
@stop