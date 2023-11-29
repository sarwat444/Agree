@extends('site.layouts.app')
@push('styles')
@section('content')
<div class="page-wrapper">

    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": true,
    "effect": "fade",
    "autoplay": {
        "delay": 5000
    },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    }
}'>
            <div class="swiper-wrapper Top_slider">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgb(0 0 0 / 51%)), url({{asset('assets/images/SLIDER/SLIDER-1.png')}});">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <span class="tagline">{{ __('home.Welcome to Sustainable Union (SUT)') }}</span>
                                <h2><span> {{ __('home.Modern technologies and business development in the world of agriculture are at your fingertips Be with us') }}</span> </h2>
                                <a href="#" class=" thm-btn">{{ __('home.Discover More') }} </a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url({{asset('assets/images/SLIDER/SLIDER-2.png')}} );">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7">
                                <span class="tagline">{{ __('home.Welcome to Sustainable Union (SUT)') }} {{ __('home.The modern qualitative shift in the world of modifications in the world of agriculture') }}</span>
                                <h2><span> {{ __('home.Modern technologies and business development in the world of agriculture are at your fingertips Be with us') }}</span> </h2>
                                <a href="#" class=" thm-btn">{{ __('home.Discover More') }} </a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), linear-gradient(to bottom, rgba(0, 0, 0, 0.5), url("{{asset('assets/images/SLIDER/SLIDER-3.png')}}")>
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <span class="tagline">{{ __('home.Welcome to Sustainable Union (SUT)') }}</span>
                                <h2><span> {{ __('home.Modern technologies and business development in the world of agriculture are at your fingertips Be with us') }}</span> </h2>
                                <a href="#" class=" thm-btn">{{ __('home.Discover More') }} </a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('assets/images/SLIDER/SLIDER-4.png')}} );">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7">
                                <span class="tagline">{{ __('home.Welcome to Sustainable Union (SUT)') }} {{ __('home.The modern qualitative shift in the world of modifications in the world of agriculture') }}</span>
                                <h2><span> {{ __('home.Modern technologies and business development in the world of agriculture are at your fingertips Be with us') }}</span> </h2>
                                <a href="#" class=" thm-btn">{{ __('home.Discover More') }} </a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->

            </div><!-- /.swiper-wrapper -->

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
            </div><!-- /.main-slider__nav -->

        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->


    <section class="about-one">
        <img src="{{asset('site/en/assets/images/icons/about-bg-icon-1-1.png')}}" class="about-one__bg-shape-1" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-one__images">
                        <img src="{{asset('assets/images/ABOUTUS/ABOUT-US.png')}}" alt="">
                        <img src="{{asset('assets/images/ABOUTUS/ABOUT-US-2.png')}}" alt="" style="height: 353px;">
                        <div class="about-one__count wow fadeInLeft" data-wow-duration="1500ms">
                            <span>Trusted by</span>
                            <h4>8900</h4>
                        </div><!-- /.about-one__count -->
                    </div><!-- /.about-one__images -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-7">
                    <div class="about-one__content">
                        <div class="block-title text-left">
                            <div class="block-title__image"></div><!-- /.block-title__image -->
                            <p>{{ __('home.WELCOME TO SUT') }}</p>
                            <h3> {{ __('home.SUSTAINABLE UNION TRADING') }}</h3>
                        </div><!-- /.block-title -->
                        <div class="about-one__tagline">
                            <p>  {{ __('home.Sustainable Union (SUT) was established through an alliance of expertise in the agricultural sector') }}
                            </p>
                        </div><!-- /.about-one__tagline -->
                        <div class="about-one__summery">
                            <p> {{ __('home.with the aim of growing this sector and making it keep pace with modern technologies in the world of agricultural production and management.') }}</p>
                            <p> {{ __('home.Our goal') }}  {{ __('home.Is to make this sector more automated, modern way') }}  </p>
                            <p>{{ __('home.Our vision') }} {{ __('home.Is an agricultural world with added value that makes it a more attractive reality') }}   </p>

                        </div><!-- /.about-one__summery -->
                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="service-two">
        <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <p>{{ __('home.OUR SERVICES LIST') }}</p>
                <h3>{{ __('home.What We’re Offering') }}</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('assets/images/SERVICES/1.png')}}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-tractor"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="service-details.html">{{ __('home.Business Development') }} </a></h3>
                            <p>{{ __('home.SUT works to Create developmental plans for agricultural facilities and projects to ensure maximum productivity that meets aspirations and targets') }}  </p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('assets/images/SERVICES/2.png')}}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-organic-food"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="service-details.html">  {{ __('home.Management & Tech. Consulting') }}  </a></h3>
                            <p>{{ __('home.Through a large network of technical and administrative specialist consultants, the Sustainable Union provides consulting services in a modern way that has an impact on the progress of the business level..') }} </p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('assets/images/SERVICES/3.png')}}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-vegetable"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="service-details.html"> {{ __('home.Project management and operation') }} </a></h3>
                            <p>{{ __('home.At a steady pace, SUT it working to manage and operate agricultural and food transformation projects in accordance with the aspirations of the beneficiaries, whether through establishments or individuals') }}
                                </p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('site/en/assets/images/services/service-2-3.jpg')}}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-vegetable"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="service-details.html"> {{ __('home.Agricultural and environmental studies and surveys') }} </a></h3>
                            <p>{{ __('home.SUT conducts a field survey of environmental and agricultural diseases and develops plans to combat them through a field work team and with the participation of our partners from the contracted companies') }}
                            </p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-two -->

    <section class="dimetra_kanda">
        <div class="container">
                <div class="blog-card__content">
                    <h3 class="text-center"><a href="blog-details.html">
                            {{__('home.Sustainable Union Company has contracted with several international companies as their representative and commercial agent in the Kingdom of Saudi Arabia')}}
                        </a></h3>
                </div><!-- /.blog-card__content -->

            <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog-details__content">
                                        <h3 style="font-size: 21px;font-weight: bold;margin-bottom: 27px;color: #74ca26;"> {{__('home.Dimitra Tech. ( Canada )')}} </h3>
                                        <p>{{__('home.dim_desc')}}</p>
                                    </div><!-- /.blog-details__content -->
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <div class="blog-details__content">
                                    <h3 style="font-size: 21px;font-weight: bold;margin-bottom: 27px;color: #74ca26;"> {{__('home.SAMMI GLORY LTD. (South Korean)')}}</h3>
                                    <p>
                                        {{__('home.simi_desc')}}
                                    </p>
                                </div><!-- /.blog-details__content -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="blog-details__content">
                                    <h3 style="font-size: 21px;font-weight: bold;margin-bottom: 27px;color: #74ca26;"> {{__('home.Grow 4 Max Company (China)')}} </h3>
                                    <p>
                                        {{__('home.Grow')}}
                                    </p>
                                </div><!-- /.blog-details__content -->
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    <div class="projects-one project-one__home-one mt-5">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <h3>{{__('home.Latest Projects List')}}</h3>
            </div><!-- /.block-title -->
            <div class="thm-swiper__slider swiper-container swiper-container-initialized swiper-container-horizontal" data-swiper-options="{&quot;spaceBetween&quot;: 0, &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;slidesPerGroup&quot;: 1, &quot;pagination&quot;: {
            &quot;el&quot;: &quot;#projects-one__swiper-pagination&quot;,
            &quot;type&quot;: &quot;bullets&quot;,
            &quot;clickable&quot;: true
        },
        &quot;breakpoints&quot;: {
            &quot;0&quot;: {
                &quot;spaceBetween&quot;: 0,
                &quot;slidesPerView&quot;: 1,
                &quot;slidesPerGroup&quot;: 1
            },
            &quot;640&quot;: {
                &quot;spaceBetween&quot;: 30,
                &quot;slidesPerView&quot;: 2,
                &quot;slidesPerGroup&quot;: 2
            },
            &quot;992&quot;: {
                &quot;spaceBetween&quot;: 30,
                &quot;slidesPerView&quot;: 2,
                &quot;slidesPerGroup&quot;: 2
            }
        }}">
                <div class="swiper-wrapper" style="transform: translate3d(-1200px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 570px; margin-right: 30px;">
                        <div class="projects-one__single">
                            <img src="{{asset('assets/images/PROJECTS/PROJECT-1.png')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="5" style="width: 570px; margin-right: 30px;">
                        <div class="projects-one__single">
                            <img src="{{asset('assets/images/PROJECTS/PROJECT-2.png')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 570px; margin-right: 30px;">
                        <div class="projects-one__single">
                            <img src="{{asset('assets/images/PROJECTS/PROJECT-3.png')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 570px; margin-right: 30px;">
                        <div class="projects-one__single">
                            <img src="{{asset('assets/images/PROJECTS/PROJECT-4.png')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide" data-swiper-slide-index="2" style="width: 570px; margin-right: 30px;">
                        <div class="projects-one__single">
                            <img src="{{asset('assets/images/PROJECTS/PROJECT-4.png')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                        <div class="projects-one__single">
                            <img src="assets/images/projects/project-2-2.jpg" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div></div><!-- /.swiper-wrapper -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" id="projects-one__swiper-pagination"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div><!-- /.swiper-container -->
        </div><!-- /.container -->
    </div>


    <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
        <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="call-to-action__three-image">
                        <img src="{{asset('assets/images/OURGOAL/1.png')}}" alt="">
                    </div><!-- /.call-to-action__three-image -->
                </div><!-- /.col-lg-5 -->
                <div class="col-lg-7">
                    <div class="call-to-action__three-content">
                        <h3> {{ __('home.Our goal') }}</h3>
                        <p> {{ __('home.Is to make this sector more automated, modern way') }}  </p>
                        <h3> {{ __('home.Our vision') }}  </h3>
                        <p>{{ __('home.Is an agricultural world with added value that makes it a more attractive reality') }}   </p>
                        <a href="about.html" class="thm-btn">{{ __('home.Discover More') }} </a><!-- /.thm-btn -->
                    </div><!-- /.call-to-action__three-content -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action__three -->

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
                <div class="swiper-wrapper brands">
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



                </div><!-- /.swiper-wrapper -->
            </div><!-- /.thm-swiper__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->
 @endsection
@push('scripts')
    <script>
        $(document).ready(function (){
            $('.Top_slider .swiper-wrapper').height( $(window).height()) ;
        });
    </script>
@endpush

