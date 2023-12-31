<footer class="site-footer">
    <img src="{{asset('site/en/assets/images/icons/footer-bg-icon-1.png')}} " class="site-footer__shape-1" alt="">
    <img src="{{asset('site/en/assets/images/icons/footer-bg-icon-2.png')}} " class="site-footer__shape-2" alt="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="footer-widget">
                    <a href="index.html" class="footer-widget__Logo">
                        <img src="{{asset('site/en/assets/images/logo-light.png')}} " width="250" alt="">
                    </a>
                    <p class="mb-5">{{ __('home.Sustainable Union (SUT) was established through an alliance of expertise in the agricultural sector') }} </p>
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    <div class="footer__social">
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.topbar__social -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                <div class="footer-widget footer-widget__links-widget">
                    <h3 class="footer-widget__title">{{ __('home.Links') }}</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li>
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
                    </ul><!-- /.list-unstyled -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="footer-widget">
                    <h3 class="footer-widget__title">{{ __('home.News') }}</h3><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__post">
                        <li>
                            <img src="{{asset('site/en/assets/images/resources/footer-post-1.png')}}" alt="">
                            <div class="footer-widget__post-content">
                                <span>Nov 16, 2020</span>
                                <h4><a href="blog-details.html">How to grow vagetables in the forms</a></h4>
                            </div><!-- /.footer-widget__post-content -->
                        </li>
                        <li>
                            <img src="{{asset('site/en/assets/images/resources/footer-post-2.png')}}" alt="">
                            <div class="footer-widget__post-content">
                                <span>Nov 16, 2020</span>
                                <h4><a href="blog-details.html">How to grow vagetables in the forms</a></h4>
                            </div><!-- /.footer-widget__post-content -->
                        </li>
                    </ul><!-- /.list-unstyled footer-widget__post -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <h3 class="footer-widget__title">{{ __('home.Contact') }}</h3><!-- /.footer-widget__title -->
                <ul class="list-unstyled footer-widget__contact">
                    <li>
                        <i class="agrikon-icon-telephone"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                    <li>
                        <i class="agrikon-icon-email"></i>
                        <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                    </li>
                    <li>
                        <i class="agrikon-icon-pin"></i>
                        <a href="#">80 broklyn golden street line
                            New York, USA</a>
                    </li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer><!-- /.site-footer -->
<div class="bottom-footer">
    <div class="container">
        <p> {{ __('home.© Copyright 2020 by Sustainable Union (SUT)') }} </p>
    </div><!-- /.container -->
</div><!-- /.bottom-footer -->

</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{asset('site/en/assets/images/logo-light.png')}}" width="155" alt=""/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="agrikon-icon-email"></i>
                <a href="mailto:needhelp@agrikon.com">needhelp@agrikon.com</a>
            </li>
            <li>
                <i class="agrikon-icon-telephone"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="{{asset('site/en/assets/images/resources/flag-1-1.jpg')}}" alt="">
                <label class="sr-only" for="language-select">select language</label>
                <!-- /#language-select.sr-only -->
                <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div><!-- /.mobile-nav__language -->
            <div class="mobile-nav__social">
                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..."/>
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
