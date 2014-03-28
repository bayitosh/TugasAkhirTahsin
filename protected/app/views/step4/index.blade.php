@extends('layout.main')

@section('title')
	Tahap IV > Bacaan Gharib - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap IV</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center>{{ HTML::image('img/basmallah.png') }}</center>
		<center><h1 style="font-size:25px;">Bacaan Gharib</h1></center>
		<div id="ket2">
			Lafal gharib berasal dari bahasa Arab, yakni jamak dari gharibah yang berarti asing atau sulit. 
			Apabila dihubungkan dengan Al-Qur’an maka yang dimaksudkan adalah ayat-ayat Al-Qur’an yang yang 
			sukar pemahamannya sehingga hampir-hampir tidak dimengerti. Menurut Muchotob Hamzah, 
			Gharib Al-Qur'an adalah Ilmu Al-Qur’an yang membahas mengenai arti kata dari kata-kata yang 
			ganjil dalam Al-Qur’an yang tidak biasa digunakan dalam percakapan sehari-hari. 
			Banyak riwayat gharib diantaranya Hafs, Qunbul, al-Bazzi, Khalaf, Khallad, Al-Susi dan masih ada lagi. 
			Diantara banyak riwayat yang disebutkan, yang paling terkenal diantaranya adalah riwayat imam hafsh dari imam asim. 
			Ada 3 alasan utama yang menyebabkan riwayat hafsh menjadi sangat popular yakni:
			<ol type="1">
				<li>Bacaan asing atau bacaan sulit yang terdapat di dalam riwayat hafsh tidak begitu banyak yaitu satu imalah yang terdapat dalam surat Hud, satu tahsil dalam surat Fussilat, satu raum atau isymam dalam surat Yusuf, empat tempat saktah dalam surat Al-Kahf, Yasis, Al-Haqqah, dan Al-Mutaffifin dan beberapa bacaan asing lainnya</li>
				<li>Sanadnya bersambung dari beliau hingga Rasulullah SAW tanpa wasitah atau perantara sebagaimana beberapa riwayat lainnya. Imam hafsh bertalaqqi dan mempelajari Al-Qur’an dari Imam Asim. Imam Asim pula bertalaqqi dari gurunya Abu Abdulrahman Al-Sulami yang menekuni bacaan Al-Qur’an dari pada gurunya Ali Ibn Abi Talib r.a yang mengambil Al-Qur’an dari pada Rasulullah SAW</li>
				<li>Semua pembawa sanad riwayat hafsh adalah ulama Al-Qur’an yang tersohor dan sangat dipercayai di zaman mereka</li>
			</ol>
		</div>
	</div>
	@include('step4.menu')
@stop