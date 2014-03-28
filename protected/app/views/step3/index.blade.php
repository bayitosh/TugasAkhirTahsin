@extends('layout.main')

@section('title')
	Tahap III (Memahami Tanda Waqaf) - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Memahami Tanda Waqaf</h1></center>
		<div id="ket1">
		Waqaf menurut bahasa ialah Al-habsu yang artinya menahan. Sedangkan menurut istilah waqaf ialah memutuskan suara pada suatu kalimat dalam waktu tertentu, 
		begitu lama, kemudian mengambil napas satu kali dengan niat untuk memulai kembali bacaan Al-Qur’an.
		</div>
	</div>
	@include('step3.menu')
@stop