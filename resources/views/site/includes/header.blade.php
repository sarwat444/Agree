
 <header class="main-header">
        <nav class="main-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html" aria-label="logo image"><img src="{{asset('site/en/assets/images/logo-dark.png')}} " width="250" alt=""></a>
                    <span class="fa fa-bars mobile-nav__toggler"></span>
                </div><!-- /.logo-box -->
                <ul class="main-menu__list">
                    <li  class="home_link">
                        <a href="{{route('site.home')}}">{{ __('home.Home') }}</a>
                    </li>
                    <li>
                        <a href="{{route('site.about')}}">{{ __('home.About Us') }}</a>
                    </li>
                    <li>
                        <a href="{{route('site.Serives')}}">{{ __('home.Serives') }} </a>
                    </li>
                    <li>
                        <a href="{{route('site.contact')}}">{{ __('home.Contact Us') }} </a>
                    </li>


                </ul>
                <!-- /.main-menu__list -->

                <div class="main-header__info">
                    <a href="{{route('site.join_us')}}" class="main-header__info-phone">
                        <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-title">{{ __('home.Join Us Now') }}  </span>
                            </span><!-- /.main-header__info-phone-content -->
                    </a><!-- /.main-header__info-phone -->
                </div><!-- /.main-header__info -->
            </div><!-- /.container -->
        </nav>
        <!-- /.main-menu -->
    </header><!-- /.main-header -->
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
