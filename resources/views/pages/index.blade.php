@extends('layouts.welcome')
@section('title')
    Home Page
@endsection
@section('content')
    @include('layouts.slider')


    <section class="about-one" style="background-image: url(assets/images/shapes/about-1-bg.png);">
        <div class="about-one__shape" style="background-image: url(assets/images/resources/about-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__image wow fadeInLeft" data-wow-delay="300ms">
                        <div class="about-one__image__one">
                            <img src="{{ asset('assets/images/resources/about-1-1.jpg') }}" alt="ienet">
                        </div>
                        <div class="about-one__image__bg"></div>
                        <div class="about-one__image__border"
                            style="background-image: url(assets/images/shapes/about-1-border.png);"></div>
                        <div class="about-one__image__two">
                            <div class="about-one__image__two__inner"><img
                                    src="{{ asset('assets/images/resources/about-1-2.jpg') }}" alt="ienet"></div>
                        </div>
                    </div><!-- /.about-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>About Our Internet<span
                                    class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">We Provide <span>Unlimited</span> Network For You.
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-one__content__text">
                            Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur
                            tortor varius in. Sed tincidunt
                            aliquet lorem, eget tincidunt est molestie non. Sed tincidunt aliquet lorem, eget tincidunt est
                            molestie nonac luctus orci ultrices at.
                        </p>
                        <ul class="about-one__content__list">
                            <li><span class="fas fa-check"></span>Super-Fast Dongle</li>
                            <li><span class="fas fa-check"></span>High Speed Wi-Fi</li>
                            <li><span class="fas fa-check"></span>Prepaid SIM</li>
                            <li><span class="fas fa-check"></span>5G Updations</li>
                        </ul>
                        <a href="about" class="ienet-btn"><span>More About Us<span class="ienet-btn__icon"><i
                                        class="fas fa-chevron-right"></i></span></span></a>
                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="packages-one">
        <div class="packages-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url(assets/images/backgrounds/price-bg-1.jpg);"></div>
        <!-- /.packages-one__bg -->
        <div class="container tabs-box">
            <ul class="packages-one__wrapper">
                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-home"></i></div>
                    <h3 class="packages-one__item__title">Home Internet</h3>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Dedicated Network</li>
                        <li><span class="fas fa-check"></span>Business-friendly SLAs</li>
                        <li><span class="fas fa-check"></span>24×7 Support</li>
                        <li><span class="fas fa-check"></span>Flexible & Scalable Bandwidth</li>
                    </ul>
                </li><!-- item -->
                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-corporation"></i></div>
                    <h3 class="packages-one__item__title">Corporate Internet</h3>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Dedicated Network</li>
                        <li><span class="fas fa-check"></span>Business-friendly SLAs</li>
                        <li><span class="fas fa-check"></span>24×7 Support</li>
                        <li><span class="fas fa-check"></span>Flexible & Scalable Bandwidth</li>
                    </ul>
                </li><!-- item -->
                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-data-analytics"></i></div>
                    <h3 class="packages-one__item__title">Data Connectivity</h3>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Dedicated Network</li>
                        <li><span class="fas fa-check"></span>Business-friendly SLAs</li>
                        <li><span class="fas fa-check"></span>24×7 Support</li>
                        <li><span class="fas fa-check"></span>Flexible & Scalable Bandwidth</li>
                    </ul>
                </li><!-- item -->
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline bw-split-in-right"><span
                                class="sec-title__tagline__left-border"></span>Our Best Plan<span
                                class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">Select Your <span>Best Plan</span></h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div>
                <div class="col-md-4">
                    <a href="packages" class="ienet-btn"><span>View All Service<span class="ienet-btn__icon"><i
                                    class="fas fa-chevron-right"></i></span></span></a>
                </div>
            </div>
            <ul class="packages-one__list tab-buttons list-unstyled">
                <li data-tab="#10mbps" class="tab-btn">10 MBPS</li>
                <li data-tab="#15mbps" class="tab-btn">15 MBPS</li>
                <li data-tab="#20mbps" class="tab-btn active-btn">20 MBPS</li>
                <li data-tab="#30mbps" class="tab-btn">30 MBPS</li>
                <li data-tab="#40mbps" class="tab-btn">40 MBPS</li>
                <li data-tab="#100mbps" class="tab-btn">100 MBPS</li>
            </ul>
            <div class="tabs-content">
                <div class="tab fadeInUp animated" id="10mbps">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$9 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Basic Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-1.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$12 / <span>month</span></div>
                                <h3 class="packages-one__card__title">corporate Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-2.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$15 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Dedicated Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-3.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                    </div>
                </div>
                <div class="tab fadeInUp animated" id="15mbps">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$12 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Basic Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-1.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$35 / <span>month</span></div>
                                <h3 class="packages-one__card__title">corporate Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-2.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$20 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Dedicated Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-3.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                    </div>
                </div>
                <div class="tab fadeInUp animated active-tab" id="20mbps">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$19 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Basic Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-1.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$39 / <span>month</span></div>
                                <h3 class="packages-one__card__title">corporate Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-2.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$59 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Dedicated Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-3.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                    </div>
                </div>
                <div class="tab fadeInUp animated" id="30mbps">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$29 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Basic Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-1.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$49 / <span>month</span></div>
                                <h3 class="packages-one__card__title">corporate Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-2.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$69 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Dedicated Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-3.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                    </div>
                </div>
                <div class="tab fadeInUp animated" id="40mbps">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$19 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Basic Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-1.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$39 / <span>month</span></div>
                                <h3 class="packages-one__card__title">corporate Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-2.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$59 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Dedicated Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-3.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                    </div>
                </div>
                <div class="tab fadeInUp animated" id="100mbps">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$39 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Basic Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-1.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$59 / <span>month</span></div>
                                <h3 class="packages-one__card__title">corporate Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-2.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                        <div class="col-lg-4 col-md-6">
                            <div class="packages-one__card">
                                <div class="packages-one__card__price">$89 / <span>month</span></div>
                                <h3 class="packages-one__card__title">Dedicated Package</h3>
                                <ul class="packages-one__card__list">
                                    <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                    <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                    <li><span class="fas fa-check"></span>Fiber Optics</li>
                                    <li><span class="fas fa-check"></span>OTC-Free</li>
                                </ul>
                                <a class="packages-one__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                                <div class="packages-one__card__image">
                                    <img src="{{ asset('assets/images/resources/package-1-3.jpg') }}" alt="ienet">
                                </div>
                            </div>
                        </div><!-- item -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Start -->
    <section class="feature-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>Our
                    facility<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Our Special <span>Features</span></h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-dashboard"></i></div>
                        <h5 class="feature-one__box__title">Ultra-Speed Connection</h5>
                        <p class="feature-one__box__text">
                            Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-tv"></i></div>
                        <h5 class="feature-one__box__title">250+ TV chanels</h5>
                        <p class="feature-one__box__text">
                            Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-planning"></i></div>
                        <h5 class="feature-one__box__title">Flexible Plans</h5>
                        <p class="feature-one__box__text">
                            Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-one__image">
                        <div class="feature-one__image__one">
                            <img src="{{ asset('assets/images/resources/feature-1-1.jpg') }}" alt="ienet">
                        </div>
                        <div class="feature-one__image__border">
                            <img src="{{ asset('assets/images/shapes/feature-shape-1.png') }}" alt="ienet">
                        </div>
                        <div class="feature-one__image__router">
                            <img src="{{ asset('assets/images/resources/feature-1-router.png') }}" alt="ienet">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="00ms">
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-wifi-router"></i></div>
                        <h5 class="feature-one__box__title">100% free installation</h5>
                        <p class="feature-one__box__text">
                            Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-support"></i></div>
                        <h5 class="feature-one__box__title">fast support 24/7</h5>
                        <p class="feature-one__box__text">
                            Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-4k"></i></div>
                        <h5 class="feature-one__box__title">4K And 8K quality</h5>
                        <p class="feature-one__box__text">
                            Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <section class="mail-one">
        <div class="mail-one__bg" style="background-image: url(assets/images/backgrounds/mail-bg-1.jpg);"></div>
        <!-- /.movie-one__bg -->
        <div class="mail-one__shape-left" style="background-image: url(assets/images/resources/mail-shape-1.png);"></div>
        <div class="mail-one__shape-right" style="background-image: url(assets/images/resources/mail-shape-2.png);"></div>
        <div class="container">
            <div class="mail-one__content">
                <div class="sec-title text-left">

                    <h6 class="sec-title__tagline bw-split-in-right"><span
                            class="sec-title__tagline__left-border"></span>check your area<span
                            class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Check Availability In <span>Your City</span></h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <form action="#" data-url="MAILCHIMP_FORM_URL" class="mail-one__newsletter mc-form">
                    <input type="text" name="EMAIL" placeholder="Enter Your Address">
                    <span class="mail-one__newsletter__icon"><i class="icon-location"></i></span>
                    <button type="submit" class="ienet-btn"><span>Check Availability</span></button>
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                </form><!-- /.footer-widget__newsletter mc-form -->
            </div>
        </div>
    </section>

    <section class="cta-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-one__image wow fadeInLeft" data-wow-delay="100ms">
                        <div class="cta-one__image__one">
                            <img src="{{ asset('assets/images/resources/cta-1-1.jpg') }}" alt="ienet">
                        </div>
                        <div class="cta-one__image__shape">
                            <img src="{{ asset('assets/images/shapes/cta-shape-1.png') }}" alt="ienet">
                        </div>
                        <div class="cta-one__image__two wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('assets/images/resources/cta-1-1.png') }}" alt="ienet">
                        </div>
                        <div class="cta-one__image__price wow fadeInUp" data-wow-delay="200ms">
                            Start Form $39 / <span>Month</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="cta-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>save your money<span
                                    class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Save Money Your <span>Internet</span> Service
                                With TV Service</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="cta-one__content__text">
                            Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur
                            tortor varius in.
                            Sed tincidunt aliquet lorem, eget tincidunt est molestie non. Sed tincidunt aliquet lorem, eget
                            tincidunt est molestie
                        </p>
                        <a href="about" class="ienet-btn"><span>Get In Touch<span class="ienet-btn__icon"><i
                                        class="fas fa-chevron-right"></i></span></span></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.cta-one -->

    {{-- <section class="movie-one">
        <div class="movie-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url(assets/images/backgrounds/movie-bg-1.jpg);"></div>
        <!-- /.movie-one__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline bw-split-in-right"><span
                                class="sec-title__tagline__left-border"></span>entertainment<span
                                class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">Popular <span>Featured</span> Show</h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div>
                <div class="col-md-4">
                    <div class="movie-one__nav">
                        <a href="#" class="movie-one__nav__prev"><i class="icon-left-chevron"></i></a>
                        <a href="#" class="movie-one__nav__next"><i class="icon-right-chevron"></i></a>
                    </div><!-- /.testimonials-one__custome-navs -->
                </div>
            </div>
        </div>
        <div class="movie-one__carousel owl-carousel ienet-owl__carousel--custom-nav owl-theme ienet-owl__carousel"
            data-owl-nav-prev=".movie-one__nav__prev" data-owl-nav-next=".movie-one__nav__next"
            data-owl-options='{
		"loop": true,
		"autoplay": true,
		"margin": 30,
		"center": false,
		"nav": false,
		"dots": true,
		"smartSpeed": 500,
		"autoplayTimeout": 10000,
		"responsive": {
			"0": {
				"stagePadding": 50,
				"items": 1
			},
			"500": {
				"items": 2
			},
			"768": {
				"stagePadding": 100,
				"items": 2
			},
			"992": {
				"stagePadding": 52,
				"items": 3
			},
			"1200": {
				"stagePadding": 160,
				"items": 3
			},
			"1300": {
				"stagePadding": 100,
				"items": 4
			},
			"1400": {
				"stagePadding": 116,
				"items": 4
			},
			"1600": {
				"stagePadding": 216,
				"items": 4
			},
			"1800": {
				"stagePadding": 216,
				"items": 5
			}
		}
		}'>
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-1.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Broken city state</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-2.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Prem Ratan Dhan</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-3.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">The Jungle Book</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-4.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">The Way of Water</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-5.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">The Dark Knight</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-6.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Avengers Endgame</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-7.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Scared to Death</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-1.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Broken city state</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-2.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Prem Ratan Dhan</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-3.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">The Jungle Book</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-4.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">The Way of Water</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-5.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">The Dark Knight</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-6.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Avengers Endgame</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
            <div class="item">
                <div class="movie-one__item">
                    <div class="movie-one__item__image">
                        <img src="{{ asset('assets/images/movie/movie-1-7.jpg') }}" alt="ienet">
                    </div>
                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                        <i class="fa fa-play"></i>
                        <i class="ripple"></i>
                    </a>
                    <div class="movie-one__item__content">
                        <h3 class="movie-one__item__title"><a href="movie-details">Scared to Death</a></h3>
                        <ul class="movie-one__item__list">
                            <li><i class="fa fa-star"></i>6.8(Imdb)</li>
                            <li>1hr : 30mins</li>
                        </ul>
                    </div>
                </div>
            </div><!-- item -->
        </div>
    </section> --}}

    {{-- <section class="faq-one">
        <div class="faq-one__shape" style="background-image: url(assets/images/resources/faq-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-one__accordion ienet-accrodion" data-grp-name="ienet-accrodion">
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    What is broadband internet?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Bring to the table win-win survival strategies to ensure proactive domination. At
                                        the end of the day, going forward,
                                        a new normal that has evolved from generation X is on the
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    How does broadband internet work?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Bring to the table win-win survival strategies to ensure proactive domination. At
                                        the end of the day, going forward,
                                        a new normal that has evolved from generation X is on the
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    What is the difference between upload and download speeds?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Bring to the table win-win survival strategies to ensure proactive domination. At
                                        the end of the day, going forward,
                                        a new normal that has evolved from generation X is on the
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    What factors can affect broadband speed?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Bring to the table win-win survival strategies to ensure proactive domination. At
                                        the end of the day, going forward,
                                        a new normal that has evolved from generation X is on the
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="faq-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>frequently asked questions<span
                                    class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Why Should <span>Work</span> With Us</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <!-- section-title -->
                        <div class="faq-one__content__box">
                            <div class="faq-one__content__box__icon"><i class="icon-wifi-router"></i></div>
                            <h5 class="faq-one__content__box__title">100% free installation</h5>
                            <p class="faq-one__content__box__text">
                                Nulla facilisi. Pellentesque imperdiet,<br> sem et commodo interdum, justo velit.
                            </p>
                        </div>
                        <div class="faq-one__video"
                            style="background-image: url(assets/images/resources/faq-1-video.jpg);">
                            <a href="https://www.youtube.com/watch?v=h9MbznbxlLc" class="video-popup">
                                <i class="fa fa-play"></i>
                                <i class="ripple"></i>
                            </a>
                        </div>
                    </div><!-- /.faq-one__contact -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.faq-one-accordion --> --}}

    {{-- <section class="testimonials-one">
        <div class="testimonials-one__bg" style="background-image: url(assets/images/shapes/testimonial-bg-1.png);"></div>
        <div class="testimonials-one__left-color"></div>
        <div class="testimonials-one__image"
            style="background-image: url(assets/images/resources/testimonial-image-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonials-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>our testimonials<span
                                    class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">What Peoples <span>Talked</span> About Us</h3>
                            <!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="testimonials-one__content__text">
                            Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur
                            tortor varius in.
                            Sed tincidunt aliquet lorem, eget tincidunt est molestie non. Sed tincidunt
                        </p>
                        <div class="testimonials-one__nav">
                            <a href="#" class="testimonials-one__nav__prev"><i class="icon-left-chevron"></i></a>
                            <a href="#" class="testimonials-one__nav__next"><i class="icon-right-chevron"></i></a>
                        </div><!-- /.testimonials-one__custome-navs -->
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ienet-stretch-element-inside-column">
                        <div class="testimonials-one__carousel ienet-owl__carousel ienet-owl__carousel--custom-nav owl-theme owl-carousel"
                            data-owl-nav-prev=".testimonials-one__nav__prev"
                            data-owl-nav-next=".testimonials-one__nav__next"
                            data-owl-options='{
						"items": 1,
						"margin": 30,
						"smartSpeed": 700,
						"loop":true,
						"autoplay": false,
						"stagePadding": 0,
						"nav":false,
						"dots":false,
						"responsive":{
							"0":{
								"items": 1
							},
							"768":{
								"items": 1.4
							},
							"992":{
								"items": 1.6
							},
							"1200":{
								"items": 1.1
							},
							"1360":{
								"items": 1.2
							},
							"1600":{
								"items": 1.6
							}
						}
					}'>
                            <div class="item">
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='000ms'>
                                    <div class="testimonials-card__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonials-card__rating -->
                                    <div class="testimonials-card__content">
                                        Ienet internet Company also impressed us with their transparency regarding costs.
                                        The initial quote was accurate,
                                        and they were upfront about any changes or additional expenses that
                                    </div><!-- /.testimonials-card__content -->
                                    <div class="testimonials-card__author">
                                        <img src="{{ asset('assets/images/resources/testi-1-1.jpg') }}"
                                            alt="Anthony B. Castillo">
                                        <h3 class="testimonials-card__name">
                                            Anthony B. Castillo
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">managing director</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__author -->
                                    <div class="testimonials-card__quote">
                                        <i class="icon-quote"></i>
                                        <i class="icon-quote"></i>
                                    </div>
                                </div><!-- /.testimonials-card -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='100ms'>
                                    <div class="testimonials-card__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonials-card__rating -->
                                    <div class="testimonials-card__content">
                                        Ienet internet Company also impressed us with their transparency regarding costs.
                                        The initial quote was accurate,
                                        and they were upfront about any changes or additional expenses that
                                    </div><!-- /.testimonials-card__content -->
                                    <div class="testimonials-card__author">
                                        <img src="{{ asset('assets/images/resources/testi-1-2.jpg') }}"
                                            alt="Sarah Albert">
                                        <h3 class="testimonials-card__name">
                                            Sarah Albert
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Founder</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__author -->
                                    <div class="testimonials-card__quote">
                                        <i class="icon-quote"></i>
                                        <i class="icon-quote"></i>
                                    </div>
                                </div><!-- /.testimonials-card -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='200ms'>
                                    <div class="testimonials-card__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonials-card__rating -->
                                    <div class="testimonials-card__content">
                                        Ienet internet Company also impressed us with their transparency regarding costs.
                                        The initial quote was accurate,
                                        and they were upfront about any changes or additional expenses that
                                    </div><!-- /.testimonials-card__content -->
                                    <div class="testimonials-card__author">
                                        <img src="{{ asset('assets/images/resources/testi-1-3.jpg') }}"
                                            alt="David Cooper">
                                        <h3 class="testimonials-card__name">
                                            David Cooper
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Co Founder</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__author -->
                                    <div class="testimonials-card__quote">
                                        <i class="icon-quote"></i>
                                        <i class="icon-quote"></i>
                                    </div>
                                </div><!-- /.testimonials-card -->
                            </div><!-- /.item -->
                        </div><!-- /.testimonials-one__carousel -->
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.testimonials-one --> --}}

    {{-- <section class="blog-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span
                        class="sec-title__tagline__left-border"></span>latest blog<span
                        class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Our Latest <span>Blog</span> News</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="blog-one__carousel ienet-owl__carousel ienet-owl__carousel--with-shadow ienet-owl__carousel--basic-nav owl-carousel owl-theme"
                data-owl-options='{
			"items": 1,
			"margin": 30,
			"loop": false,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"icon-left-chevron\"></span>","<span class=\"icon-right-chevron\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive": {
				"0": {
					"nav": true,
					"items": 1
				},
				"768": {
					"nav": true,
					"items": 2
				},
				"992": {
					"items": 3
				}
			}
			}'>
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-1.png') }}"
                                alt="Cupidatat Nonproident, Sunt in Culpa qui Officia Deserunt">
                            <img src="{{ asset('assets/images/blog/blog-1-1.png') }}"
                                alt="Cupidatat Nonproident, Sunt in Culpa qui Officia Deserunt">
                            <a href="blog-details-right" class="blog-card__image__link"><span class="sr-only">Cupidatat
                                    Nonproident, Sunt in Culpa qui Officia Deserunt</span>
                                <!-- /.sr-only --></a>
                            <div class="blog-card__date">AUG, 04</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog-list-right"><i class="fas fa-user-alt"></i>by Admin</a></li>
                                <li><a href="blog-details-right"><i class="fas fa-comment-dots"></i>2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <h3 class="blog-card__title"><a href="blog-details-right">Cupidatat Nonproident, Sunt in Culpa
                                    qui Officia Deserunt</a></h3><!-- /.blog-card__title -->
                            <a href="blog-details-right" class="blog-card__link">
                                <span class="blog-card__link__front"><span
                                        class="fas fa-angle-double-right"></span></span>
                                <span class="blog-card__link__back"><span class="fas fa-angle-double-right"></span>Read
                                    More</span>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-2.png') }}"
                                alt="The Best Usage of The Fiber Internet from Broadband">
                            <img src="{{ asset('assets/images/blog/blog-1-2.png') }}"
                                alt="The Best Usage of The Fiber Internet from Broadband">
                            <a href="blog-details-right" class="blog-card__image__link"><span class="sr-only">The Best
                                    Usage of The Fiber Internet from Broadband</span>
                                <!-- /.sr-only --></a>
                            <div class="blog-card__date">AUG, 04</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog-list-right"><i class="fas fa-user-alt"></i>by Admin</a></li>
                                <li><a href="blog-details-right"><i class="fas fa-comment-dots"></i>2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <h3 class="blog-card__title"><a href="blog-details-right">The Best Usage of The Fiber Internet
                                    from Broadband</a></h3><!-- /.blog-card__title -->
                            <a href="blog-details-right" class="blog-card__link">
                                <span class="blog-card__link__front"><span
                                        class="fas fa-angle-double-right"></span></span>
                                <span class="blog-card__link__back"><span class="fas fa-angle-double-right"></span>Read
                                    More</span>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                        <div class="blog-card__image">
                            <img src="{{ asset('assets/images/blog/blog-1-3.png') }}"
                                alt="Suspendisse Posuere, Leo ac Laoreet Dapibus, Urna">
                            <img src="{{ asset('assets/images/blog/blog-1-3.png') }}"
                                alt="Suspendisse Posuere, Leo ac Laoreet Dapibus, Urna">
                            <a href="blog-details-right" class="blog-card__image__link"><span class="sr-only">Suspendisse
                                    Posuere, Leo ac Laoreet Dapibus, Urna</span>
                                <!-- /.sr-only --></a>
                            <div class="blog-card__date">AUG, 04</div><!-- /.blog-card__date -->
                            <ul class="list-unstyled blog-card__meta">
                                <li><a href="blog-list-right"><i class="fas fa-user-alt"></i>by Admin</a></li>
                                <li><a href="blog-details-right"><i class="fas fa-comment-dots"></i>2 Comments</a></li>
                            </ul><!-- /.list-unstyled blog-card__meta -->
                        </div><!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <h3 class="blog-card__title"><a href="blog-details-right">Suspendisse Posuere, Leo ac Laoreet
                                    Dapibus, Urna</a></h3><!-- /.blog-card__title -->
                            <a href="blog-details-right" class="blog-card__link">
                                <span class="blog-card__link__front"><span
                                        class="fas fa-angle-double-right"></span></span>
                                <span class="blog-card__link__back"><span class="fas fa-angle-double-right"></span>Read
                                    More</span>
                            </a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__content -->
                    </div><!-- /.blog-card -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one --> --}}

    <div class="client-carousel ">
        <div class="container">
            <div class="client-carousel__one ienet-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items":1,
                    "margin": 0
                },
                "360":{
                    "items":2,
                    "margin": 30
                },
                "575":{
                    "items":3,
                    "margin": 30
                },
                "768":{
                    "items":3,
                    "margin": 40
                },
                "992":{
                    "items": 4,
                    "margin": 40
                },
                "1200":{
                    "items": 5,
                    "margin": 140
                }
            }
            }'>
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('assets/images/resources/brand-1-1.png') }}" alt="ienet">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('assets/images/resources/brand-1-1-hover.png') }}" alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('assets/images/resources/brand-1-2.png') }}" alt="ienet">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('assets/images/resources/brand-1-2-hover.png') }}" alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('assets/images/resources/brand-1-3.png') }}" alt="ienet">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('assets/images/resources/brand-1-3-hover.png') }}" alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('assets/images/resources/brand-1-4.png') }}" alt="ienet">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('assets/images/resources/brand-1-4-hover.png') }}" alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal"
                        src="{{ asset('assets/images/resources/brand-1-5.png') }}" alt="ienet">
                    <img class="client-carousel__one__item__hover"
                        src="{{ asset('assets/images/resources/brand-1-5-hover.png') }}" alt="ienet">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div>
@endsection
