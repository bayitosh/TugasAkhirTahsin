@extends('layout.main')

@section('title')
	Tahap Pertama (Pengenalan Huruf Hijaiyah) > Sifat-sifat huruf - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Sifat-sifat Huruf</h1><br>
		<div id="ket1">
		Sifat huruf adalah karakteristik atau keadaan yang melekat pada suatu huruf. 
		Setiap huruf hijaiyah mempunyai sifat tersendiri yang bisa jadi berbeda atau sama denga huruf lain. 
		Secara garis besar, sifat-sifat huruf terbagi dua, yaitu sifat huruf yang memiliki lawan dan sifat huruf yang tidak memiliki lawan.
		</div>
		<br>
		<center>{{ HTML::image('img/t1makharijul.jpg') }}</center>
		<center><h2 style="font-size:20px;">Sifat huruf yang tidak memiliki lawan</h2><br>
		<div id="shafir">
		<h4>Shafir adalah huruf yang ketika diucapkan mengeluarkan suara desis. Contoh :</h4>
			@if(count($data1)>0)
				<?php $no1=1; ?>
				@foreach($data1 as $dt1)
					<a href="#" id="audio1{{ $no1 }}" data-theme="a" data-role="button" value="{{ $dt1->id }}">{{ $dt1->teks }}</a>
					<?php
					@$jum1=$no1;
					$no1++;
					?>
				@endforeach
			@endif
		</div>
		<br>
		<h4>Qalqalah adalah bergetar (getaran makhraj ketika mengucapkan huruf-huruf sukun. Contoh:</h4>
			@if(count($data2)>0)
				<?php $no2=1; ?>
				@foreach($data2 as $dt2)
					<a href="#" id="audio2{{ $no2 }}" data-theme="a" data-role="button" value="{{ $dt2->id }}">{{ $dt2->teks }}</a>
					<?php
					@$jum2=$no2;
					$no2++;
					?>
				@endforeach
			@endif
		<br>
		<h4>Liin artinya lembut, sehingga cara mengucapkannya lembut. Huruf sebelumnya berharakat fathah. Contoh:</h4>
			@if(count($data3)>0)
				<?php $no3=1; ?>
				@foreach($data3 as $dt3)
					<a href="#" id="audio3{{ $no3 }}" data-theme="a" data-role="button" value="{{ $dt3->id }}">{{ $dt3->teks }}</a>
					<?php
					@$jum3=$no3;
					$no3++;
					?>
				@endforeach
			@endif
		<br>
		<h4>Inhiraf adalah huruf yang diucapkan miring dari ujung lidah. Contoh:</h4>
			@if(count($data4)>0)
				<?php $no4=1; ?>
				@foreach($data4 as $dt4)
					<a href="#" id="audio4{{ $no4 }}" data-theme="a" data-role="button" value="{{ $dt4->id }}">{{ $dt4->teks }}</a>
					<?php
					@$jum4=$no4;
					$no4++;
					?>
				@endforeach
			@endif
		<br>
		<h4>Takrir artinya mengulangi. Cara pengucapannya disertai dengan bergetarnya ujung lidah. Contoh:</h4>
			@if(count($data5)>0)
				<?php $no5=1; ?>
				@foreach($data5 as $dt5)
					<a href="#" id="audio5{{ $no5 }}" data-theme="a" data-role="button" value="{{ $dt5->id }}">{{ $dt5->teks }}</a>
					<?php
					@$jum5=$no5;
					$no5++;
					?>
				@endforeach
			@endif
		<br>
		<h4>6). Tafasyi</h4><br>
			artinya menyebar. Cara pengucapan hurufnya disertai menyebarnya angin dalam mulut.<br>
			Contoh:
			@if(count($data6)>0)
				<?php $no6=1; ?>
				@foreach($data6 as $dt6)
					<a href="#" id="audio6{{ $no6 }}" data-theme="a" data-role="button" value="{{ $dt6->id }}">{{ $dt6->teks }}</a>
					<?php
					@$jum6=$no6;
					$no6++;
					?>
				@endforeach
			@endif
		<br>
		<h4>7). Istithalah </h4><br>
			artinya memanjang. Cara pengucapannya dengan memanjangkan suara pada sisi lidah.<br>
			Contoh:
			@if(count($data7)>0)
				<?php $no7=1; ?>
				@foreach($data7 as $dt7)
					<a href="#" id="audio7{{ $no7 }}" data-theme="a" data-role="button" value="{{ $dt7->id }}">{{ $dt7->teks }}</a>
					<?php
					@$jum7=$no7;
					$no7++;
					?>
				@endforeach
			@endif
		</center>
		<div id="myplayer" style="display:none;"></div>
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
    $f=array();
    for($i=1; $i<=@$jum6; $i++)
    {
    	array_push($f,'#audio6'.$i);
    }
    $g=array();
    for($i=1; $i<=@$jum7; $i++)
    {
    	array_push($g,'#audio7'.$i);
    }
    $merge=array_merge_recursive($a,$b,$c,$d,$e,$f,$g);
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