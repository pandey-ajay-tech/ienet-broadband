@extends('layouts.master')
@section('title')
    About Us
@endsection

{{-- Breadcrump --}}
@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">ABOUT US</h2>
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="index">HOME </a></li>
                <li><span>ABOUT US</span></li>
            </ul>
        </div>
    </section>

    {{-- About Section --}}
    <section class="about-two about-two--about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__image wow fadeInLeft" data-wow-delay="200ms">
                        <div class="about-two__image__one">
                            <img src="assets/images/resources/446_617.png" alt="SpeedNET Broadband">
                        </div>
                        <div class="about-two__image__border"
                            style="background-image: url(assets/images/shapes/about-2-border.png);"></div>
                        <div class="about-two__image__two">
                            <img src="assets/images/resources/272_289.png" alt="SpeedNET Broadband">
                        </div>
                        <div class="about-two__image__experiance">
                            <div class="about-two__image__experiance__icon"><i class="icon-medal"></i></div>
                            <h5 class="about-two__image__experiance__number count-box">
                                <span class="count-text" data-stop="10" data-speed="1500"></span>+
                            </h5>
                            <p class="about-two__image__experiance__text">Years of Service Excellence</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms">
                    <div class="about-two__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline">
                                <span class="sec-title__tagline__left-border"></span>
                                About SpeedNET Broadband
                                <span class="sec-title__tagline__right-border"></span>
                            </h6>

                            <h3 class="sec-title__title">
                                Powering Homes & Businesses with
                                <span>High-Speed Internet</span>
                            </h3>
                        </div>

                        <p class="about-two__content__text">
                            SpeedNET Broadband is a trusted internet service provider delivering fast, stable,
                            and affordable broadband solutions for homes and businesses.
                            Our goal is to keep you connected with uninterrupted internet for work, study,
                            entertainment, and communication.
                        </p>

                        <div class="about-two__content__box">
                            <div class="about-two__content__box__icon"><i class="icon-world"></i></div>
                            <h5 class="about-two__content__box__title">Ultra-Fast Connectivity</h5>
                            <p class="about-two__content__box__text">
                                Enjoy seamless browsing, streaming, gaming, and work-from-home
                                with high-speed fiber broadband.
                            </p>
                        </div>

                        <div class="about-two__content__box">
                            <div class="about-two__content__box__icon"><i class="icon-wifi-router"></i></div>
                            <h5 class="about-two__content__box__title">Free Installation & Support</h5>
                            <p class="about-two__content__box__text">
                                Hassle-free setup with quick installation and 24×7 technical support.
                            </p>
                        </div>

                        <div class="about-two__content__user">
                            <div class="about-two__content__user__text">Trusted by thousands of users</div>
                            <div class="about-two__content__user__image">
                                <img src="assets/images/resources/user-1.png" alt="">
                                <img src="assets/images/resources/user-2.png" alt="">
                                <img src="assets/images/resources/user-3.png" alt="">
                                <span class="about-two__content__user__rm">+5000</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- IPTV SECTION --}}
    <section class="cta-two">
        <div class="cta-two__bg" style="background-image: url(assets/images/shapes/cta-2-bg.png);"></div>
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 wow fadeInUp">
                    <div class="cta-two__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline">
                                <span class="sec-title__tagline__left-border"></span>
                                IPTV Entertainment
                                <span class="sec-title__tagline__right-border"></span>
                            </h6>

                            <h3 class="sec-title__title">
                                Smart TV Experience with
                                <span>Premium IPTV Channels</span>
                            </h3>
                        </div>

                        <p class="cta-two__content__text">
                            SpeedNET IPTV service brings you a complete entertainment solution with
                            high-quality HD & SD channels. Enjoy live TV, movies, sports, news,
                            kids entertainment, and regional channels – all in one place.
                        </p>

                        <ul class="list-unstyled">
                            <li>✔ 500+ Live TV Channels</li>
                            <li>✔ HD, SD & Regional Channels</li>
                            <li>✔ Sports, Movies, News & Kids Content</li>
                            <li>✔ Works on Smart TV, Mobile & Set-Top Box</li>
                            <li>✔ Buffer-Free Streaming with Fiber Internet</li>
                        </ul>

                        <a href="https://user.snbroadband.in/book-connection" class="ienet-btn">
                            <span>Book Now<span class="ienet-btn__icon">
                                    <i class="fas fa-chevron-right"></i></span></span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="cta-two__image">
                        <img src="assets/images/resources/270_300.png" alt="IPTV Channels" class="img-fluid">
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="about-two">
        <div class="container">
            <div class="row justify-content-center text-center g-4">

                <div class="col-12 col-md-4">
                    <div class="about-card">
                        <i class="fas fa-gauge-high icon"></i>
                        <h5 class="mt-3">High-Speed Broadband</h5>
                        <p>Plans starting from 30 Mbps to 100 Mbps</p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="about-card">
                        <i class="fas fa-headset icon"></i>
                        <h5 class="mt-3">24×7 Support</h5>
                        <p>Quick response & reliable customer assistance</p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="about-card">
                        <i class="fas fa-shield-halved icon"></i>
                        <h5 class="mt-3">Trusted Network</h5>
                        <p>Stable & secure internet connectivity</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
