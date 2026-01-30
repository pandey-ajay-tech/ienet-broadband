@extends('layouts.master')
@section('title')
    SERVICES
@endsection
<!-- Bootstrap (optional but recommended) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
    /* Safety fixes */
    .service-page {
        padding: 60px 0;
    }

    .faq-one__accordion {
        padding-bottom: 28px !important;
    }
    

    /* .service-page__item {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        text-align: center;
    } */
    .service-page__item {
    display: flex;
    flex-direction: column;
    height: 100%;
}

    /* .service-page__item__image img {
        width: 100%;
        height: auto;
        display: block;
    } */

    .service-page__item__image {
    flex-shrink: 0; /* image height fix rahe */
}

.service-page__carousel .item {
    display: flex;
}

.service-page__carousel .service-page__item {
    flex: 1; /* sab items equal width & height */
}
.service-page__item__image img {
    width: 100%;
    height: 200px; /* ya jo height chahiye */
    object-fit: cover; /* image properly fill kare without distortion */
}


    .service-page__item__content {
        padding: 20px;
        flex-grow: 1; /* content same height fill kare */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    }

    .service-page__item__title {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .service-page__item__icon span {
        font-size: 30px;
        color: #e60000;
    }

    /* Owl must be visible */
    .owl-carousel {
        display: block !important;
    }
</style>

<style>
    .service-dropdown {
        display: none;
        padding: 10px 0 15px;
    }

    .service-details {
        /* padding: 120px 0 !important; */
        position: relative;
    }

    .service-card {
        background: #ffffff;
        border-left: 4px solid #e60000;
        padding: 12px 15px;
        font-size: 14px;
        color: #333;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        border-radius: 6px;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .service-page__item__title{
        font-size: 17px;
    }
</style>
@section('content')
    <!-- Service Start -->
    <!-- Service Start -->
    <section class="service-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title text-center">

                        <h6 class="sec-title__tagline bw-split-in-right">
                            <span class="sec-title__tagline__left-border"></span>
                            Our Best Services
                            <span class="sec-title__tagline__right-border"></span>
                        </h6>

                        <h3 class="sec-title__title bw-split-in-left">
                            We Are Offering<br> Best <span>Services</span>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row gutter-y-30">

                <!-- Service 1 -->
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="service-one__item text-center">
                        <div class="service-one__item__image">
                            <img src="assets/images/resources/1.png" alt="Home & Business Internet">
                        </div>
                        <div class="service-one__item__shape">
                            <img src="assets/images/shapes/service-1-border1.png" alt="">
                        </div>
                        <h3 class="service-one__item__title">
                            Home & Business<br> Internet Solution
                        </h3>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="50ms">
                    <div class="service-one__item service-one__item--reverse text-center">
                        <div class="service-one__item__image">
                            <img src="assets/images/resources/2.png" alt="Internet Leased Line">
                        </div>
                        <div class="service-one__item__shape">
                            <img src="assets/images/shapes/service-1-border1.png" alt="">
                        </div>
                        <h3 class="service-one__item__title">
                            Internet<br> Leased Line (ILL)
                        </h3>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="service-one__item text-center">
                        <div class="service-one__item__image">
                            <img src="assets/images/resources/3.png" alt="Managed Network Solution">
                        </div>
                        <div class="service-one__item__shape">
                            <img src="assets/images/shapes/service-1-border1.png" alt="">
                        </div>
                        <h3 class="service-one__item__title">
                            Managed<br> Network Solution
                        </h3>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="150ms">
                    <div class="service-one__item service-one__item--reverse text-center">
                        <div class="service-one__item__image">
                            <img src="assets/images/resources/service_4.png" alt="Cloud Services">
                        </div>
                        <div class="service-one__item__shape">
                            <img src="assets/images/shapes/service-1-border1.png" alt="">
                        </div>
                        <h3 class="service-one__item__title">
                            Remote Desktop &<br> Cloud Storage
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Service End -->


    <section class="service-page">
        <div class="container">

            <!-- SECTION TITLE (OUTSIDE CAROUSEL) -->
            <div class="row">
                <div class="col-12">
                    <div class="sec-title text-center">
                        <h6 class="sec-title__tagline bw-split-in-right">
                            <span class="sec-title__tagline__left-border"></span>
                            Exceptional Solutions
                            <span class="sec-title__tagline__right-border"></span>
                        </h6>

                        <h3 class="sec-title__title bw-split-in-left">
                            Delivering Innovative<br>
                            <span>Services</span> You Can Trust
                        </h3>
                    </div>
                </div>
            </div>

            <!-- OWL CAROUSEL -->
            <div class="service-page__carousel owl-carousel owl-theme"
                data-owl-options='{
                "items": 1,
                "margin": 20,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "dots": true,
                "autoplay": true,
                "responsive": {
                    "0": { "items": 1 },
                    "576": { "items": 1 },
                    "768": { "items": 2 },
                    "1200": { "items": 3 }
                }
            }'>

                <div class="item">
                    <div class="service-page__item"style="display:flex; flex-direction:column; min-height:350px;">
                        <div class="service-page__item__image">
                            <img src="assets/images/resources/CCTV_Surveillance_Services.png" alt="ienet">
                        </div>
                        <div class="service-page__item__content"style="display:flex; flex-direction:column; justify-content:space-between; flex-grow:1;">
                            <h3 class="service-page__item__title"><a href="#">CCTV Surveillance Services</a></h3>
                            <div class="service-page__item__icon"><span class="icon-optical-fiber"></span></div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="service-page__item"style="display:flex; flex-direction:column; min-height:350px;">
                        <div class="service-page__item__image">
                            <img src="assets/images/resources/Managed_Wi-Fi_solutions.png" alt="ienet">
                        </div>
                        <div class="service-page__item__content"style="display:flex; flex-direction:column; justify-content:space-between; flex-grow:1;">
                            <h3 class="service-page__item__title"><a href="#">
                            Managed Wi-Fi Solutions</a></h3>
                            <div class="service-page__item__icon"><span class="icon-tv"></span></div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="service-page__item"style="display:flex; flex-direction:column; min-height:350px;">
                        <div class="service-page__item__image">
                            <img src="assets/images/resources/⁠Local_wifi_service.png" alt="ienet">
                        </div>
                        <div class="service-page__item__content"style="display:flex; flex-direction:column; justify-content:space-between; flex-grow:1;">
                            <h3 class="service-page__item__title"><a href="#">⁠Local wifi service</a></h3>
                            <div class="service-page__item__icon"><span class="icon-cyber-security"></span></div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="service-page__item"style="display:flex; flex-direction:column; min-height:350px;">
                        <div class="service-page__item__image">
                            <img src="assets/images/resources/VPN-services.png" alt="ienet">
                        </div>
                        <div class="service-page__item__content"style="display:flex; flex-direction:column; justify-content:space-between; flex-grow:1;">
                            <h3 class="service-page__item__title"><a href="#">⁠VPN services</a></h3>
                            <div class="service-page__item__icon"><span class="icon-telephone-1"></span></div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="service-page__item"style="display:flex; flex-direction:column; min-height:350px;">
                        <div class="service-page__item__image">
                            <img src="assets/images/resources/Network-Security.png" alt="ienet">
                        </div>
                        <div class="service-page__item__content"style="display:flex; flex-direction:column; justify-content:space-between; flex-grow:1;">
                            <h3 class="service-page__item__title"><a href="#">⁠Network Security</a></h3>
                            <div class="service-page__item__icon"><span class="icon-tv-box"></span></div>
                        </div>
                    </div>
                </div><!-- item -->
                <div class="item">
                    <div class="service-page__item"style="display:flex; flex-direction:column; min-height:350px;">
                        <div class="service-page__item__image">
                            <img src="assets/images/resources/IT-Support-Maintenance.png" alt="ienet">
                        </div>
                        <div class="service-page__item__content"style="display:flex; flex-direction:column; justify-content:space-between; flex-grow:1;">
                            <h3 class="service-page__item__title"><a href="#">IT Support & Maintenance</a></h3>
                            <div class="service-page__item__icon"><span class="icon-optical-fiber"></span></div>
                        </div>
                    </div>
                </div><!-- item -->

                <!-- Repeat ONLY .item blocks -->
            </div>

        </div>
    </section>

    <section class="service-details">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">
                        <div class="service-details__thumbnail">
                            <img src="assets/images/resources/leased.png" alt="Fiber Line & Broadband Line Activation">
                        </div><!-- /.service-details__thumbnail -->
                        <h3 class="service-details__title">Internet Leased Line & Broadband FTTH</h3>
                        <!-- /.service-details__title -->

                        <p class="service-details__text">
                            We provide high-performance Internet Leased Line and FTTH Broadband services designed
                            for businesses, enterprises, and residential users. Our fiber-optic network ensures
                            stable connectivity, low latency, and uninterrupted internet access for mission-critical
                            operations and daily usage.
                        </p>
                        <!-- /.service-details__text -->

                        <p class="service-details__text">
                            Whether you need dedicated bandwidth for corporate offices, seamless broadband
                            connectivity for homes, or scalable internet solutions, our services are engineered
                            to deliver consistent speed, enhanced security, and reliable performance across all
                            connected devices.
                        </p>
                        <!-- /.service-details__text -->

                        <h3 class="service-details__title">Benefits of This Service</h3>
                        <!-- /.service-details__title -->

                        <p class="service-details__text">
                            Our Internet Leased Line and FTTH solutions offer superior speed, reliability, and
                            flexibility. With dedicated support and modern infrastructure, customers experience
                            seamless connectivity that supports business growth, smart home integration, and
                            uninterrupted digital communication.
                        </p>
                        <!-- /.service-details__text -->

                        <ul class="list-unstyled service-details__list">
                            <li><span class="fas fa-check"></span>Dedicated Bandwidth</li>
                            <li><span class="fas fa-check"></span>High-Speed Internet</li>
                            <li><span class="fas fa-check"></span>Low Latency</li>
                            <li><span class="fas fa-check"></span>99.9% Uptime</li>
                            <li><span class="fas fa-check"></span>Secure Network</li>
                            <li><span class="fas fa-check"></span>24×7 Monitoring</li>
                            <li><span class="fas fa-check"></span>Scalable Plans</li>
                            <li><span class="fas fa-check"></span>Expert Support</li>
                        </ul><!-- /.list-unstyled team-details__list -->

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="service-details__image">
                                    <img src="assets/images/resources/serv1.png" alt="ienet">
                                </div><!-- /.service-details__image -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="service-details__image">
                                    <img src="assets/images/resources/serv2.png" alt="ienet">
                                </div><!-- /.service-details__image -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                        <p class="service-details__text">
                            Our services are built to deliver reliable, high-speed connectivity with maximum
                            performance and security. Using advanced fiber infrastructure, we ensure smooth
                            internet access for streaming, work, communication, and business operations without
                            interruptions.
                        </p><!-- /.service-details__text -->

                        <h3 class="service-details__title">FAQ On This Service</h3>
                        <!-- /.service-details__title -->

                        <p class="service-details__text">
                            Below are some frequently asked questions related to our core services including
                            Internet Leased Line, P2P Connectivity, FTTH Broadband, Intelligent Home Solutions,
                            Network & Software Services, and Technical Support.
                        </p><!-- /.service-details__text -->

                        <div class="faq-one__accordion ienet-accrodion" data-grp-name="ienet-accrodion">

                            <!-- FAQ 1 -->
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span>
                                        What is an Internet Leased Line?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            An Internet Leased Line is a dedicated, high-speed internet connection
                                            that provides consistent bandwidth, low latency, and secure connectivity
                                            for businesses and enterprises.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span>
                                        What is P2P connectivity used for?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Point-to-Point (P2P) connectivity is used to connect two locations directly,
                                            ensuring secure data transfer, high speed, and reliable communication
                                            between offices or branches.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span>
                                        What is FTTH broadband?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            FTTH (Fiber to the Home) broadband delivers ultra-fast internet directly
                                            through fiber-optic cables, providing high speed, stability, and better
                                            performance for homes and small offices.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span>
                                        What is included in Intelligent Home & Security systems?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Intelligent Home solutions include smart surveillance, access control,
                                            automation systems, and security monitoring to ensure safety, comfort,
                                            and control of your home environment.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span>
                                        What are Local Network & Software Solutions?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Local Network and Software Solutions include LAN setup, server management,
                                            network optimization, and customized software services to support
                                            business operations efficiently.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 6 -->
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        <span class="accrodion-title__icon"></span>
                                        Do you provide technical support?
                                    </h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            Yes, we provide reliable technical support with quick response time,
                                            troubleshooting assistance, and maintenance services to ensure
                                            uninterrupted connectivity and system performance.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!-- /.service-details__content -->
                </div><!-- /.col-md-12 col-lg-8 -->
                <div class="col-md-12 col-lg-4">
                    <div class="service-sidebar">
                        <div class="service-sidebar__single">
                            <ul class="list-unstyled service-sidebar__nav service-accordion">

                                <li>
                                    <a href="javascript:void(0)" class="service-toggle">
                                        Internet Leased Line
                                    </a>
                                    <div class="service-dropdown">
                                        <div class="service-card">
                                            Dedicated high-speed internet for enterprises with guaranteed
                                            bandwidth, low latency, and secure connectivity.
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" class="service-toggle">
                                        P2P Connectivity
                                    </a>
                                    <div class="service-dropdown">
                                        <div class="service-card">
                                            Secure point-to-point connectivity between two locations for
                                            fast and reliable data transfer.
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" class="service-toggle">
                                        Broadband FTTH
                                    </a>
                                    <div class="service-dropdown">
                                        <div class="service-card">
                                            Fiber-to-the-home broadband delivering ultra-fast internet for
                                            homes and small offices.
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" class="service-toggle">
                                        Intelligent Home & Security System
                                    </a>
                                    <div class="service-dropdown">
                                        <div class="service-card">
                                            Smart surveillance, automation, and home security solutions
                                            for safety and control.
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" class="service-toggle">
                                        Network & Software Solutions
                                    </a>
                                    <div class="service-dropdown">
                                        <div class="service-card">
                                            LAN setup, server management, and customized software solutions
                                            for businesses.
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" class="service-toggle">
                                        Technical Support
                                    </a>
                                    <div class="service-dropdown">
                                        <div class="service-card">
                                            24×7 technical assistance, troubleshooting, and maintenance
                                            support by experts.
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="service-sidebar__single ">
                            <div class="service-sidebar__contact text-center"
                                style="background-image: url(assets/images/resources/service-contact-bg-1.png);">
                                <div class="service-sidebar__contact__icon">
                                    <i class="icon-telephone"></i>
                                </div><!-- /.service-sidebar__contact__icon -->
                                <p class="service-sidebar__contact__number" style="color:#000;">
                                    <span style="color:#000;">Call Emergency</span>
                                    <a href="tel:+919234377577">+91 9234377577</a>
                                </p>
                            </div><!-- /.service-sidebar__contact -->
                        </div>

                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-12 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-details -->
    <script>
        // Pure JavaScript dropdown toggle
        document.querySelectorAll('.service-toggle').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const dropdown = this.nextElementSibling;

                // Close other dropdowns
                document.querySelectorAll('.service-dropdown').forEach(function(dd) {
                    if (dd !== dropdown) {
                        dd.style.display = 'none';
                    }
                });

                // Toggle current dropdown
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
    <!-- jQuery (MUST COME FIRST) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.service-page__carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 700,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            });
        });
    </script>
@endsection
