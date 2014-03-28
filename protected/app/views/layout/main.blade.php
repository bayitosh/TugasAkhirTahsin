<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/jqm.css') }}
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('awesome/css/font-awesome.css') }}
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/facebox.css') }}
</head>
<body>
	<div id="page" data-role="page" data-dom-cache="false">
		@yield('header')
		@yield('breadcrumb')
		@yield('content')
		<div id="footer" data-role="footer" data-position="fixed">
			<a href="{{ URL::to('/') }}" data-ajax='false'>Pembelajaran & Evaluasi Tahsin Al-Qur'an</a>
		</div>
	</div>
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/jqm.js') }}
	<script>
	$('.pagination ul').addClass('pagination');
	$('.pagination ul li a').attr('data-ajax','false');
	$(document).on('pageinit','#page',function()
	{
		@yield('js')
	});
	</script>
</body>
</html>
