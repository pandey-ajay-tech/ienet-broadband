@extends('layouts.master')
@section('title')
Contact Us
@endsection
@section('content')
<style>
    .ienet-btn-direction:hover {
        color: white !important;
        background-color: var(--ienet-black, #000000);
    }

    .ienet-btn-direction {
        display: inline-block;
        vertical-align: middle;
        -webkit-appearance: none;
        border: none;
        outline: none !important;
        background-color: var(--ienet-base, #df2339);
        color: var(--ienet-white, #fff);
        font-size: 16px;
        font-weight: 600;
        border-radius: 6px;
        letter-spacing: 0;
        padding: 11px 30px;
        transition: 500ms;
        text-transform: capitalize;
        position: relative;
        overflow: hidden;
        text-align: center;
        margin-top: 11px;
        margin-bottom: 14px;
    }


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

    .google-map-wrapper {
        position: relative;
        width: 100%;
        /* full width of parent */
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
    }

    .google-map-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        /* responsive width */
        height: 100%;
        /* responsive height */
        border: 0;
    }

    .google-map-wrapper {
        filter: none !important;
        -webkit-filter: none !important;
    }

    .google-map-wrapper iframe {
        filter: none !important;
        -webkit-filter: none !important;
        mix-blend-mode: normal !important;
    }
</style>

<section class="contact-one">
    <div class="container">
        <div class="row mb-3">
            <h2 class="fw-bold mb-3 text-center">CONTACT US</h2>
            <p class="text-center mb-4" style="max-width:800px;margin:0 auto;">
                Contact SpeedNET Broadband for new connections, support, or plan upgrades.
                Our team is ready to assist you with reliable internet services.
            </p>

        </div>
        <div class="row">
            <!-- Contact Info -->
            <div class="col-xl-4">
                <ul class="list-unstyled contact-one__info">
                    <li class="contact-one__info__item">
                        <div class="contact-one__info__icon">
                            <i class="icon-maps-and-flags"></i>
                        </div>
                        <div class="contact-one__info__content">
                            <h4 class="contact-one__info__title">Our Address</h4>
                            <p class="contact-one__info__text">
                                SPEEDNET C/O BISHNU YADAV, GRAM SAPAHA, GP-PATWABAD.PO PS MADHUPUR, SAPHA DEOGHAR,
                                DEOGHAR 815353, JHARKHAND INDIA
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
                                <img src="assets/images/resources/contact_us.png" alt="ienet">
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
                                            <option value="" selected>Select Subject</option>
                                            <option value="ALL">ALL</option>
                                            <option value="RF Installation">RF Installation</option>
                                            <option value="Ftth Installation">Ftth Installation</option>
                                            <option value="CCTV Installation">CCTV Installation</option>
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
    <div class="google-map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1859287.9208091807!2d85.42160074182081!3d24.47084078091204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSPEED%20NET%20BROADBAND%20https%3A%2F%2Fshare.google%2FoT5uLxGZZ6D1M5ckx!5e0!3m2!1sen!2sin!4v1769702216632!5m2!1sen!2sin"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <div style="text-align:center; margin-top:15px;">
        <a href="https://www.google.com/maps/search/?api=1&query=SPEED+NET+BROADBAND"
            target="_blank"
            class="ienet-btn-direction">
            📍 Get Directions
        </a>


    </div>
</section>
<script>
    document.querySelector('.contact-one__form').addEventListener('submit', function(e) {
        e.preventDefault();

        let name = document.querySelector('input[name="name"]').value;
        let email = document.querySelector('input[name="email"]').value;
        let subject = document.querySelector('select[name="subject"]').value;
        let message = document.querySelector('textarea[name="message"]').value;

        let whatsappNumber = "918797006007"; // <-- yahan client ka number daalo

        let text =
            `New Contact Query:%0A%0AName: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

        let url = `https://wa.me/${whatsappNumber}?text=${text}`;

        window.open(url, '_blank');
    });
</script>
@endsection