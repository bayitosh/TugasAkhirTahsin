@extends('layout.main')

@section('title')
	Informasi Evaluasi - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<span style="font-size:25px;"><b>Evaluasi</b></span>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<div id="ket1">
		Pada tahapan evaluasi ini berisi pertanyaan-pertanyaan dari ilmu tahsin dari metode Quantum Learning Qur’an yang telah diuraikan pada tahapan I-IV. 
		Dalam tahapan evaluasi, pertanyaan-pertanyaan yang disediakan bersifat random atau acak untuk menguji kemampuan pengguna dalam mempelajari 
		dan memahami ilmu tahsin. Pertanyaan-pertanyaan yang diberikan dalam evaluasi ini terdiri dari pertanyaan dasar sampai pertanyaan yang 
		tingkat kesulitannya lebih tinggi. Disini pengguna diberikan beberapa pertanyaan secara acak kemudian pengguna menjawab pertanyaan tersebut 
		setelah itu pengguna bisa melihat hasil dari jawaban setelah mengikuti evaluasi tersebut.
		<br>
		<a href="{{ URL::to('evaluasi/start.html') }}" data-ajax="false" data-theme="a"><h1>Start Evaluasi</h1></a>
		</div>
	</div>
	@include('evaluasi.menu')
@stop