<footer class="main-footer background-black">
    <div class="main-footer__bg background-black" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);">
    </div>
    <div class="main-footer__shape-one" style="background-image: url(assets/images/resources/footer-shape-1.png);"></div>
    <div class="main-footer__shape-two" style="background-image: url(assets/images/resources/footer-shape-2.png);"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__top">
        <div class="container">
            <div class="main-footer__top__inner">
                <ul class="list-unstyled main-footer__top__info">
                    <li class="main-footer__top__info__item">
                        <span class="main-footer__top__info__icon"><i class="icon-mail"></i></span>
                        <a href="mailto:info@snbroadband.in">info@snbroadband.in</a>
                    </li>
                    <li class="main-footer__top__info__item">
                        <span class="main-footer__top__info__icon"><i class="icon-maps-and-flags"></i></span>
                        Sapaha Near TTC Ground, Madhupur, 815353
                    </li>
                </ul><!-- /.list-unstyled topbar-one__info -->
                {{-- <div class="main-footer__top__right">
                    <div class="main-footer__top__social">

                        <a href="https://facebook.com">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://twitter.com">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="https://instagram.com">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                        <a href="https://www.youtube.com/">
                            <i class="fab fa-youtube" aria-hidden="true"></i>
                            <span class="sr-only">Youtube</span>
                        </a>
                    </div><!-- /.main-footer__top__social -->
                </div><!-- /.main-footer__top__right --> --}}
            </div><!-- /.main-footer__top__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__top -->
    <div class="container">
        <div class="main-footer__middle">
            <a href="#">
                <img src="{{ asset('assets/images/logo_black.png') }}" height="100" alt="Ienet HTML Template">
            </a>

            <div class="main-footer__middle__call">
                <div class="main-footer__middle__call__icon"><span class="icon-telephone"></span></div>
                <div class="main-footer__middle__call__title">Call Emergency</div>
                <a class="main-footer__middle__call__text" href="tel:88012365499">+91 9234377577</a>
            </div>
        </div><!-- /.main-footer__middle -->
    </div><!-- /.container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-5">
                <div class="footer-widget footer-widget--about">
                    <h2 class="footer-widget__title">About SpeedNET Broadband</h2><!-- /.footer-widget__title -->
                    <p class="footer-widget__text">
                        SpeedNET Broadband provides high-speed internet solutions with reliable connectivity and
                        outstanding customer support. We are committed to bringing seamless digital experiences to homes
                        and businesses.
                    </p>
                    <a href="contact" class="ienet-btn">
                        <span>Query Us
                            <span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span>
                        </span>
                    </a>
                </div>
            </div><!-- /.col-md-6 -->

            <div class="col-md-6 col-xl-4">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Our Services</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="#" class="footer-link">Internet Line</a></li>
                        <li><a href="#" class="footer-link">P2P Connectivity</a></li>
                        <li><a href="#" class="footer-link">Broadband FTTH</a></li>
                        <li><a href="#" class="footer-link">Home & Security</a></li>
                        <li><a href="#" class="footer-link">Network & Software</a></li>
                        <li><a href="#" class="footer-link">Tech Support</a></li>
                    </ul>

                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->

            <div class="col-md-6 col-xl-3">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Useful Links</h2><!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="{{ route('front.about-us') }}">About Us</a></li>
                        <li><a href="{{ route('plans-pricing') }}">Plans</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                    </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
            </div><!-- /.col-md-6 -->
<!-- 
            <div class="col-md-6 col-xl-3">
                <div class="footer-widget footer-widget--gallery">
                    <h2 class="footer-widget__title">Our Gallery</h2>
                    <div class="footer-widget__gallery">
                        <a href="#" class="footer-widget__gallery__link">
                            <img src="{{ asset('assets/images/gallery/fg-1.jpg') }}" alt="ienet">
                        </a>
                        <a href="#" class="footer-widget__gallery__link">
                            <img src="{{ asset('assets/images/gallery/fg-2.jpg') }}" alt="ienet">
                        </a>
                        <a href="#" class="footer-widget__gallery__link">
                            <img src="{{ asset('assets/images/gallery/fg-3.jpg') }}" alt="ienet">
                        </a>
                        <a href="#" class="footer-widget__gallery__link">
                            <img src="{{ asset('assets/images/gallery/fg-4.jpg') }}" alt="ienet">
                        </a>
                        <a href="#" class="footer-widget__gallery__link">
                            <img src="{{ asset('assets/images/gallery/fg-5.jpg') }}" alt="ienet">
                        </a>
                        <a href="#" class="footer-widget__gallery__link">
                            <img src="{{ asset('assets/images/gallery/fg-6.jpg') }}" alt="ienet">
                        </a>
                    </div>
                </div>
            </div> -->


            <!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by SpeedNET Broadband.
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->

</div><!-- /.page-wrapper -->



<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="#" aria-label="logo image"><img src="{{ asset('assets/images/logo_wifi.png') }}"
                    width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@ienet.com">needhelp@ienet.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">

            <a href="https://facebook.com">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://instagram.com">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="https://www.youtube.com/">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <span class="sr-only">Youtube</span>
            </a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here.." />
            <button type="submit" aria-label="search submit" class="ienet-btn">
                <span><i class="icon-search"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->
<!-- Sidebar One Start -->
<aside class="sidebar-one">
    <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <div class="sidebar-one__close"><i class="icon-plus"></i></div><!-- /.siderbar-close -->
        <div class="sidebar-one__logo">
            <a href="#" aria-label="logo image"><img src="{{ asset('assets/images/logo_black.png') }}"
                    alt="Ienet HTML" height="100"></a>
        </div><!-- /.sidebar-one__logo-box -->
        <p class="sidebar-one__text">
            Experience lightning-fast internet with SpeedNET Broadband! Stay connected seamlessly for work, streaming,
            gaming, and more. Enjoy reliable, unlimited data plans designed for homes and businesses, backed by 24×7
            customer support.
        </p>

        <h4 class="sidebar-one__title">Contact Info:</h4>
        <ul class="sidebar-one__info">
            <li>
                <span class="fas fa-map-marker-alt"></span>
                Sapaha Near TTC Ground, Madhupur, 815353
            </li>
            <li>
                <span class="fas fa-clock"></span>
                Mon - Fri: 9.00 am. - 10.00 pm.
            </li>
            <li>
                <span class="fas fa-envelope"></span>
                <a href="tel:+919234377577">+91 9234377577</a>
            </li>
        </ul>
        {{-- <div class="sidebar-one__social">

            <a href="https://facebook.com">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facesbvnbbook</span>
            </a>
            <a href="https://twitter.com">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://instagram.com">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="https://www.youtube.com/">
                <i class="fab fa-youtube" aria-hidden="true"></i>
                <span class="sr-only">Youtube</span>
            </a>
        </div><!-- /sidebar-one__socila --> --}}
        {{-- <h4 class="sidebar-one__title">Newsletter:</h4>
        <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
            <input type="text" name="EMAIL" placeholder="Email address">
            <button type="submit" class="fas fa-paper-plane">
                <span class="sr-only">submit</span><!-- /.sr-only -->
            </button>
        </form><!-- /.footer-widget__newsletter mc-form --> --}}
    </div><!-- /.sidebar__content -->
</aside>
<!-- Sidebar One Start -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>


<script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<!-- gsap js -->
<script src="{{ asset('assets/vendors/gsap/gsap.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/scrolltrigger.min.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/splittext.min.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/ienet-split.js') }}"></script>
<!-- template js -->
<script src="{{ asset('assets/js/ienet.js') }}"></script>
</body>

</html>
