@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">{{ __('home.Home') }}</a></li>
            <li>/</li>
            <li><span>{{ __('home.Join Us') }} </span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>{{ __('home.Join Us') }} </h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="service-one service-one__about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-1.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="{{route('site.Twaezef_Model')}}">{{ __('home.Tawzef Model') }}</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->

            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-2.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="{{route('site.Consltant_Model')}}">{{ __('home.Consultant registration form') }}</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-3.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="{{route('site.s_gab')}}">{{ __('home.Agricultural inspector S-GAP') }} </a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-3.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="{{route('site.view_service_requester')}}">{{ __('home.Services requester') }}  </a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-one -->

@endsection
@push('scripts')
@endpush

