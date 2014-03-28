@extends('layout.main')

@section('title')
	Login Administrator - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<h1>Login Administrator</h1>
	</div>
@stop

@section('content')
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
		<label for="text-1"><h4>Username</h4></label>
	    <input type="text" name="username" id="text-1" data-clear-btn="true" data-theme="e">
	    <label for="text-3"><h4>Password</h4></label>
	    <input type="password" data-clear-btn="true" name="password" id="text-3" data-theme="e">
		<input type="submit" value="Login">
	{{ Form::close() }}
@stop