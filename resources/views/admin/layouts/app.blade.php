<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8" />
    <title>@stack('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <!-- Bootstrap Css -->
    {{-- id="bootstrap-style" --}}
    @if(app()->getLocale() == 'ar')
        <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/css/bootstrap-rtl.min.css')}}"  rel="stylesheet" type="text/css" />
        @else
        <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/css/bootstrap.min.css')}}"  rel="stylesheet" type="text/css" />
    @endif

    <!-- Icons Css -->
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    {{-- id="app-style" --}}
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/css/app.min.css')}}"   rel="stylesheet" type="text/css" />
    <script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/pace.min.js')}}"></script>
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/css/pace.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/css/custom-responsive.css')}}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(app()->getLocale() == 'ar')
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"  rel="stylesheet">
        <link href="{{asset(ASSET_URL_PUBLIC.'/assets/admin/css/app-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <style>
            body
            {
                direction: rtl;
                font-family: 'Cairo', sans-serif !important;
            }
            html
            {
                font-family: 'Cairo', sans-serif !important;
            }
            .main-content
            {
                margin-left: 0;
            }
            body[data-sidebar=dark] .navbar-brand-box {
                background: #002187;
            }
        </style>
    @endif
    @stack('styles')
</head>

<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    @include('admin.partials.header')

    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.partials.side-menu')
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('admin.partials.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
@include('admin.partials.right-bar')
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/libs/node-waves/waves.min.js')}}"></script>

{{-- this file under comment control language files --}}
<script src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/app.js')}}"></script>
<script  src="{{asset(ASSET_URL_PUBLIC.'/assets/admin/js/flasher.min.js')}}"></script>
@include('admin.partials.scripts.flash-messages')
@include('admin.partials.scripts.remove-is-invalid-class-inputs')
@include('admin.partials.scripts.automatic-validation-flash')
@include('admin.partials.scripts.constants-localization')
@include('admin.partials.scripts.search')
@stack('scripts')
</body>
</html>
