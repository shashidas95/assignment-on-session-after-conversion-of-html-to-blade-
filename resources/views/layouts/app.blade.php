<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cosmix </title>
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!--Stylesheets-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!--Responsive-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!--Animation-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <!--Prettyphoto-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">
    <!--Font-Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <!--Owl-Slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.transitions.css') }}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  [endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    {{-- @yield('content') --}}

    {{-- @include('layouts.footer') --}}


    <!--Jquery-->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <!--Boostrap-Jquery-->
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!--Preetyphoto-Jquery-->
    <script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <!--NiceScroll-Jquery-->
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <!--Isotopes-->
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.js') }}"></script>
    <!--Wow-Jquery-->
    <script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>
    <!--Count-Jquey-->
    <script type="text/javascript" src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.inview.min.js') }}"></script>
    <!--Owl-Crousels-Jqury-->
    <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    <!--Main-Scripts-->
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
