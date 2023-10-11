@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li>/</li>
            <li><span>Join Us</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2>Join Us</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="service-one service-one__about">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__image"></div><!-- /.block-title__image -->
            <p>Join us</p>
            <h3>Choose  Your Form </h3>
        </div><!-- /.block-title -->
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-1.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="{{route('site.Twaezef_Model')}}">Tawzef Model</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->

            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-2.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="{{route('site.Consltant_Model')}}">Consultant registration form</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-3.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Agricultural inspector <br> S-GAP</a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->
            <div class="col-md-12 col-lg-3">
                <div class="service-one__box">
                    <img src="{{asset(ASSET_URL.'site/en/assets/images/services/service-1-3.jpg')}}" alt="">
                    <div class="service-one__box-content">
                        <h3><a href="service-details.html">Services requester </a></h3>
                    </div><!-- /.service-one__box-content -->
                </div><!-- /.service-one__box -->
            </div><!-- /.col-md-12 col-lg-4 -->





        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-one -->

@endsection
@push('scripts')
@endpush

