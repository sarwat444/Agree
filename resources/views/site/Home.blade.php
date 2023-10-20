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
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{asset('site/en/assets/images/main-slider/main-slider-1-1.jpg')}});">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7">
                                <span class="tagline">Welcome to Sustainable Union (SUT) </span>
                                <h2><span>Sustainable Union Trading</span> <br>
                                    (SUT) </h2>
                                <a href="#" class=" thm-btn">Discover More</a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url({{asset('site/en/assets/images/main-slider/main-slider-1-2.jpg')}} );">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7">
                                <span class="tagline">Welcome to Sustainable Union (SUT) </span>
                                <h2><span>Sustainable Union Trading</span> <br>
                                    (SUT) </h2>
                                <a href="#" class=" thm-btn">Discover More</a>
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

    <section class="service-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img src="{{asset('site/en/assets/images/services/service-1-1.jpg')}}" alt="">
                        <div class="service-one__box-content">
                            <h3><a href="service-details.html">Developing technical and administrative work</a></h3>
                        </div><!-- /.service-one__box-content -->
                    </div><!-- /.service-one__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img src="{{asset('site/en/assets/images/services/service-1-2.jpg')}}" alt="">
                        <div class="service-one__box-content">
                            <h3><a href="service-details.html">Management and technical consulting</a></h3>
                        </div><!-- /.service-one__box-content -->
                    </div><!-- /.service-one__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
                <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="service-one__box">
                        <img src="{{asset('site/en/assets/images/services/service-1-3.jpg')}}" alt="">
                        <div class="service-one__box-content">
                            <h3><a href="service-details.html">Project management and operation</a></h3>
                        </div><!-- /.service-one__box-content -->
                    </div><!-- /.service-one__box -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-one -->

    <section class="about-one">
        <img src="{{asset('site/en/assets/images/icons/about-bg-icon-1-1.png')}}" class="about-one__bg-shape-1" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-one__images">
                        <img src="{{asset('site/en/assets/images/resources/about-1-1.jpg')}}" alt="">
                        <img src="{{asset('site/en/assets/images/resources/about-1-2.jpg')}}" alt="">
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
                            <p>Welcome to SUT</p>
                            <h3> SUSTAINABLE UNION TRADING </h3>
                        </div><!-- /.block-title -->
                        <div class="about-one__tagline">
                            <p>Sustainable Union (SUT) was established through an alliance
                                of expertise in the agricultural sector
                            </p>
                        </div><!-- /.about-one__tagline -->
                        <div class="about-one__summery">
                            <p>with the aim of growing this sector and making it keep pace with modern technologies in the world
                                of agricultural production and management.</p>
                        </div><!-- /.about-one__summery -->
                        <a href="about.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
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
                <p>Our Services list</p>
                <h3>What We’re Offering</h3>
            </div><!-- /.block-title -->
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('site/en/assets/images/services/service-2-1.jpg')}}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-tractor"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="service-details.html">Business Development </a></h3>
                            <p>SUT works to Create developmental plans for agricultural facilities and projects to ensure maximum productivity that meets aspirations and targets .</p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('site/en/assets/images/services/service-2-2.jpg')}}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-organic-food"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="service-details.html">  Management & Tech. Consulting </a></h3>
                            <p>Through a large network of technical and administrative specialist consultants, the Sustainable Union provides consulting services in a modern way that has an impact on the progress of the business level..</p>
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
                            <h3><a href="service-details.html">Project management and operation</a></h3>
                            <p>
                                At a steady pace, SUT it working
                                to manage and operate agricultural and food transformation projects in accordance with
                                the aspirations of the beneficiaries, whether through establishments or individuals.</p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="service-two__card">
                        <div class="service-two__card-image">
                            <img src="{{asset('site/en/assets/images/services/service-2-4.jpg')}}" alt="">
                        </div><!-- /.service-two__card-image -->
                        <div class="service-two__card-content">
                            <div class="service-two__card-icon">
                                <i class="agrikon-icon-dairy"></i>
                            </div><!-- /.service-two__card-icon -->
                            <h3><a href="service-details.html">Project management and operation</a></h3>
                            <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                        </div><!-- /.service-two__card-content -->
                    </div><!-- /.service-two__card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-two -->

    <div class="projects-one project-one__home-one">
        <div class="container">
            <div class="block-title text-center">
                <div class="block-title__image"></div><!-- /.block-title__image -->
                <p> Closed projects</p>
                <h3>Latest Projects List</h3>
            </div><!-- /.block-title -->
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
        "el": "#projects-one__swiper-pagination",
        "type": "bullets",
        "clickable": true
    },
    "breakpoints": {
        "0": {
            "spaceBetween": 0,
            "slidesPerView": 1,
            "slidesPerGroup": 1
        },
        "640": {
            "spaceBetween": 30,
            "slidesPerView": 2,
            "slidesPerGroup": 2
        },
        "992": {
            "spaceBetween": 30,
            "slidesPerView": 2,
            "slidesPerGroup": 2
        }
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{asset('site/en/assets/images/projects/project-2-1.jpg')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{asset('site/en/assets/images/projects/project-2-2.jpg')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{asset('site/en/assets/images/projects/project-2-3.jpg')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{asset('site/en/assets/images/projects/project-2-4.jpg')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{asset('site/en/assets/images/projects/project-2-2.jpg')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="projects-one__single">
                            <img src="{{asset('site/en/assets/images/projects/project-2-4.jpg')}}" alt="">
                            <div class="projects-one__content">
                                <h3>Harvest Innovation</h3>
                                <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                            </div><!-- /.projects-one__content -->
                        </div><!-- /.projects-one__single -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
                <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
            </div><!-- /.swiper-container -->
        </div><!-- /.container -->
    </div><!-- /.projects-one -->

    <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
        <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                    <div class="call-to-action__three-image">
                        <img src="{{asset('site/en/assets/images/resources/cta-3-1.jpg')}}" alt="">
                        <img src="assets/images/resources/cta-3-2.jpg" alt="">
                    </div><!-- /.call-to-action__three-image -->
                </div><!-- /.col-lg-5 -->
                <div class="col-lg-7">
                    <div class="call-to-action__three-content">
                        <h3>Our goal </h3>
                        <p> Is to make this sector more automated, modern way </p>
                        <h3>Our vision </h3>
                        <p> Is an agricultural world with added value that makes it a more attractive reality </p>
                        <a href="about.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                    </div><!-- /.call-to-action__three-content -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action__three -->

    <section class="testimonials-one">
        <img src="{{asset('site/en/assets/images/icons/testimonials-bg-1-1.png')}}" class="testimonials-one__bg" alt="">
        <div class="container">
            <h2 class="testimonials-one__title">Testimonials</h2>
            <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div><!-- /.testimonials-one__icons -->
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div><!-- /.testimonials-one__icons -->
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__icons">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div><!-- /.testimonials-one__icons -->
                        <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly
                            refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure dolor in
                            reprehenderit in esse nulla pariatur.</p>
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /#testimonials-one__carousel -->

            <div id="testimonials-one__thumb" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="{{asset('site/en/assets/images/resources/testimonials-1-1.jpg')}}" alt="">
                        </div><!-- /.testimonials-one__image -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="{{asset('site/en/assets/images/resources/testimonials-1-2.jpg')}}" alt="">
                        </div><!-- /.testimonials-one__image -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__image">
                            <img src="{{asset('site/en/assets/images/resources/testimonials-1-2.jpg')}}" alt="">
                        </div><!-- /.testimonials-one__image -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /#testimonials-one__thumb.swiper-container -->

            <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Jessica Brown</h4>
                            <span>Customer</span>
                        </div><!-- /.testimonials-one__meta -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Caleb Hoffman</h4>
                            <span>Customer</span>
                        </div><!-- /.testimonials-one__meta -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="testimonials-one__meta">
                            <h4>Bradley Kim</h4>
                            <span>Customer</span>
                        </div><!-- /.testimonials-one__meta -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->
            </div><!-- /#testimonials-one__meta.swiper-container -->
            <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->

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
@endpush

