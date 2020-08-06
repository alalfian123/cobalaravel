
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alfian Iseng2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
        <link rel="stylesheet" href="{{ URL::to('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ URL::to('css/icomoon.css') }}">
	<!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
	<!-- Flexslider  -->
        <link rel="stylesheet" href="{{ URL::to('css/flexslider.css') }}">
	<!-- Theme style  -->
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
        
	<!-- Modernizr JS -->
        <script type="text/javascript"  src="{{ URL::to('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
                
                @include('layouts.sidebar')
                @yield('content-css')
                @yield('content')
		
	</div>

	<!-- jQuery -->
        <!--<script src="{{ URL::to('js/jquery.min.js') }}"></script>-->
        <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
        <script src="{{ URL::to('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
        <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
        <script src="{{ URL::to('js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
        <script src="{{ URL::to('js/jquery.flexslider-min.js') }}"></script>
	<!-- validate style  -->
        <script type="text/javascript" src="{{ URL::to('js/jquery.validate.min.js') }}"></script>
        <!-- validate style  -->
        <script src="{{ URL::to('js/bootbox.min.js') }}"></script>
	
	<!-- MAIN JS -->
        <script src="{{ URL::to('js/main.js') }}"></script>
        @yield('js-content')
	</body>
</html>

