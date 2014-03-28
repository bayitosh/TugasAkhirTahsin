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
	<center>
		<h1 style="font-size:25px;">Makharijul Huruf</h1>
		<center>{{ HTML::image('img/t1makharijul.jpg') }}</center>
		<br>
		@if(count($data1)>0)
			<h4>Rongga Mulut (Al-Jauf)</h4> 
			<div id="ket1">
				<p>
					<?php
					$no=1;
					?>
					@foreach($data1 as $dt1)
						<a href="#" id="audio1{{ $no }}" value="{{ $dt1->id }}" data-theme="a" data-role="button" style="font-size:25px;">{{ $dt1->teks }}</a>
						<?php
						@$jum1=$no;
						$no++;
						?>
					@endforeach
				</p>
			</div>
			<br>
		@endif
		@if(count($data2)>0)
			<h4>Tenggorokan (Al-Halq)</h4>
			<h4>
				<p>
					<?php
					$no=1;
					?>
					@foreach($data2 as $dt2)
						<td><a href="#" id="audio2{{ $no }}" value="{{ $dt2->id }}" data-theme="a" data-role="button" style="font-size:25px;">{{ $dt2->teks }}</a></td>
						<?php
						@$jum2=$no;
						$no++;
						?>
					@endforeach
				</p>
			</h4>
			<br>
			@endif
			@if(count($data3)>0)
				<h4>Lidah (Al-lisan)</h4>
				<h4>
					<p>
						<?php
						$no=1;
						?>
						@foreach($data3 as $dt3)
							<td><a href="#" id="audio3{{ $no }}" value="{{ $dt3->id }}" data-theme="a" data-role="button" style="font-size:25px;">{{ $dt3->teks }}</a></td>
							<?php
							@$jum3=$no;
							$no++;
							?>
						@endforeach
					</p>
				</h4>
				<br>
			@endif
			@if(count($data4)>0)
				<h4>Dua Bibir (Asy-Syafatain)</h4>
				<h4>
					<p>
						<?php
						$no=1;
						?>
						@foreach($data4 as $dt4)
							<td><a href="#" id="audio4{{ $no }}" data-theme="a" data-role="button" value="{{ $dt4->id }}" style="font-size:25px;">{{ $dt4->teks }}</a></td>
							<?php
							@$jum4=$no;
							$no++;
							?>
						@endforeach
					</p>
				</h4>
				<br>
			@endif
			@if(count($data5)>0)
				<h4>Rongga Hidung (Al-Khaisyum)</h4>
				<h4>
					<table>
						<tr>
						<?php
						$no=1;
						?>
						@foreach($data5 as $dt5)
							<td><a href="#" id="audio5{{ $no }}" value="{{ $dt5->id }}" style="font-size:25px;">{{ $dt5->teks }}</a></td>
							<?php
							@$jum3=$no;
							$no++;
							?>
						@endforeach
						</tr>
					</table>
				</h4>
				<br>
			@endif
		<div id="myplayer" style="display:none;"></div>
	</center>
	</div>
	
	@include('step1.menu')
	<?php
    $a=array();
    for($i=1; $i<=@$jum1; $i++)
    {
    	array_push($a,'#audio1'.$i);
    }
    $b=array();
    for($i=1; $i<=@$jum2; $i++)
    {
    	array_push($b,'#audio2'.$i);
    }
    $c=array();
    for($i=1; $i<=@$jum3; $i++)
    {
    	array_push($c,'#audio3'.$i);
    }
    $d=array();
    for($i=1; $i<=@$jum4; $i++)
    {
    	array_push($d,'#audio4'.$i);
    }
    $e=array();
    for($i=1; $i<=@$jum5; $i++)
    {
    	array_push($e,'#audio5'.$i);
    }
    $merge=array_merge_recursive($a,$b,$c,$d,$e);
    $btn=implode(',',$merge);
    ?>
@stop

@section('js')
	$("{{ $btn }}").click(function(e)
	{
		e.preventDefault();
		var token = $(this).attr('value');
		$.ajax({
			url:'{{ URL::to("tahap-pertama/callaudiotahap1") }}',
			type:'get',
			data:{tok:token},
			success:function(audio)
			{
				$('#myplayer').html(audio);
			}
		});
	});
@stop