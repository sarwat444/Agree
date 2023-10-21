@extends('site.layouts.app')
@push('styles')
@endpush
@section('content')

<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                <div class="contact-one__content">
                    <div class="block-title">
                        <div class="block-title__image"></div><!-- /.block-title__image -->
                        <p>{{ __('home.Contact now') }}</p>
                        <h3>{{ __('home.Leave A Message') }} </h3>
                    </div><!-- /.block-title -->

                    <div class="contact-one__summery">
                        <p>{{ __('home.We Are So  Happy  To Help You') }}</p>
                    </div><!-- /.contact-one__summery -->
                    <div class="contact-one__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.contact-one__social -->
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-sm-12 -->
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
         @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
                <form action="{{ route('site.save_contact') }}" method="post" class="contact-one__form ">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="{{ __('home.Full Name') }}">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="email" placeholder="{{ __('home.Email Address') }} ">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="phone" placeholder="{{ __('home.Phone Number') }}">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="subject" placeholder="{{ __('home.Subject') }}">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="{{ __('home.Write Message') }}"></textarea>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <button type="submit" class="thm-btn"0>{{ __('home.Send a Message') }} </button><!-- /.thm-btn -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form>
            </div><!-- /.col-sm-12 col-md-6 col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<section class="contact-infos">
    <div class="container">
        <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-infos__single">
                        <h3>{{ __('home.About Company') }}</h3>
                        <p>{{ __('home.Sustainable Union (SUT) was established through an alliance of expertise in the agricultural sector') }}</p>
                    </div><!-- /.contact-infos__single -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-infos__single">
                        <h3>{{ __('home.Visit Company') }}</h3>
                        <p>66 broklyn golden street line, New York. United States of America.</p>
                    </div><!-- /.contact-infos__single -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="contact-infos__single">
                        <h3>{{ __('home.Call or Email') }}</h3>
                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a> <br>
                            <a href="mailto:info@company.com">info@company.com</a><br>
                            <a href="tel:666-888-0000">666 888 0000</a>
                        </p>
                    </div><!-- /.contact-infos__single -->
                </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section><!-- /.contact-infos -->

<div class="google-map__home-two">
    <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__home-two" allowfullscreen></iframe>
</div><!-- /.google-map -->




@endsection
@push('scripts')
@endpush

