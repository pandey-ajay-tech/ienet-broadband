@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">PRICING PLAN</h2><!-- /.page-title -->
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="index">HOME</a></li>
                <li><span>PRICING PLAN</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="packages-two packages-two--page">
        <div class="container">
            <div class="row gutter-y-30">

                <!-- PLAN 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="packages-two__card">
                        <div class="packages-two__card__inner">
                            <div class="packages-two__card__bg"></div>
                            <div class="packages-two__card__hover"
                                style="background-image:url(assets/images/resources/package-2-3.jpg);"></div>

                            <div class="packages-two__card__price">₹349 <span>/ Month</span></div>
                            <h3 class="packages-two__card__title">Home Starter Plan</h3>

                            <ul class="packages-two__card__list">
                                <li><span class="fas fa-check"></span> 30 Mbps High-Speed Internet</li>
                                <li><span class="fas fa-check"></span> Unlimited Data</li>
                                <li><span class="fas fa-check"></span> Ideal for Browsing & Study</li>
                                <li><span class="fas fa-check"></span> Free Installation Support</li>
                            </ul>

                            <a class="packages-two__card__rm" href="https://user.snbroadband.in/book-connection">
                                <i class="icon-right-chevron"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PLAN 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="packages-two__card">
                        <div class="packages-two__card__inner">
                            <div class="packages-two__card__bg"></div>
                            <div class="packages-two__card__hover"
                                style="background-image:url(assets/images/resources/package-2-2.jpg);"></div>

                            <div class="packages-two__card__price">₹449 <span>/ Month</span></div>
                            <h3 class="packages-two__card__title">Smart Home Plan</h3>

                            <ul class="packages-two__card__list">
                                <li><span class="fas fa-check"></span> 50 Mbps Super Speed</li>
                                <li><span class="fas fa-check"></span> IPTV & OTT Streaming</li>
                                <li><span class="fas fa-check"></span> Work From Home Ready</li>
                                <li><span class="fas fa-check"></span> 24×7 Technical Support</li>
                            </ul>

                            <a class="packages-two__card__rm" href="https://user.snbroadband.in/book-connection">
                                <i class="icon-right-chevron"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PLAN 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="packages-two__card">
                        <div class="packages-two__card__inner">
                            <div class="packages-two__card__bg"></div>
                            <div class="packages-two__card__hover"
                                style="background-image:url(assets/images/resources/package-2-1.jpg);"></div>

                            <div class="packages-two__card__price">₹649 <span>/ Month</span></div>
                            <h3 class="packages-two__card__title">Ultra Speed Plan</h3>

                            <ul class="packages-two__card__list">
                                <li><span class="fas fa-check"></span> 100 Mbps Ultra Speed</li>
                                <li><span class="fas fa-check"></span> 4K Streaming & Gaming</li>
                                <li><span class="fas fa-check"></span> Multiple Device Support</li>
                                <li><span class="fas fa-check"></span> Priority Support</li>
                            </ul>

                            <a class="packages-two__card__rm" href="https://user.snbroadband.in/book-connection">
                                <i class="icon-right-chevron"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
