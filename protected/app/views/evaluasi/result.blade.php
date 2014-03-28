@extends('layout.main')

@section('title')
	Hasil Evaluasi - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<h1>Hasil Evaluasi</h1>	
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<h2>Hasil Evaluasi :</h2>
		<h4>
		<div style="padding:10px; background:#FBEE94;">
			<table>
				<tr>
					<td>Jumlah Soal</td>
					<td>:</td>
					<td>{{ $jmlsoal }}</td>
				</tr>
				<tr>
					<td>Benar</td>
					<td>:</td>
					<td>{{ $correct }}</td>
				</tr>
				<tr>
					<td>Salah</td>
					<td>:</td>
					<td>{{ $wrong }}</td>
				</tr>
			</table>
		</div>
		<br>
		<div style="padding:10px; background:#FBEE94;">
			@foreach($data as $dt)
				{{ $dt }}<br>
			@endforeach
		</div>
		</h4>
	</div>
	@include('evaluasi.menu')
@stop