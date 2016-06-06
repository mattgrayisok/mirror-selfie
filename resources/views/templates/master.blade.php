<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>@yield('meta_title', 'MirrorSelfie')</title>
		<meta name="description" content="@yield('meta_description', 'All the selfies.')">
		<meta name="keywords" content="@yield('meta_keywords', 'mirror,selfie,instagram')" />
		<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
		
		@yield('meta_additional', '')
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!--[if lte IE 8]>
		<link rel="stylesheet" href="/assets/css/style-ie.css">
		<![endif]-->
		<!--[if gt IE 8]><!-->
		<link rel="stylesheet" href="/assets/css/style.css">
		<!--<![endif]-->

		<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	</head>
	<body class="">
		<div class="wrapper">
			@include('templates.commontop')
			@yield('allcontent')
			<div class="push"></div>
		</div>
		@include('templates.commonbottom')

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="{{ asset('assets/js/script.js') }}"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-57070436-1', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>
