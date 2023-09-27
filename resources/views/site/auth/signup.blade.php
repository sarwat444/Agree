@extends('site.layouts.app')
@push('styles')
    <style>
        .login-image img
        {
            min-height: 511px;
            object-fit: contain;
        }
    </style>
@endpush
@section('content')
<title>SignUp</title>
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Register</a></li>
        </ul>
        <div class="row">
            <div class="col-md-6">
                            <div id="content">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                <div style="padding-top: 15px">
                                    <div class="col-sm-10">
                                        {{__('home.Register As')}} :
                                        <label class="radio-inline">
                                            <input type="radio" name="newsletter" value="supplier" class="registerType" checked> {{__('home.Supplier')}}
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="newsletter" value="buyer" class="registerType">{{__('home.Buyer')}}
                                        </label>
                                    </div>
                                    <div class="supplier_registeration" >
                                    @include('site.auth.registeration.supplier')
                                    </div>
                                    <div class="buyer_registeration">
                                    @include('site.auth.registeration.buyer')
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                <div class="row">
                        <div class="col-sm-6">
                            <div class="login-image">
                                <img src="{{asset(ASSET_URL.'/images/login_image.avif')}}" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="login-image">
                                <img src="{{asset(ASSET_URL.'/images/login_image2.avif')}}" >
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Main Container -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function (){

            // Select first radio by default
            window.addEventListener('load', () => {
                document.querySelector('input[name="newsletter"]:first-child').checked = true;
            })

            $('.buyer_registeration').hide();

           $('.registerType').on('change' , function (){

            registerType = $(this).val();

            if(registerType == "supplier")
            {
                $('.supplier_registeration').show();
                $('.buyer_registeration').hide();
            }else{
                $('.buyer_registeration').show();
                $('.supplier_registeration').hide();
            }

           });
        });
    </script>
@endpush
