@extends('layout/main')

@section('title')
	Form Tambah Soal - Administrator - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<h1>Form Tambah Soal</h1>
		<a href="{{ URL::to($logout) }}" data-icon="back" data-ajax="false" title="logout">Logout</a>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		@if($errors->has())
		    <div class="alert alert-danger fade in">
		        <center><span class="fa fa-warning"></span>&nbsp; <b>{{ $errors->first() }}</b></center>
		    </div>
		@endif
		<?php
		    $true=Session::get('true');
		    $false=Session::get('false');
		?>
		@if(@$true)
		    <div class="alert alert-success fade in">
		        <center><span class="fa fa-check"></span>&nbsp; <b>{{ $true }}</b></center>
		    </div>
		@elseif(@$false)
		    <div class="alert alert-danger fade in">
		        <center><span class="fa fa-warning"></span>&nbsp; <b>{{ $false }}</b></center>
		    </div>
		@endif
		{{ Form::open(array('url'=>$url,'style'=>'padding:10px;','data-ajax'=>'false')) }}
			@if(@$data)
				<input type="hidden" name="token" value="{{ @$data->id }}">
			@endif
			<label for="soal">Soal</label>
			<textarea name="soal" id='soal' cols="40" rows="8" data-theme="e">{{ @$data->soal }}</textarea>
			<label for="opsi-a">Opsi A</label>
			<input type="text" name="opsi_a" id="opsi-a" data-theme="e" value="{{ @$data->a }}">
			<label for="opsi-b">Opsi B</label>
			<input type="text" name="opsi_b" id="opsi-b" data-theme="e" value="{{ @$data->b }}">
			<label for="opsi-c">Opsi C</label>
			<input type="text" name="opsi_c" id="opsi-c" data-theme="e" value="{{ @$data->c }}">
			<label for="opsi-d">Opsi D</label>
			<input type="text" name="opsi_d" id="opsi-d" data-theme="e" value="{{ @$data->d }}">
			<label for="opsi-e">Opsi E</label>
			<input type="text" name="opsi_e" id="opsi-e" data-theme="e" value="{{ @$data->e }}">
			<label for="jwb">Jawaban</label>
		    <select name="jwb" id="jwb">
		        <option value="">---</option>
		        <option value="a" @if(@$data->jwb=='a') selected @endif>A</option>
		        <option value="b" @if(@$data->jwb=='b') selected @endif>B</option>
		        <option value="c" @if(@$data->jwb=='c') selected @endif>C</option>
		        <option value="d" @if(@$data->jwb=='d') selected @endif>D</option>
		        <option value="e" @if(@$data->jwb=='e') selected @endif>E</option>
		    </select>
		    <input type='submit' value="@if(@$data) Update @else Simpan @endif" data-theme="a">
		{{ Form::close() }}
	</div>
	@include('admin/menu')
@stop