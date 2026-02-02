<!-- main-slider-start -->
<section class="main-slider-one">
    <Style>
        .item {
            margin-top: -130px !important;
        }
        p.main-slider-one__text {
            font-size: 12px;
        }
        /* ===============================
   CLEAN TRUST STRIP
   =============================== */

.trust-strip {
    background: #ffffff;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 28px 0;
}

.trust-strip__wrap {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
}

/* Items */
.trust-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    min-width: 140px;
    color: #000;
    text-decoration: none;
}

.trust-item strong {
    font-size: 28px;
    font-weight: 700;
}

.trust-item .meta {
    font-size: 14px;
    color: #666;
    margin-top: 4px;
}

/* Google */
.trust-item.google img {
    height: 22px;
    margin: 6px 0;
}

.trust-item .label {
    font-size: 11px;
    color: #888;
    letter-spacing: 1px;
}

.rating {
    display: flex;
    align-items: center;
    gap: 6px;
}

.rating .stars {
    color: #fbbc04;
    font-size: 14px;
}

/* Divider */
.divider {
    width: 1px;
    height: 50px;
    background: #e5e5e5;
}

/* Responsive */
@media (max-width: 992px) {
    .trust-strip__wrap {
        flex-wrap: wrap;
        justify-content: center;
    }

    .divider {
        display: none;
    }
}

        
    </Style>
    <div class="main-slider-one__carousel ienet-owl__carousel owl-carousel"
        data-owl-options='{
        "loop": true,
        "animateOut": "fadeOut",
        "animateIn": "fadeIn",
        "items": 1,
        "autoplay": true,
        "autoplayTimeout": 7000,
        "smartSpeed": 1000,
        "nav": false,
        "dots": true,
        "margin": 0
        }'>

        <!-- SLIDE 1 -->
        <div class="item">
            <div class="main-slider-one__item">
                {{-- <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"> --}}
                <div class="main-slider-one__bg" style="background-image: url(assets/images/backgrounds/banner_n.jpeg);">
                </div>

                <div class="main-slider-one__content">
                    <h5 class="main-slider-one__sub-title">
                        <span class="main-slider-one__sub-title__border"></span>
                        Connecting Homes & Businesses
                    </h5>

                    <h2 class="main-slider-one__title">
                        Your Gateway to<br> Fast & Reliable Internet
                    </h2>

                    <p class="main-slider-one__text">
                        Enjoy ultra-fast fiber broadband with unlimited data, stable connectivity,
                        and affordable plans starting from just ₹349/month.
                    </p>

                    <div class="main-slider-one__btn">
                        <a href="services" class="ienet-btn main-slider-one__btn__first">
                            <span>Our Services
                                <span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span>
                            </span>
                        </a>

                        <a href="plans-pricing" class="ienet-btn main-slider-one__btn__last">
                            <span>
                                <span class="ienet-btn__icon ienet-btn__icon--left">
                                    <i class="fas fa-bolt"></i>
                                </span>
                                View Plans
                            </span>
                        </a>
                    </div>
                </div>

                <div class="main-slider-one__image">
                    <div class="main-slider-one__image__one">
                        <img src="{{ asset('assets/images/backgrounds/slider-1-layer-2-new.png') }}"
                            alt="Internet Service">
                    </div>

                    {{-- <div class="main-slider-one__image__border">
                        <img src="{{ asset('assets/images/shapes/slider-1-border.png') }}" alt="border">
                    </div> --}}

                    <!-- <div class="main-slider-one__image__user">
                        <div class="main-slider-one__image__user__text">Trusted by 1000+ Users</div>
                        <div class="main-slider-one__image__user__image">
                            <img src="{{ asset('assets/images/resources/user-1.png') }}" alt="">
                            <img src="{{ asset('assets/images/resources/user-2.png') }}" alt="">
                            <img src="{{ asset('assets/images/resources/user-3.png') }}" alt="">
                            <span class="main-slider-one__image__user__rm">+</span>
                        </div>
                    </div> -->
                </div>

                <div class="main-slider-one__layer"
                    style="background-image: url(assets/images/backgrounds/3.png);"></div>
            </div>
        </div>


        <!-- SLIDE 2 -->
        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg"
                    style="background-image: url(assets/images/backgrounds/banner_n.jpeg);"></div>

                <div class="main-slider-one__content">
                    <h5 class="main-slider-one__sub-title">
                        <span class="main-slider-one__sub-title__border"></span>
                        High-Speed Fiber Broadband
                    </h5>

                    <h2 class="main-slider-one__title">
                        Unlimited Internet<br> for Every Need
                    </h2>

                    <p class="main-slider-one__text">
                        Perfect plans for streaming, gaming, work-from-home and offices.
                        Choose from 30 Mbps, 50 Mbps or 100 Mbps plans.
                    </p>

                    <div class="main-slider-one__btn">
                        <a href="services" class="ienet-btn main-slider-one__btn__first">
                            <span>Our Services
                                <span class="ienet-btn__icon"><i class="fas fa-map-marker-alt"></i></span>
                            </span>
                        </a>

                        <a href="plans-pricing" class="ienet-btn main-slider-one__btn__last">
                            <span>
                                <span class="ienet-btn__icon ienet-btn__icon--left">
                                    <i class="fas fa-credit-card"></i>
                                </span>
                                View Plans
                            </span>
                        </a>
                    </div>
                </div>

                <div class="main-slider-one__image">
                    <div class="main-slider-one__image__one">
                        <img src="{{ asset('assets/images/backgrounds/slider-1-layer-2-new.png') }}" alt="">
                    </div>
                    {{-- <div class="main-slider-one__image__border">
                        <img src="{{ asset('assets/images/shapes/slider-1-border.png') }}" alt="">
                    </div> --}}
                </div>

                <div class="main-slider-one__layer"
                    style="background-image: url(assets/images/backgrounds/1.png);">
                </div>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg"
                    style="background-image: url(assets/images/backgrounds/banner_n.jpeg);"></div>

                <div class="main-slider-one__content">
                    <h5 class="main-slider-one__sub-title">
                        <span class="main-slider-one__sub-title__border"></span>
                        Affordable & Reliable
                    </h5>

                    <h2 class="main-slider-one__title">
                        Broadband Plans<br> Starting at ₹349
                    </h2>

                    <p class="main-slider-one__text">
                        No hidden charges, no data limits, and fast installation.
                        Get connected today with our trusted fiber network.
                    </p>

                    <div class="main-slider-one__btn">
                        <a href="services" class="ienet-btn main-slider-one__btn__first">
                            <span>Our Services
                                <span class="ienet-btn__icon"><i class="fas fa-map-marker-alt"></i></span>
                            </span>
                        </a>

                        <a href="plans-pricing" class="ienet-btn main-slider-one__btn__last">
                            <span>
                                <span class="ienet-btn__icon ienet-btn__icon--left">
                                    <i class="fas fa-credit-card"></i>
                                </span>
                                View Plans
                            </span>
                        </a>
                    </div>
                </div>

                <div class="main-slider-one__image">
                    <div class="main-slider-one__image__one">
                        <img src="{{ asset('assets/images/backgrounds/slider-1-layer-2-new.png') }}" alt="">
                    </div>
                    {{-- <div class="main-slider-one__image__border">
                        <img src="{{ asset('assets/images/shapes/slider-1-border.png') }}" alt="">
                    </div> --}}
                </div>

                <div class="main-slider-one__layer"
                    style="background-image: url(assets/images/backgrounds/4.png);"></div>
            </div>
        </div>

    </div>
</section>

<section class="trust-strip">
    <div class="container">

        <div class="trust-strip__wrap">

            <!-- Google Reviews -->
            <a href="https://share.google/oT5uLxGZZ6D1M5ckx"
               target="_blank"
               class="trust-item google">

                <span class="label">Reviewed on</span>

                <img src="https://www.pngall.com/wp-content/uploads/5/Google-Logo-PNG-Picture.png" alt="Google">

                <div class="rating">
                    <strong>4.9</strong>
                    <span class="stars">★★★★★</span>
                </div>

                <span class="meta">Customer Reviews</span>
            </a>

            <div class="divider"></div>

            <!-- Speed -->
            <div class="trust-item">
                <strong>1 Gbps</strong>
                <span class="meta">Ultra Fast Fiber</span>
            </div>

            <div class="divider"></div>

            <!-- Customers -->
            <div class="trust-item">
                <strong>10,000+</strong>
                <span class="meta">Active Users</span>
            </div>

            <div class="divider"></div>

            <!-- Support -->
            <div class="trust-item">
                <strong>24×7</strong>
                <span class="meta">Local Support</span>
            </div>

        </div>

    </div>
</section>

