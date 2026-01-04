@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    {{-- @include('layouts.slider') --}}

    <section class="about-two about-two--about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__image wow fadeInLeft" data-wow-delay="200ms">
                        <div class="about-two__image__one">
                            <img src="assets/images/resources/about-2-1.jpg" alt="ienet">
                        </div>
                        <div class="about-two__image__border"
                            style="background-image: url(assets/images/shapes/about-2-border.png);"></div>
                        <div class="about-two__image__two">
                            <img src="assets/images/resources/about-2-2.jpg" alt="ienet">
                        </div>
                        <div class="about-two__image__experiance">
                            <div class="about-two__image__experiance__icon"><i class=" icon-medal"></i></div>
                            <h5 class="about-two__image__experiance__number count-box"><span class="count-text"
                                    data-stop="25" data-speed="1500"></span>Years</h5>
                            <p class="about-two__image__experiance__text">Working Experience</p>
                        </div>
                    </div><!-- /.about-two__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms">
                    <div class="about-two__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>About Our Internet<span
                                    class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Best <span>Internet</span> Provide Agency In Town
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-two__content__text">
                            It is a long established fact that a reader will be distracted the readable content of a page
                            when looking
                            at layout the point of using lorem the is Ipsum less normal distribution of letters.
                        </p>
                        <div class="about-two__content__box">
                            <div class="about-two__content__box__icon"><i class="icon-world"></i></div>
                            <h5 class="about-two__content__box__title">Fast Connected</h5>
                            <p class="about-two__content__box__text">
                                Embarrassing hidden in the middle All the Lorem Ipsum<br> generators on the Internet repeat
                                predefined chunks
                            </p>
                        </div>
                        <div class="about-two__content__box">
                            <div class="about-two__content__box__icon"><i class="icon-wifi-router"></i></div>
                            <h5 class="about-two__content__box__title">Free Installations</h5>
                            <p class="about-two__content__box__text">
                                Embarrassing hidden in the middle All the Lorem Ipsum<br> generators on the Internet repeat
                                predefined chunks
                            </p>
                        </div>
                        <div class="about-two__content__user">
                            <div class="about-two__content__user__text">2.5M happy user</div>
                            <div class="about-two__content__user__image">
                                <img src="assets/images/resources/user-1.png" alt="ienet">
                                <img src="assets/images/resources/user-2.png" alt="ienet">
                                <img src="assets/images/resources/user-3.png" alt="ienet">
                                <span class="about-two__content__user__rm">+65</span>
                            </div>
                        </div>
                    </div><!-- /.about-two__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-two -->

    <section class="cta-two">
        <div class="cta-two__bg" style="background-image: url(assets/images/shapes/cta-2-bg.png);"></div>
        <!-- /.cta-two__bg -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="cta-two__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>Why Choose US<span
                                    class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Save Money Your <span>Internet</span> Service With
                                TV Service</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="cta-two__content__text">
                            Donec pretium ornare neque, ac luctus orci ultrices at. Sed blandit eleifend mi, a consectetur
                            tortor varius in.
                            Sed tincidunt aliquet lorem, eget tincidunt est molestie non. Sed tincidunt aliquet lorem, eget
                            tincidunt est molestie
                        </p>
                        <a href="about" class="ienet-btn"><span>Get In Touch<span class="ienet-btn__icon"><i
                                        class="fas fa-chevron-right"></i></span></span></a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cta-two__image">
                        <div class="row gutter-y-30 masonry-layout">
                            <div class="col-md-6">
                                <div class="cta-two__image__item cta-two__image__item--one wow fadeInUp"
                                    data-wow-delay="00ms">
                                    <img src="assets/images/resources/cta-2-1.jpg" alt="ienet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cta-two__image__item cta-two__image__item--two wow fadeInUp"
                                    data-wow-delay="100ms">
                                    <img src="assets/images/resources/cta-2-3.jpg" alt="ienet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cta-two__image__item wow fadeInUp" data-wow-delay="200ms">
                                    <img src="assets/images/resources/cta-2-2.jpg" alt="ienet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cta-two__image__item cta-two__image__item--four wow fadeInUp"
                                    data-wow-delay="300ms">
                                    <img src="assets/images/resources/cta-2-4.jpg" alt="ienet">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.cta-two -->


    <div class="client-carousel ">
    @endsection
