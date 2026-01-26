@extends('layouts.master')
@section('title')
    About Us
@endsection

{{-- Breadcrump --}}
@section('content')
{{-- ABOUT PAGE CONTENT --}}

<style>
/* Card hover effect */
.card-animate {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    cursor: pointer;
}

.card-animate:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

/* Optional: fade-in on scroll effect */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.fade-in-up {
    opacity: 0;
    animation: fadeInUp 0.6s forwards;
}

/* Staggered animation delay for each card */
.fade-in-up:nth-child(1) { animation-delay: 0.2s; }
.fade-in-up:nth-child(2) { animation-delay: 0.4s; }
.fade-in-up:nth-child(3) { animation-delay: 0.6s; }
</style>

<!-- <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <div class="container">
            <h2 class="page-header__title bw-split-in-left" style="perspective: 400px;"><div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate3d(-4.7857px, 0px, 0px); opacity: 0.7607;">A</div><div style="position: relative; display: inline-block; transform: translate3d(-5.1173px, 0px, 0px); opacity: 0.7441;">B</div><div style="position: relative; display: inline-block; transform: translate3d(-5.4601px, 0px, 0px); opacity: 0.727;">O</div><div style="position: relative; display: inline-block; transform: translate3d(-5.814px, 0px, 0px); opacity: 0.7093;">U</div><div style="position: relative; display: inline-block; transform: translate3d(-6.179px, 0px, 0px); opacity: 0.691;">T</div></div> <div style="position:relative;display:inline-block;"><div style="position: relative; display: inline-block; transform: translate3d(-6.5551px, 0px, 0px); opacity: 0.6722;">U</div><div style="position: relative; display: inline-block; transform: translate3d(-6.9423px, 0px, 0px); opacity: 0.6529;">S</div></div></h2>
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="index">HOME </a></li>
                <li><span>ABOUT US</span></li>
            </ul>
        </div>
    </section> -->

<section class="py-5" style="background:#ffffff;">
    <div class="container">

        {{-- Our Story --}}
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <h3 class="fw-bold mb-3" style="color:#111;">Our story</h3>

                <ul class="list-unstyled mb-3" style="color:#d8232a;">
                    <li class="mb-1">🔴 What We Offer</li>
                    <li class="mb-1">🔴 Affordable Pricing</li>
                    <li class="mb-1">🔴 Quick Installation</li>
                </ul>

                <p class="mb-3" style="color:#444;">
                    The story began with a vision to transform the way people connect and experience the internet.
                    Founded in 2020 by a group of passionate & experienced professionals, our journey started
                    with a clear objective in mind: to bridge the digital divide and empower businesses and individuals
                    with fast, reliable, and affordable connectivity solutions.
                </p>

                <p style="color:#444;">
                    We embarked on a mission to deliver cutting-edge connectivity solutions that would redefine the way
                    businesses connect their geographically dispersed offices, branches, and remote locations with
                    seamless, secure, and reliable networking solutions.
                </p>
            </div>

            <div class="col-md-6 text-center">
                <img src="assets/images/resources/about-us.png" class="img-fluid rounded shadow" alt="About">
            </div>
        </div>

        {{-- Spacer --}}
        <div class="my-5"></div>

        {{-- 3 Cards --}}
        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-4 h-100 rounded border shadow-sm card-animate fade-in-up">
                    <span class="fw-bold" style="color:#d8232a;">01</span>
                    <h5 class="fw-semibold mt-2">What We Offer.</h5>
                    <p class="mt-2" style="color:#444;">
                        Power up your business with limitless internet. If your business needs a robust
                        Internet Connectivity Solution with adequate redundancies built at the core,
                        SpeedNET's Internet Leased Line Solution is your best option to achieve reliable connectivity.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 h-100 rounded border shadow-sm card-animate fade-in-up">
                    <span class="fw-bold" style="color:#d8232a;">02</span>
                    <h5 class="fw-semibold mt-2">Affordable Pricing.</h5>
                    <p class="mt-2" style="color:#444;">
                        You no longer have to worry about being tied down by long-term contracts or unexpected bills.
                        With our prepaid broadband model, you stay in full control of usage, renewal & cost.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 h-100 rounded border shadow-sm card-animate fade-in-up">
                    <span class="fw-bold" style="color:#d8232a;">03</span>
                    <h5 class="fw-semibold mt-2">Quick Installation.</h5>
                    <p class="mt-2" style="color:#444;">
                        Faster provisioning enables quick activation for new customers. Services available across
                        multiple regions with fiber & wireless connectivity options.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
