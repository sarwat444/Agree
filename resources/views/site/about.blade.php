@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('site/en/assets/images/backgrounds/page-header-bg-1-1.jpg')}});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">{{ __('home.Home') }}</a></li>
                <li>/</li>
                <li><span>{{ __('home.About Us') }} </span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>{{ __('home.About Us') }}  </h2>
        </div><!-- /.container -->
    </section>
    <section class="about-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-three__image">
                        <img src="{{asset('site/en/assets/images/resources/about-3-2.jpg')}}" alt="">
                    </div><!-- /.about-three__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-7">
                    <div class="about-three__content">
                        <div class="block-title">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>{{ __('home.Get to know us') }} </p>
                            <h3>{{ __('home.Sustainable Union Trading (SUT)') }} </h3>
                        </div><!-- /.block-title -->
                        <ul class="about-three__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                {{ __('home.Agricultural technologies') }}

                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                {{ __('home.Developing administrative work') }}


                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                {{ __('home.Management and technical consulting') }}


                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                {{ __('home.Project management and operation') }}

                            </li>
                        </ul><!-- /.about-three__list list-unstyled -->
                        <div class="about-three__summery">
                            <p>
                                {{ __('home.Sustainable Union (SUT) was established through an alliance of expertise in the agricultural sector with the aim of growing this sector and making it keep pace with modern technologies in the world of agricultural production and management.') }}

                               <h3 class="goal"> {{ __('home.Our goal')}} </h3>

                                {{ __('home.Is to make this sector more automated, modern way')}}


                               <h3 class="target">{{ __('home.Our vision')}}</h3>

                                {{ __('home.Is an agricultural world with added value that makes it a more attractive reality')}}


                            </p>
                        </div><!-- /.about-three__summery -->

                    </div><!-- /.about-three__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-three -->


    <div class="client-carousel client-carousel__has-border-top client-carousel__about-page">
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
        "0": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "375": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "767": {
            "spaceBetween": 50,
            "slidesPerView": 4
        },
        "991": {
            "spaceBetween": 50,
            "slidesPerView": 5
        },
        "1199": {
            "spaceBetween": 100,
            "slidesPerView": 5
        }
    }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->                  <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->                  <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->


            </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->


<section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">


    <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
    <!-- /.call-to-action__bg -->
    <div class="container">
        <div class="call-to-action__content">
            <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
            <h3>{{ __('home.Is an agricultural world with added value that makes it a more attractive reality') }}</h3>
        </div><!-- /.call-to-action__content -->
        <div class="call-to-action__button">
            <a href="services.html" class="thm-btn">{{ __('home.Discover More') }} </a><!-- /.thm-btn -->
        </div><!-- /.call-to-action__button -->
    </div><!-- /.container -->
</section><!-- /.call-to-action -->

@endsection
@push('scripts')
@endpush

