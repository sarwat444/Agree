@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('site/en/assets/images/backgrounds/page-header-bg-1-1.jpg')}});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li>/</li>
                <li><span>About</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
            <h2>About Us</h2>
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
                            <p>Get to know us</p>
                            <h3>Sustainable Union Trading (SUT)</h3>
                        </div><!-- /.block-title -->
                        <ul class="about-three__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Agricultural technologies
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Developing  administrative work

                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                 Management and technical consulting

                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Project management and operation
                            </li>
                        </ul><!-- /.about-three__list list-unstyled -->
                        <div class="about-three__summery">
                            <p>
                                Sustainable Union (SUT) was established through an alliance of expertise in
                                the agricultural sector with the aim of growing this sector and making it
                                keep pace with modern technologies in the world of agricultural production
                                and management. <br>

                                Our goal is to make this sector more automated, modern way
                                Our vision is an agricultural world with added value that makes it a more attractive reality </p>
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


<section class="testimonials-one testimonials-one__about">
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
                        <img src="{{asset('site/en/assets/images/resources/testimonials-1-1.jpg')}}" alt="">
                    </div><!-- /.testimonials-one__image -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__image">
                        <img src="{{asset('site/en/assets/images/resources/testimonials-1-1.jpg')}}" alt="">
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



<section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">


    <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
    <!-- /.call-to-action__bg -->
    <div class="container">
        <div class="call-to-action__content">
            <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
            <h3>We’re popular leader in agriculture
                market globally</h3>
        </div><!-- /.call-to-action__content -->
        <div class="call-to-action__button">
            <a href="services.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
        </div><!-- /.call-to-action__button -->
    </div><!-- /.container -->
</section><!-- /.call-to-action -->

@endsection
@push('scripts')
@endpush

