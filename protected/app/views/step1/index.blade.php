@extends('layout.main')

@section('title')
	Tahap I - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a><br>
		<span><b>Tahap I</b></span>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Huruf Hijaiyah</h1></center>
		<center>{{ HTML::image('img/bismillah1.jpg') }}</center><br>
		<div id="ket1">
		Didalam tahapan I ini akan membahas pengenalan huruf hijaiyah. 
		Bagaimana mengenalkan setiap huruf hijaiyah yang terdapat dalam 
		Al-Qur’an membantu agar lebih cepat dan tepat dalam mempelajari makhraj huruf. 
		Tanpa mengenal huruf hijaiyah kita akan kesulitan bahkan tidak akan mampu membaca Al-Qur’an. Berikut huruf-huruf hijaiyah :
		</div>
		<table border="0" id="table" data-theme="e">
			<tr>
			<?php
			$no=0;
			?>
			@foreach($data as $dt)
				@if($no%8==0)
					<tr>
						<td><a href="#" id="audio" value="{{ $dt->id }}">{{ $dt->teks }}</a></td>
				@else
					<td><a href="#" id="audio" value="{{ $dt->id }}">{{ $dt->teks }}</a></td>
				@endif
				<?php
				$no++;
				?>
			@endforeach
			</tr>
		</table>
		<div data-role="popup" id="popupDialog" data-overlay-theme="a" data-theme="c" data-dismissible="true" style="top:-150px; width:100%; margin:0 auto;" class="ui-corner-all"></div>
	</div>
	@include('step1.menu')
@stop

@section('js')
	$("#table tr td").on('click','#audio',function(e)
	{
		e.preventDefault();
		var token = $(this).attr('value');
		$.ajax({
			url:'{{ URL::to("tahap-pertama/show-confirm") }}',
			type:'get',
			async:false,
			data:{tok:token},
			success:function(confirm)
			{
				$('#popupDialog').html(confirm).popup('open');
			}
		});
	});
@stop