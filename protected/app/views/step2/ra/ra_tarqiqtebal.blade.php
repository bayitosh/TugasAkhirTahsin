@extends('layout.main')

@section('title')
	Tahap Kedua > Hukum Ra' - Belajar Al-Qur'an
@stop

@section('header')
	<div id="header" data-role="header">
		<a href="#left-panel" data-iconpos="text" data-inline="true" data-shadow="true" data-iconshadow="false">Menu</a>
		<a href="{{ URL::to('/') }}" data-icon="back" data-ajax="false" data-rel="back">Back</a><br>
		<span><b>Tahap II <br>(Hukum Ra')</b></span>
	</div>
@stop

@section('content')
	<div id="content" data-role="content">
		<center><h1 style="font-size:25px;">Ra’ dibaca tebal (tafkhim)</h1></center><br>
	<div id="wrapfile">
		<div id="ket1">Ra’ berharakat sukun yang berada sebelum huruf isti’la(ق غ ظ ط ض ص خ). contoh lafadznya: </div> 
			<a href="قِرْ طَا سٌ#" value="{{ asset('files/step2/H_Hukum_Ra/b_Ra_tebal/tafkhim1.wav') }}" data-role="button" data-theme="a">قِرْ طَا سٌ</a>
		<br>
		<div id="ket1">Ra’ berharakat sukun yang berada setelah hamzah washal berharakat kasrah dan berada dalam satu kata. contoh lafadznya: </div>
			<a href="اِ رْ جِعِي#" value="{{ asset('files/step2/H_Hukum_Ra/b_Ra_tebal/tafkhim2.wav') }}" data-role="button" data-theme="a">اِ رْ جِعِي</a>
		<br>
		<div id="ket1">Ra’ berharakat sukun dengan kasrah aridh (hamzah washal), yang didahului dengan huruf berharakat kasrah dari kalimat-kalimat yang terpisah, contoh lafadznya: </div>
			<a href=" اَرْتَابُوْا#" value="{{ asset('files/step2/H_Hukum_Ra/b_Ra_tebal/tafkhim3.wav') }}" data-role="button" data-theme="a"> اَرْتَابُوْا</a>
		<br>
		<div id="ket1">Ra’ sukun setelah fathah dan dhammah, contoh lafadznya: </div> 
			<a href="اَلْقَمَرْ#" value="{{ asset('files/step2/H_Hukum_Ra/b_Ra_tebal/tafkhim4.wav') }}" data-role="button" data-theme="a">اَلْقَمَرْ</a>
		<br>
		<div id="ket1">Ra’ sukun setelah huruf waw( و ), alif( ا ), atau tanda sukun yang didahului oleh fathah dan dhammah, contoh lafadznya: </div> 
			<a href="مِنْ فُتُوْر#" value="{{ asset('files/step2/H_Hukum_Ra/b_Ra_tebal/tafkhim5.wav') }}" data-role="button" data-theme="a">مِنْ فُتُوْر</a>
		<br>
		<div id="myplayer" style="display:none;"></div>
		<div data-role="popup" id="popDisplay" data-theme="a" style="padding:10px 20px; font-size:25px;"></div>
	</div>
	</div>
	@include('step2.menu')
@stop

@section('js')
	$('#wrapfile').on('click','a',function()
	{
		var str=$(this).attr('href');
		var txt=str.length;
		offset=txt-1;
		var slice=str.slice(0,offset);
		var file = $(this).attr('value');
		$('#popDisplay').text(''+slice+'').popup('open');
		$('#myplayer').html('<audio src="'+file+'" autoplay="true"></audio>');
	});
@stop