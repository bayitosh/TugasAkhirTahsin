@extends('layout.main')

@section('title')
	Evaluasi - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<h1>Soal Evaluasi</h1>	
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<?php
			$false=Session::get('false');
		?>
		<!--<div class="ui-grid-b">
		    <div class="ui-block-a">
		    	<div class="ui-bar ui-bar-e" style="height:60px">
		    		Time Limit : <div id="timelimit"></div>
		   		</div>
			</div>
		</div>-->
		<h2>Silahkan Pilih Opsi Dibawah :</h2>
		<br>
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
		<?php $no=1; ?>
		{{ Form::open(array('url'=>$url,'data-ajax'=>'false')) }}
		@foreach($data as $datatmp)
			<?php foreach($datatmp as $dt); ?>
			<div class="ui-grid-solo">
				<div class="ui-block-a">
					<div class="ui-bar ui-bar-e" style="height:auto">{{ $no }}) {{ $dt->soal }}<br><br>
						<fieldset data-role="controlgroup" data-iconpos="right">
							<input type="hidden" name="answer{{ $no }}[]" value="{{ $dt->id }}">
					        <input type="radio" name="answer{{ $no }}[]" data-theme="a" id="ans-a-{{ $no }}" value="a">
					        <label for="ans-a-{{ $no }}">a) {{ $dt->a }}</label>
					        <input type="radio" name="answer{{ $no }}[]" data-theme="a" id="ans-b-{{ $no }}" value="b">
					        <label for="ans-b-{{ $no }}">b) {{ $dt->b }}</label>
					        <input type="radio" name="answer{{ $no }}[]" data-theme="a" id="ans-c-{{ $no }}" value="c">
					        <label for="ans-c-{{ $no }}">c) {{ $dt->c }}</label>
					        <input type="radio" name="answer{{ $no }}[]" data-theme="a" id="ans-d-{{ $no }}" value="d">
					        <label for="ans-d-{{ $no }}">d) {{ $dt->d }}</label>
					        <input type="radio" name="answer{{ $no }}[]" data-theme="a" id="ans-e-{{ $no }}" value="e">
					        <label for="ans-e-{{ $no }}">e) {{ $dt->e }}</label>
					    </fieldset>
				    </div>
				</div>
			</div>
			<br>
			<?php
			$no++;
			?>
		@endforeach
			<input type="submit" data-role="button" value="Check My Answer">
		{{ Form::close() }}
	</div>
	@include('evaluasi.menu')
@stop