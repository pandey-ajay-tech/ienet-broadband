@extends('layouts.welcome')
@section('title')
    Home | SpeedNET Broadband
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

                            <h6 class="sec-title__tagline bw-split-in-right">
                                <span class="sec-title__tagline__left-border"></span>
                                About SpeedNET Broadband
                                <span class="sec-title__tagline__right-border"></span>
                            </h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">
                                We Provide <span>Unlimited & Reliable</span> Internet For You
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->

                        <p class="about-one__content__text">
                            SpeedNET Broadband is a trusted internet service provider delivering
                            high-speed, stable and affordable broadband solutions for homes and
                            small businesses. Our fiber-powered network ensures uninterrupted
                            connectivity for streaming, gaming, work-from-home and daily browsing.
                        </p>

                        <ul class="about-one__content__list">
                            <li><span class="fas fa-check"></span>Unlimited High-Speed Internet</li>
                            <li><span class="fas fa-check"></span>30 Mbps, 50 Mbps & 100 Mbps Plans</li>
                            <li><span class="fas fa-check"></span>Affordable Monthly Pricing</li>
                            <li><span class="fas fa-check"></span>Quick Support & Easy Recharge</li>
                        </ul>

                        <a href="about" class="ienet-btn">
                            <span>
                                More About Us
                                <span class="ienet-btn__icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </span>
                        </a>
                    </div><!-- /.about-one__content -->
                </div>
                <!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="packages-one">
        <div class="packages-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url(assets/images/backgrounds/price-bg-1.jpg);"></div>

        <div class="container">

            <!-- SERVICES TOP BOX -->
            <ul class="packages-one__wrapper">

                <!-- HOME INTERNET -->
                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-home"></i></div>
                    <h3 class="packages-one__item__title">SpeedNET Home Internet</h3>
                    <p class="packages-one__item__tagline">Fast. Stable. Reliable.</p>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Ultra-High Speed Broadband</li>
                        <li><span class="fas fa-check"></span>Unlimited Data – No Daily Limits</li>
                        <li><span class="fas fa-check"></span>Smooth Streaming & Online Gaming</li>
                        <li><span class="fas fa-check"></span>Strong Wi-Fi Coverage</li>
                        <li><span class="fas fa-check"></span>24×7 Customer Support</li>
                    </ul>
                </li>

                <!-- CORPORATE INTERNET -->
                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-corporation"></i></div>
                    <h3 class="packages-one__item__title">SpeedNET Corporate Internet</h3>
                    <p class="packages-one__item__tagline">Built for Business Performance.</p>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Dedicated & Secure Network</li>
                        <li><span class="fas fa-check"></span>High Uptime with Business-Grade SLA</li>
                        <li><span class="fas fa-check"></span>Fast Upload & Download Speeds</li>
                        <li><span class="fas fa-check"></span>Scalable Bandwidth as per Business Need</li>
                        <li><span class="fas fa-check"></span>Priority 24×7 Technical Support</li>
                    </ul>
                </li>

                <!-- DATA CONNECTIVITY -->
                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-data-analytics"></i></div>
                    <h3 class="packages-one__item__title">SpeedNET Data Connectivity</h3>
                    <p class="packages-one__item__tagline">Powering Smart Connectivity.</p>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Dedicated Data Network</li>
                        <li><span class="fas fa-check"></span>Reliable & Stable Connectivity</li>
                        <li><span class="fas fa-check"></span>Ideal for Offices & Enterprises</li>
                        <li><span class="fas fa-check"></span>Flexible & Scalable Bandwidth</li>
                        <li><span class="fas fa-check"></span>Round-the-Clock Monitoring & Support</li>
                    </ul>
                </li>

            </ul>

            <!-- SECTION TITLE -->
            <!-- SECTION TITLE -->
            <div class="row align-items-center mt-60">
                <div class="col-md-8">
                    <div class="sec-title text-left">
                        <h6 class="sec-title__tagline">
                            <span class="sec-title__tagline__left-border"></span>
                            SpeedNET Broadband Plans
                            <span class="sec-title__tagline__right-border"></span>
                        </h6>

                        <h3 class="sec-title__title">
                            Simple, Affordable & <span>High-Speed Internet Plans</span>
                        </h3>
                    </div>
                </div>

                <div class="col-md-4 text-end">
                    <a href="packages" class="ienet-btn">
                        <span>
                            View All Plans
                            <span class="ienet-btn__icon">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>


            <!-- POPULAR PLANS -->
            <div class="row gutter-y-30 mt-40">

                <!-- 30 MBPS PLAN -->
                <div class="col-lg-4 col-md-6">
                    <div class="packages-one__card">
                        <div class="packages-one__card__price">₹349 <span>/ month</span></div>
                        <h3 class="packages-one__card__title">30 Mbps SuperFast Plan</h3>
                        <p class="packages-one__card__tagline">Affordable Internet for Everyday Use</p>

                        <ul class="packages-one__card__list">
                            <li><span class="fas fa-check"></span>Unlimited Data – No Daily Limits</li>
                            <li><span class="fas fa-check"></span>Seamless Browsing & HD Streaming</li>
                            <li><span class="fas fa-check"></span>IPTV & OTT App Support</li>
                            <li><span class="fas fa-check"></span>Stable Speed with Strong Wi-Fi</li>
                            <li><span class="fas fa-check"></span>24×7 Customer Support</li>
                        </ul>

                        <a class="ienet-btn w-100" href="https://user.snbroadband.in/book-connection">
                            <span>Book Now</span>
                        </a>
                    </div>
                </div>

                <!-- 50 MBPS PLAN -->
                <div class="col-lg-4 col-md-6">
                    <div class="packages-one__card">
                        <div class="packages-one__card__price">₹449 <span>/ month</span></div>
                        <h3 class="packages-one__card__title">50 Mbps SuperFast Plan</h3>
                        <p class="packages-one__card__tagline">Perfect for Families & Entertainment</p>

                        <ul class="packages-one__card__list">
                            <li><span class="fas fa-check"></span>Unlimited High-Speed Internet</li>
                            <li><span class="fas fa-check"></span>Seamless Streaming & Online Gaming</li>
                            <li><span class="fas fa-check"></span>IPTV & Multiple OTT Platforms</li>
                            <li><span class="fas fa-check"></span>Lag-Free Video Calls & Work</li>
                            <li><span class="fas fa-check"></span>Strong Wi-Fi Coverage</li>
                        </ul>

                        <a class="ienet-btn w-100" href="https://user.snbroadband.in/book-connection">
                            <span>Book Now</span>
                        </a>
                    </div>
                </div>

                <!-- 100 MBPS PLAN -->
                <div class="col-lg-4 col-md-6">
                    <div class="packages-one__card">
                        <div class="packages-one__card__price">₹649 <span>/ month</span></div>
                        <h3 class="packages-one__card__title">100 Mbps UltraSpeed Plan</h3>
                        <p class="packages-one__card__tagline">Maximum Speed for Power Users</p>

                        <ul class="packages-one__card__list">
                            <li><span class="fas fa-check"></span>Ultra-Fast Internet Speed</li>
                            <li><span class="fas fa-check"></span>Zero Buffer 4K Streaming</li>
                            <li><span class="fas fa-check"></span>Best for Work From Home & Gaming</li>
                            <li><span class="fas fa-check"></span>IPTV, OTT & Smart Home Ready</li>
                            <li><span class="fas fa-check"></span>Priority Technical Support</li>
                        </ul>

                        <a class="ienet-btn w-100" href="https://user.snbroadband.in/book-connection">
                            <span>Book Now</span>
                        </a>
                    </div>
                </div>

            </div>



            <!-- EXTRA SERVICES -->
            <div class="row mt-70">
                <div class="col-12 text-center">
                    <h4 class="mb-20">Our Additional Connectivity Solutions</h4>
                    <p>
                        Internet Leased Line • P2P Connectivity • Broadband FTTH •
                        Intelligent Home & Home Security Systems • Local Network &
                        Software Solutions • 24×7 Dedicated Technical Support
                    </p>

                    <strong class="d-block mt-20">
                        Powering Homes & Businesses with Trusted Speed
                    </strong>
                </div>
            </div>


        </div>
    </section>



    <section class="feature-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right">
                    <span class="sec-title__tagline__left-border"></span>
                    Why Choose SpeedNET
                    <span class="sec-title__tagline__right-border"></span>
                </h6>

                <h3 class="sec-title__title bw-split-in-left">
                    Our Special <span>Features</span>
                </h3>
            </div>

            <div class="row">
                <!-- LEFT FEATURES -->
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-dashboard"></i></div>
                        <h5 class="feature-one__box__title">Ultra-Fast Internet Speed</h5>
                        <p class="feature-one__box__text">
                            Enjoy stable high-speed internet for browsing, streaming, gaming & work.
                        </p>
                    </div>

                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-tv"></i></div>
                        <h5 class="feature-one__box__title">550+ IPTV Channels</h5>
                        <p class="feature-one__box__text">
                            Access a wide range of HD entertainment, news & regional IPTV channels.
                        </p>
                    </div>

                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-planning"></i></div>
                        <h5 class="feature-one__box__title">Flexible & Affordable Plans</h5>
                        <p class="feature-one__box__text">
                            Choose internet plans that perfectly match your usage and budget.
                        </p>
                    </div>
                </div>

                <!-- CENTER IMAGE -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-one__image">
                        <div class="feature-one__image__one">
                            <img src="{{ asset('assets/images/resources/feature-1-1.jpg') }}" alt="SpeedNET Broadband">
                        </div>
                        <div class="feature-one__image__border">
                            <img src="{{ asset('assets/images/shapes/feature-shape-1.png') }}" alt="SpeedNET">
                        </div>
                        <div class="feature-one__image__router">
                            <img src="{{ asset('assets/images/resources/feature-1-router.png') }}" alt="WiFi Router">
                        </div>
                    </div>
                </div>

                <!-- RIGHT FEATURES -->
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="00ms">
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-wifi-router"></i></div>
                        <h5 class="feature-one__box__title">Wi-Fi Router Included</h5>
                        <p class="feature-one__box__text">
                            Get a high-performance Wi-Fi router included with your connection.
                        </p>
                    </div>

                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-support"></i></div>
                        <h5 class="feature-one__box__title">24×7 Fast Customer Support</h5>
                        <p class="feature-one__box__text">
                            Dedicated technical support available anytime to assist you instantly.
                        </p>
                    </div>

                    <div class="feature-one__box">
                        <div class="feature-one__box__icon">
                            <i class="icon-data-analytics"></i>
                        </div>
                        <h5 class="feature-one__box__title">100% Free Installation</h5>
                        <p class="feature-one__box__text">
                            No installation charges — quick setup by our professional team.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Feature End -->
    <!-- Book Now Section -->
    <section class="mail-one">
        <div class="mail-one__bg" style="background-image: url(assets/images/backgrounds/mail-bg-1.jpg);"></div>
        <div class="mail-one__shape-left" style="background-image: url(assets/images/resources/mail-shape-1.png);"></div>
        <div class="mail-one__shape-right" style="background-image: url(assets/images/resources/mail-shape-2.png);"></div>

        <div class="container">
            <div class="mail-one__content">
                <div class="sec-title text-left">
                    <h6 class="sec-title__tagline bw-split-in-right">
                        <span class="sec-title__tagline__left-border"></span>
                        Why Choose SpeedNET Broadband
                        <span class="sec-title__tagline__right-border"></span>
                    </h6>

                    <h3 class="sec-title__title bw-split-in-left">
                        Fast & Reliable Internet for <span>Your Home & Business</span>
                    </h3>
                </div>

                <p class="mail-one__description">
                    SpeedNET Broadband offers ultra-fast, stable, and reliable internet connectivity for homes and
                    businesses.
                    Enjoy high-speed broadband plans (30 Mbps, 50 Mbps, 100 Mbps), unlimited data, smooth streaming, online
                    gaming,
                    and 24×7 customer support. Quick recharge and easy account management make staying connected simple and
                    hassle-free.
                </p>

                <!-- Book Now Button triggers popup -->
                <div class="mail-one__buttons">
                    <button class="ienet-btn" onclick="openPopup()">
                        <span>Book Now</span>
                    </button>

                    <a href="#quick-recharge" class="ienet-btn ienet-btn--secondary">
                        <span>Quick Recharge</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popup Form Modal -->
    <div id="whatsappPopup"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); z-index:9999; justify-content:center; align-items:center;">
        <div style="background:#fff; padding:30px; border-radius:10px; width:400px; max-width:90%;">
            <h3 style="margin-bottom:20px;">Send Details via WhatsApp</h3>
            <form id="whatsappForm">
                <input type="text" id="userName" placeholder="Your Name" required
                    style="width:100%; padding:10px; margin-bottom:10px;">
                <input type="email" id="userEmail" placeholder="Your Email" required
                    style="width:100%; padding:10px; margin-bottom:10px;">
                <input type="text" id="userLocation" placeholder="Your Location" required
                    style="width:100%; padding:10px; margin-bottom:10px;">
                <input type="text" id="userContact" placeholder="Your Contact Number" required
                    style="width:100%; padding:10px; margin-bottom:20px;">
                <button type="submit"
                    style="width:100%; padding:10px; background:#ff0000; color:#fff; border:none; border-radius:5px;">Send
                    via WhatsApp</button>
                <button type="button" onclick="closePopup()"
                    style="margin-top:10px; width:100%; padding:10px; border:none; border-radius:5px; background:#ccc;">Cancel</button>
            </form>
        </div>
    </div>

    <script>
        function openPopup() {
            document.getElementById('whatsappPopup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('whatsappPopup').style.display = 'none';
        }

        // Handle form submit
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();

            var name = encodeURIComponent(document.getElementById('userName').value);
            var email = encodeURIComponent(document.getElementById('userEmail').value);
            var location = encodeURIComponent(document.getElementById('userLocation').value);
            var contact = encodeURIComponent(document.getElementById('userContact').value);

            // WhatsApp number with pre-filled message
            var whatsappNumber = '919354575351';
            var message =
                `Hello SpeedNET, I want to recharge my broadband.%0A%0AName: ${name}%0AEmail: ${email}%0ALocation: ${location}%0AContact: ${contact}`;

            // Open WhatsApp in new tab
            window.open(`https://wa.me/${whatsappNumber}?text=${message}`, '_blank');

            // Close popup
            closePopup();
        });
    </script>


    <section class="cta-one">
        <div class="container">
            <div class="row">
                <!-- Image Column -->
                <div class="col-lg-6">
                    <div class="cta-one__image wow fadeInLeft" data-wow-delay="100ms">
                        <div class="cta-one__image__one">
                            <img src="{{ asset('assets/images/resources/cta-1-1.jpg') }}" alt="SpeedNET Broadband">
                        </div>
                        <div class="cta-one__image__shape">
                            <img src="{{ asset('assets/images/shapes/cta-shape-1.png') }}" alt="SpeedNET Shape">
                        </div>
                        <div class="cta-one__image__two wow fadeInUp" data-wow-delay="300ms">
                            <img src="{{ asset('assets/images/resources/cta-1-1.png') }}" alt="SpeedNET Image">
                        </div>
                        <div class="cta-one__image__price wow fadeInUp" data-wow-delay="200ms">
                            Start From ₹775 / <span>Month</span>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="cta-one__content">
                        <div class="sec-title text-left">
                            <h6 class="sec-title__tagline bw-split-in-right">
                                <span class="sec-title__tagline__left-border"></span>
                                Affordable & Reliable
                                <span class="sec-title__tagline__right-border"></span>
                            </h6>

                            <h3 class="sec-title__title bw-split-in-left">
                                Save Money on Your <span>Internet</span> with SpeedNET Broadband
                            </h3>
                        </div>

                        <p class="cta-one__content__text">
                            Get high-speed broadband plans at unbeatable prices starting from ₹775/month.
                            Enjoy unlimited data, smooth streaming, online gaming, and 24×7 customer support.
                            Perfect for homes and businesses looking for reliable and affordable internet service.
                        </p>

                        <a href="https://user.snbroadband.in/book-connection" target="_blank" class="ienet-btn">
                            <span>Book Now <span class="ienet-btn__icon"><i
                                        class="fas fa-chevron-right"></i></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.cta-one -->
@endsection
