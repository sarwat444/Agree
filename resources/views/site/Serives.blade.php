@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')

<section class="service-two service-two__service-page">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="{{asset('assets/images/SERVICES/1.png')}}" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="agrikon-icon-tractor"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html">{{ __('home.Business Development') }} </a></h3>
                        <p>{{ __('home.SUT works to Create developmental plans for agricultural facilities and projects to ensure maximum productivity that meets aspirations and targets') }}</p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="{{asset('assets/images/SERVICES/2.png')}}" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="agrikon-icon-organic-food"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html">{{ __('home.Management & Tech. Consulting') }} </a></h3>
                        <p>{{ __('home.Through a large network of technical and administrative specialist consultants, the Sustainable Union provides consulting services in a modern way that has an impact on the progress of the business level..') }} </p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="service-two__card">
                    <div class="service-two__card-image">
                        <img src="{{asset('assets/images/SERVICES/3.png')}}" alt="">
                    </div><!-- /.service-two__card-image -->
                    <div class="service-two__card-content">
                        <div class="service-two__card-icon">
                            <i class="agrikon-icon-vegetable"></i>
                        </div><!-- /.service-two__card-icon -->
                        <h3><a href="service-details.html">{{ __('home.Project management and operation') }}</a></h3>
                        <p>{{ __('home.At a steady pace, SUT it working to manage and operate agricultural and food transformation projects in accordance with the aspirations of the beneficiaries, whether through establishments or individuals') }} </p>
                    </div><!-- /.service-two__card-content -->
                </div><!-- /.service-two__card -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.service-two -->

<section class="feature-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-one__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>{{ __('home.What we’re offering') }}</p>
                        <h3>{{ __('home.Better Agriculture for Better Future') }} </h3>
                    </div><!-- /.block-title -->
                    <div class="feature-one__summery">
                        <p> {{ __('home.Sustainable Union Company has contracted with several international companies as their representative and commercial agent in the Kingdom of Saudi Arabia') }} </p>
                    </div><!-- /.feature-one__summery -->
                    <ul class="list-unstyled feature-one__check-list">
                        <li>
                            <i class="agrikon-icon-tick"></i>
                            {{ __('home.Management and technical consulting') }}

                        </li>
                        <li>
                            <i class="agrikon-icon-tick"></i>
                            {{ __('home.Project management and operation') }}

                        </li>
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.feature-one__content -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="feature-one__image">
                    <img src="{{asset('assets/images/OURGOAL/2.png')}}" alt="">
                </div><!-- /.feature-one__image -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.feature-one -->

<section class="call-to-action__two jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
    <img class="call-to-action__two__bg jarallax-img" src="assets/images/backgrounds/cta-2-bg-1.jpg" alt="parallax-image" />
    <div class="container">
        <h3>{{ __('home.Agriculture Matters to the Future') }} </h3>
        <a href="about.html" class="thm-btn">{{ __('home.Discover More') }} </a><!-- /.thm-btn -->
    </div><!-- /.container -->
</section><!-- /.call-to-action__two -->

<div class="client-carousel client-carousel__has-border-top">
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
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('site/en/assets/images/resources/brand-1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->




@endsection
@push('scripts')
@endpush

