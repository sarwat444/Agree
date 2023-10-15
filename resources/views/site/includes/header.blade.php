<div class="preloader">
    <img class="preloader__image" width="55" src="{{asset('site/en/assets/images/loader.png')}}" alt="">
</div><!-- /.preloader -->
<div class="page-wrapper">

    <header class="main-header">
        <div class="topbar">
            <div class="container">
                <div class="topbar__left">
                    <div class="topbar__social">
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.topbar__social -->
                    <p>Welcome to Sustainable Union (SUT) </p>
                </div><!-- /.topbar__left -->
                <div class="topbar__right">
                    <a href="#"><i class="agrikon-icon-email"></i>needhelp@company.com</a>
                    <a href="#"><i class="agrikon-icon-clock"></i>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</a>
                </div><!-- /.topbar__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar -->
        <nav class="main-menu">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html" aria-label="logo image"><img src="{{asset('site/en/assets/images/logo-dark.png')}} " width="153" alt=""></a>
                    <span class="fa fa-bars mobile-nav__toggler"></span>
                </div><!-- /.logo-box -->
                <ul class="main-menu__list">
                    <li>
                        <a href="{{route('site.home')}}">Home</a>

                    </li>
                    <li>
                        <a href="{{route('site.about')}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('site.Serives')}}">Serives </a>
                    </li>
                    <li>
                        <a href="{{route('site.contact')}}">Contact Us  </a>
                    </li>


                </ul>
                <!-- /.main-menu__list -->

                <div class="main-header__info">
                    <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                    <a class="main-header__cart-btn" href="#"><i class="agrikon-icon-shopping-cart"></i></a>
                    <a href="{{route('site.join_us')}}" class="main-header__info-phone">
                        <i class="agrikon-icon-phone-call"></i>
                        <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Join Us</span>
                                <span class="main-header__info-phone-title">Join Us Now </span>
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
