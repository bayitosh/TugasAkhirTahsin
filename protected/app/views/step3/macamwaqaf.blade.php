@extends('layout.main')

@section('title')
	Tahap III > Macam-macam Waqaf - Belajar Al-Qur'an
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
		<center><h1 style="font-size:25px;">Macam-macam Waqaf</h1></center>
		<div id="ket2">
		Waqaf bertujuan mewujudkan bacaan Al-Qur’an dengan tartil. Jadi, seseorang belum dikatakan tartil membaca Al-Qur’an, 
		jika tidak memperhatikan waqaf dan ibtida' dengan benar. Secara umum waqaf dibagi 4 macam, sebagai berikut:
		
		<ol type="1">
			<li>Waqaf Idlthiraari adalah waqaf dalam keadaan darurat, seperti kehabisan napas, ketika bersin, menjawab salam dan sebagainya.</li>
			<li>Waqaf Intidzaari adalah waqaf yang dilakukan ketika menggabungkan bacaan Al-Qur’an dalam berbagai riwayat bacaan yang berbeda.</li>
			<li>Waqaf Idlthiraari adalah waqaf dalam keadaan darurat, seperti kehabisan napas, ketika bersin, menjawab salam dan sebagainya.</li>
			<li>Waqaf Ikhtibaari adalah waqaf yang dilakukan dalam proses ikhtibaari atau memberi penjelasan tentang hukum bacaan suatu ayat.</li>
			<li>Waqaf Idlthiraari adalah waqaf dalam keadaan darurat, seperti kehabisan napas, ketika bersin, menjawab salam dan sebagainya.</li>
			<li>
				Waqaf Ikhtiyaari adalah waqaf yang dipilih ketika seseorang membaca Al-Qur’an. Waqaf ini terbagi menjadi 4 macam yaitu :
					<ul>
					<li>Waqaf Tam</li>
					<li>Waqaf Kafi</li>
					<li>Waqaf Hasan</li>
					<li>Waqaf Qabih</li>
					</ul>
			</li>
		</div>
	</div>
	@include('step3.menu')
@stop