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
<!-- Why Choose Us -->
<section class="py-5" style="background:#ffffff;">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Image -->
            <div class="col-md-6 text-center">
                <img src="assets/images/resources/why-choose-us.png" class="img-fluid rounded shadow" alt="Why Choose Us">
            </div>

            <!-- Content -->
            <div class="col-md-6">
                <h3 class="fw-bold mb-3" style="color:#111;">Why Choose Us</h3>

                <div class="row g-3">

                    <div class="col-12">
                        <div class="d-flex">
                            <div class="me-3 fw-bold" style="color:#d8232a;">1.</div>
                            <div>
                                <h6 class="fw-semibold mb-1">Blazing Fast Speed</h6>
                                <p class="mb-0" style="color:#444;">Stream, Game and Download without interruption.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex">
                            <div class="me-3 fw-bold" style="color:#d8232a;">2.</div>
                            <div>
                                <h6 class="fw-semibold mb-1">Reliable Network</h6>
                                <p class="mb-0" style="color:#444;">Minimal downtime with robust infrastructure.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex">
                            <div class="me-3 fw-bold" style="color:#d8232a;">3.</div>
                            <div>
                                <h6 class="fw-semibold mb-1">Transparent Pricing</h6>
                                <p class="mb-0" style="color:#444;">No hidden charges, clear plan details.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex">
                            <div class="me-3 fw-bold" style="color:#d8232a;">4.</div>
                            <div>
                                <h6 class="fw-semibold mb-1">Friendly Support</h6>
                                <p class="mb-0" style="color:#444;">Quick and helpful customer service when you need it.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex">
                            <div class="me-3 fw-bold" style="color:#d8232a;">5.</div>
                            <div>
                                <h6 class="fw-semibold mb-1">Flexible Plans</h6>
                                <p class="mb-0" style="color:#444;">Choose the right plan for your budget and usage.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


@endsection
