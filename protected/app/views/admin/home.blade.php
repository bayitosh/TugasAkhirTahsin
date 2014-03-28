@extends('layout.main')

@section('title')
	Home - Administrator - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<h1>Home Administrator</h1>
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
		<div class="ui-grid-a">
		    <div class="ui-block-a" style="padding:5px;">
				<h3>URL Admin</h3>
		    	{{ Form::open(array('url'=>$url,'style'=>'padding:10px;','data-ajax'=>'false')) }}
			    	<input type="text" name="myurl" id="text-1" data-clear-btn="true" value="{{ $urladmin }}" required>
			    	<input type="submit" value="Update">
		    	{{ Form::close() }}
		    </div>
		    <div class="ui-block-b" style="padding:5px;">
		    	<h3>Jumlah Soal Evaluasi</h3>
		    	{{ Form::open(array('url'=>$url1,'style'=>'padding:10px;','data-ajax'=>'false')) }}
			    	<input type="text" name="jumsoal" id="text-1" data-clear-btn="true" value="{{ $jumsoal->jumlah }}" required>
			    	<input type="submit" value="Update">
		    	{{ Form::close() }}
			</div>
		</div>
	</div>
	@include('admin/menu')
@stop