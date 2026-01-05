@extends('layouts.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Contact Us</h2>
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>Contact</span></li>
            </ul>
        </div>
    </section>

    <section class="contact-one">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-xl-4">
                    <ul class="list-unstyled contact-one__info">
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-maps-and-flags"></i>
                            </div>
                            <div class="contact-one__info__content">
                                <h4 class="contact-one__info__title">Mailing Address</h4>
                                <p class="contact-one__info__text">
                                    Sapaha Near TTC Ground,<br>
                                    Madhupur, 81535
                                </p>
                            </div>
                        </li>
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-telephone"></i>
                            </div>
                            <div class="contact-one__info__content">
                                <h4 class="contact-one__info__title">Quick Contact</h4>
                                <p class="contact-one__info__text">
                                    <a href="tel:+919234377577">+91 9234377577</a><br>
                                    <a href="tel:+918797006007">+91 8797006007</a>
                                </p>
                            </div>
                        </li>
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-mail"></i>
                            </div>
                            <div class="contact-one__info__content">
                                <h4 class="contact-one__info__title">Support Email</h4>
                                <p class="contact-one__info__text">
                                    <a href="mailto:info@snbroadband.in">info@snbroadband.in</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Contact Form -->
                <div class="col-xl-8">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms"
                        method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="contact-one__form__bg"
                            style="background-image: url(assets/images/shapes/contact-bg-1.png);"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-one__form__image">
                                    <img src="assets/images/resources/contact-1-1.jpg" alt="ienet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-one__group">
                                    <div class="form-one__control form-one__control--full">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <div class="form-one__control__select custom-select-wrapper">
                                            <select name="subject" class="custom-select" required>
                                                <option value="">Select Subject</option>
                                                <option value="General Inquiry">General Inquiry</option>
                                                <option value="Support">Support</option>
                                                <option value="Feedback">Feedback</option>
                                            </select>
                                            <span class="custom-arrow"><i class="fas fa-chevron-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <textarea name="message" placeholder="Write Message..." required></textarea>
                                    </div>
                                    <div class="form-one__control form-one__control--full">
                                        <button type="submit" class="ienet-btn">
                                            <span>Get In Touch
                                                <span class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="google-map">
        <div class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29096.875954901167!2d86.62117333156935!3d24.27290582140401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSapaha%20Near%20TTC%20Ground%2C%20Madhupur%2C%20815353!5e0!3m2!1sen!2sin!4v1767632893103!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Optional: Custom select CSS -->
    <style>
        .custom-select-wrapper {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .custom-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 100%;
            padding: 12px 40px 12px 15px;
            font-size: 14px;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #fff;
            cursor: pointer;
            transition: 0.3s all;
        }

        .custom-select:focus {
            outline: none;
            border-color: #e60000;
            box-shadow: 0 0 6px rgba(230, 0, 0, 0.4);
        }

        .custom-arrow {
            position: absolute;
            top: 50%;
            right: 15px;
            pointer-events: none;
            transform: translateY(-50%);
            color: #e60000;
            font-size: 14px;
        }
    </style>
@endsection
