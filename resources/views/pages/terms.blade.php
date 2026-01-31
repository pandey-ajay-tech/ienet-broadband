@extends('layouts.master')
@section('title', 'Terms & Conditions')

@section('content')
    <!-- Page Header -->
    <!-- <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">TERMS & CONDITIONS</h2>
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li>TERMS & CONDITIONS</li>
            </ul>
        </div>
    </section> -->

    <!-- Content Section -->
    <section class="service-details py-5">
        <div class="container">
            <div class="row gutter-y-60">
                <!-- Main Content -->
                <div class="col-md-12 col-lg-8">
                    <div class="service-details__content">

                        <div class="service-details__thumbnail mb-4">
                            <img src="assets/images/resources/term-condition-image.png" class="img-fluid rounded shadow-sm"
                                alt="Terms & Conditions">
                        </div>

                        <!-- Terms Card 1 -->
                        <div class="terms-card mb-4 p-4 rounded shadow"
                            style="background-color:#fff; border-left: 5px solid #e60000;">
                            <h3 class="service-details__title text-dark">Terms & Conditions</h3>
                            <p class="service-details__text text-dark">
                                Welcome to our website. By accessing or using our website, you agree to comply with and be
                                bound
                                by these Terms and Conditions.
                            </p>
                            <p class="service-details__text text-dark">
                                All services and content provided on this website are for informational purposes only. We
                                reserve the right to modify, suspend, or discontinue any service without prior notice.
                            </p>
                        </div>

                        <!-- Terms Card 2 -->
                        <div class="terms-card mb-4 p-4 rounded shadow position-relative"
                            style="background:#fff; overflow:hidden; border-radius:12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">

                            <!-- Gradient Left Bar -->
                            <div
                                style="position:absolute; top:0; left:0; width:8px; height:100%;
                background: linear-gradient(to bottom, #e60000, #ff4d4d); border-radius:8px 0 0 8px;">
                            </div>

                            <!-- Title -->
                            <h3 style="font-weight:700; color:#000; margin-bottom:15px; position:relative; z-index:1;">
                                User Responsibilities
                                <span
                                    style="display:block; width:60px; height:3px; background:#e60000; margin-top:5px; border-radius:2px;"></span>
                            </h3>

                            <!-- List Items -->
                            <ul style="list-style:none; padding-left:0; margin:0; position:relative; z-index:1;">
                                <li style="margin-bottom:15px; display:flex; align-items:flex-start;">
                                    <span
                                        style="width:24px; height:24px; min-width:24px; background:#e60000; color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:12px; margin-right:12px;">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span style="color:#000; font-size:15px; line-height:1.6;">
                                        Users must use the website in compliance with applicable laws.
                                    </span>
                                </li>
                                <li style="margin-bottom:15px; display:flex; align-items:flex-start;">
                                    <span
                                        style="width:24px; height:24px; min-width:24px; background:#e60000; color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:12px; margin-right:12px;">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span style="color:#000; font-size:15px; line-height:1.6;">
                                        Unauthorized access or misuse of the website is strictly prohibited.
                                    </span>
                                </li>
                                <li style="margin-bottom:15px; display:flex; align-items:flex-start;">
                                    <span
                                        style="width:24px; height:24px; min-width:24px; background:#e60000; color:#fff; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:12px; margin-right:12px;">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span style="color:#000; font-size:15px; line-height:1.6;">
                                        Users are responsible for maintaining the confidentiality of any account
                                        information.
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <style>
                            .terms-card:hover {
                                transform: translateY(-5px);
                                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
                                transition: all 0.3s ease;
                            }
                        </style>


                        <!-- Terms Card 3 -->
                        <div class="terms-card mb-4 p-4 rounded shadow"
                            style="background-color:#fff; border-left: 5px solid #e60000;">
                            <h3 class="service-details__title text-dark">Limitation of Liability</h3>
                            <p class="service-details__text text-dark">
                                We are not responsible for any direct, indirect, or consequential damages arising from the
                                use
                                of this website. All information is provided “as is” without warranties of any kind.
                            </p>
                        </div>

                        <!-- Terms Card 4 -->
                        <div class="terms-card mb-4 p-4 rounded shadow"
                            style="background-color:#fff; border-left: 5px solid #e60000;">
                            <h3 class="service-details__title text-dark">Changes to Terms</h3>
                            <p class="service-details__text text-dark">
                                We may update these Terms and Conditions from time to time. Continued use of the website
                                indicates acceptance of the updated terms.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-12 col-lg-4">
                    <div class="service-sidebar">
                        <div class="service-sidebar__single">
                            <div class="service-sidebar__contact text-center"
                                style="background-image: url(assets/images/resources/service-contact-bg-1.png);">
                                <div class="service-sidebar__contact__icon"><i class="icon-telephone"></i></div>
                                <p class="service-sidebar__contact__number" style="color:#000;">
                                    <span style="color:#000;">Call Us</span>
                                    <a href="tel:+919234377577" >+91 9234377577</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Terms & Conditions Cards */
        .terms-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .terms-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .service-details__list li {
            margin-bottom: 10px;
            font-weight: 500;
        }
    </style>
@endsection
