@extends('layout.main')

@section('title')
	Home - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		Belajar Al-Qur'an
	</div>
@stop

@section('content')
	<div id="body" data-role="content">
		<center>{{ HTML::image('img/bismillah1.jpg') }}</center><br>
		<div data-role="controlgroup" id="menu">
			<a href="{{ URL::to('tahap-pertama/index.html') }}"  data-ajax="false" data-role="button" data-theme="a">Tahap 1 (Pengenalan Huruf Hijaiyah)</a>
			<a href="{{ URL::to('tahap-kedua/index.html') }}"  data-ajax="false" data-role="button" data-theme="a">Tahap 2 (Penguasaan Kaidah dan Hukum Bacaan)</a>
			<a href="{{ URL::to('tahap-ketiga/index.html') }}"  data-ajax="false" data-role="button" data-theme="a">Tahapan 3 (Memahami Tanda Waqaf)</a>
			<a href="{{ URL::to('tahap-keempat/index.html') }}"  data-ajax="false" data-role="button" data-theme="a">Tahapan 4 (Bacaan Gharib)</a>
			<a href="{{ URL::to('evaluasi/index.html') }}"  data-ajax="false" data-role="button" data-theme="a">Evaluasi</a>
			<a href="#popupAbout" data-rel="popup" data-position-to="window" data-role="button" data-theme="a" data-transition="fade">About</a>
		</div>
		
		<div data-role="popup" id="popupAbout" data-theme="a">
			<div style="padding:10px 20px;">
			 	<fieldset>
			 		<center><label><h2>Tentang Belajar Quran</h2></label></center>
			 		<p>	
					<div id="content" data-role="content">
					<div id="ket1">
				 		Banyak metode yang dapat digunakan untuk belajar tahsin Al-Qur’an diantaranya 
				 		metode Al-Basith, Talaqi, QLQ, Hidayatus Shibyan dan sebagainya. 
				 		Pada tugas akhir ini, metode yang digunakan adalah QLQ mengingat metode ini 
				 		menggunakan tahapan-tahapan yang dapat mempermudah dalam mempelajari tahsin 
				 		Al-Qur’an dari tingkat dasar.  Ada lima tahapan yang akan dibahas untuk belajar 
				 		membaca Al-Qur’an dengan metode QLQ yaitu Tahapan I (Pengenalan Huruf Hijaiyah), 
				 		Tahapan II (Penguasaan Kaidah dan Hukum Bacaan), Tahapan III (Memahami Tanda Waqaf), 
				 		dan Tahap IV (Bacaan Gharib), Tahap V (Mengetahui Mushaf Al-Qur’an).
					</div>
					</div>
					</p>
			 		<a href="#" data-role="button" data-rel="back" data-theme="c">ok</a>
			 	</fieldset>
			</div>
		</div>
	</div>
@stop