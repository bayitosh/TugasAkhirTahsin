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
	<center>
		<h1 style="font-size:25px;">Sifat-sifat Huruf</h1>
		<div id="ket1">
		Sifat huruf adalah karakteristik atau keadaan yang melekat pada suatu huruf. 
		Setiap huruf hijaiyah mempunyai sifat tersendiri yang bisa jadi berbeda atau sama denga huruf lain. 
		Secara garis besar, sifat-sifat huruf terbagi dua, yaitu sifat huruf yang memiliki lawan dan sifat huruf yang tidak memiliki lawan.
		</div>
		<br>
		<center>{{ HTML::image('img/t1makharijul.jpg') }}</center>
		<h2 style="font-size:20px;">Sifat huruf yang memiliki lawan</h2>
		<h4>Segi Nafas</h4>
		<div class="ui-grid-a">
		    <div class="ui-block-a">
		    	<div class="ui-bar ui-bar-a" id="oneside">
		    		<h3>Al-Hams (mengalir napas)</h3>
		    		<br>
					    <select id="audio1">
					    	<option value="">Huruf</option>
					    	@foreach($data1 as $dt1)
						        <option value="{{ $dt1->id }}">{{ $dt1->teks }}</option>
					        @endforeach
					    </select>
		    	</div>
		    </div>
		    <div class="ui-block-b" id="twoside">
		    	<div class="ui-bar ui-bar-e">
		    		<h3>Al-Jahr (tidak mengalir napas)</h3>
		    		<br>
		    		<select id="audio2">
					    <option value="">Huruf</option>
					   	@foreach($data2 as $dt2)
						    <option value="{{ $dt2->id }}">{{ $dt2->teks }}</option>
					    @endforeach
					</select>
		    	</div>
		    </div>
		</div>
		<br>
		<h4>Segi Suara</h4>
		<div class="ui-grid-a">
		    <div class="ui-block-a">
		    	<div class="ui-bar ui-bar-a" id="oneside">
		    		<h3>Syiddah (tertahan suara)</h3>
		    		<br>
		    		<select id="audio3">
					    <option value="">Huruf</option>
					   	@foreach($data3 as $dt3)
						    <option value="{{ $dt3->id }}">{{ $dt3->teks }}</option>
					    @endforeach
					</select>
		    	</div>
		    </div>
		    <div class="ui-block-b" id="twoside">
		    	<div class="ui-bar ui-bar-e">
		    		Ar-Rakhawah (mengalir suara/lembut)
					Selain huruf disamping semuanya tidak tertahan/lembut ketika diucapkan.
		    	</div>
		    </div>
		</div>
		<br>
		<h4>Posisi Pangkal Lidah</h4>
		<div class="ui-grid-a">
		    <div class="ui-block-a">
		    	<div class="ui-bar ui-bar-a" id="oneside">
		    		<h3>Isti’la (terangkatnya lidah)</h3>
		    		<br>
		    		<select id="audio4">
					    <option value="">Huruf</option>
					   	@foreach($data4 as $dt4)
						    <option value="{{ $dt4->id }}">{{ $dt4->teks }}</option>
					    @endforeach
					</select>
		    	</div>
		    </div>
		    <div class="ui-block-b" id="twoside">
		    	<div class="ui-bar ui-bar-e">
		    		Istifal (pangkal lidah tidak terangkat) Selain huruf disamping semuanya tidak terangkat.
		    	</div>
		    </div>
		</div>
		<br>
		<h4>Menutup atau tidaknya lidah ke langit-langit</h4>
		<div class="ui-grid-a">
		    <div class="ui-block-a">
		    	<div class="ui-bar ui-bar-a" id="oneside">
		    		<h3>Ithbaq (menutupi langit-langit)</h3>
		    		<br>
		    		<select id="audio5">
					    <option value="">Huruf</option>
					   	@foreach($data5 as $dt5)
						    <option value="{{ $dt5->id }}">{{ $dt5->teks }}</option>
					    @endforeach
					</select>
		    	</div>
		    </div>
		    <div class="ui-block-b" id="twoside">
		    	<div class="ui-bar ui-bar-e">
				    Infitah (terbuka langit-langit)	Selain huruf di samping, semua huruf terbuka langit-langit.
		    	</div>
		    </div>
		</div>
		<br>
		<h4>Sulit atau mudahnya huruf dikeluarkan</h4>
		<div class="ui-grid-a">
		    <div class="ui-block-a">
		    	<div class="ui-bar ui-bar-a" id="oneside">
		    		<h3>Idzlaq (mudah dikeluarkan)</h3>
		    		<br>
		    		<select id="audio6">
					    <option value="">Huruf</option>
					   	@foreach($data6 as $dt6)
						    <option value="{{ $dt6->id }}">{{ $dt6->teks }}</option>
					    @endforeach
					</select>
		    	</div>
		    </div>
		    <div class="ui-block-b" id="twoside">
		    	<div class="ui-bar ui-bar-e">
		    		Ishmat (sulit dikeluarkan) Semua huruf selain di samping ini sulit dikeluarkannya.
		    	</div>
		    </div>
		</div>
		<div id="myplayer" style="display:none;"></div>
	</center>
	</div>
	@include('step1.menu')
@stop

@section('js')
	$('#audio1, #audio2, #audio3, #audio4, #audio5, #audio6').change(function(e)
	{
		e.preventDefault();
		var id = $(this).val();
		$.ajax({
			url:'{{ URL::to("tahap-pertama/callaudiotahap1") }}',
			type:'get',
			data:{tok:id},
			success:function(audio)
			{
				$('#myplayer').html(audio);
			}
		});
	});
@stop