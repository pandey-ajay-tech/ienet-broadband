@extends('layouts.welcome')
@section('title')
    Home Page
@endsection
@section('content')
    @include('layouts.slider')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Pricing Plan</h2><!-- /.page-title -->
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="index">Home</a></li>
                <li><span>Pricing Plan</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="packages-two packages-two--page">
        <div class="container">
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="packages-two__card">
                        <div class="packages-two__card__inner">
                            <div class="packages-two__card__bg"></div>
                            <div class="packages-two__card__hover"
                                style="background-image: url(assets/images/resources/package-2-1.jpg);"></div>
                            <div class="packages-two__card__price">$59 <span>Month</span></div>
                            <h3 class="packages-two__card__title">TV + Internet package</h3>
                            <ul class="packages-two__card__list">
                                <li><span class="fas fa-check"></span>Internet with a 100Mbps</li>
                                <li><span class="fas fa-check"></span>Connect multiple users</li>
                                <li><span class="fas fa-check"></span>WiFi router & prevention</li>
                                <li><span class="fas fa-check"></span>Unlimited devices</li>
                            </ul>
                            <a class="packages-two__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="packages-two__card">
                        <div class="packages-two__card__inner">
                            <div class="packages-two__card__bg"></div>
                            <div class="packages-two__card__hover"
                                style="background-image: url(assets/images/resources/package-2-2.jpg);"></div>
                            <div class="packages-two__card__price">$49 <span>Month</span></div>
                            <h3 class="packages-two__card__title">Home basic package</h3>
                            <ul class="packages-two__card__list">
                                <li><span class="fas fa-check"></span>Internet with a 100Mbps</li>
                                <li><span class="fas fa-check"></span>Connect multiple users</li>
                                <li><span class="fas fa-check"></span>WiFi router & prevention</li>
                                <li><span class="fas fa-check"></span>Unlimited devices</li>
                            </ul>
                            <a class="packages-two__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="packages-two__card">
                        <div class="packages-two__card__inner">
                            <div class="packages-two__card__bg"></div>
                            <div class="packages-two__card__hover"
                                style="background-image: url(assets/images/resources/package-2-3.jpg);"></div>
                            <div class="packages-two__card__price">$69 <span>Month</span></div>
                            <h3 class="packages-two__card__title">premium fast package</h3>
                            <ul class="packages-two__card__list">
                                <li><span class="fas fa-check"></span>Internet with a 100Mbps</li>
                                <li><span class="fas fa-check"></span>Connect multiple users</li>
                                <li><span class="fas fa-check"></span>WiFi router & prevention</li>
                                <li><span class="fas fa-check"></span>Unlimited devices</li>
                            </ul>
                            <a class="packages-two__card__rm" href="contact"><i class="icon-right-chevron"></i></a>
                        </div>
                    </div>
                </div><!-- item -->
            </div>
        </div>
    </section>
@endsection
