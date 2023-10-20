<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @stack('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SUSTAINABLE UNION TRADING </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('site/en/assets/images/loader.png')}} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('site/en/assets/images/loader.png')}} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('site/en/assets/images/loader.png')}} ">
    <meta name="description" content=" SUSTAINABLE UNION TRADING ">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"  rel="stylesheet">
    @php
        if(app()->getLocale() == 'en')
            {
    @endphp
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/animate.min.css')}} ">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/jarallax.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/agrikon-icons.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/nouislider.pips.css')}} ">
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset(ASSET_URL.'site/en/assets/css/main.css')}}">
    @php
        }else
            {
    @endphp

    @php
        }
    @endphp
    @stack('styles')
</head>
<body>
<!--
<div class="preloader">
    <img class="preloader__image" width="55" src="{{asset('site/en/assets/images/loader.png')}}" alt="">
</div>
-->
<div class="page-wrapper">
    @include('site.includes.header')
    @yield('content')
    @include('site.includes.footer')
</div>

@php
    if(app()->getLocale() == 'en')
    {
@endphp
<script src="{{asset(ASSET_URL.'site/en/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/swiper.min.js')}} "></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/wow.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/odometer.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/jquery.appear.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/jarallax.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/circle-progress.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/wNumb.min.js')}}"></script>
<script src="{{asset(ASSET_URL.'site/en/assets/js/nouislider.min.js')}}"></script>
<!-- template js -->
<script src="{{asset(ASSET_URL.'site/en/assets/js/theme.js')}}"></script>
@php
    }else
        {
@endphp

@php
    }
@endphp
@stack('scripts')
</body>
</html>
