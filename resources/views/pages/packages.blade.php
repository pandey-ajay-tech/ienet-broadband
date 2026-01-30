@extends('layouts.master')
@section('title')
Pricing Plan | SpeedNET Broadband
@endsection
@section('content')

<style>
    /* Center the price circle horizontally in the card */
.packages-two__card__price {
    display: inline-block;      /* treat it like a block for centering */
    text-align: center;         /* center text inside */
    margin: 0 auto 20px auto;   /* auto left & right margin centers it */
    font-size: 36px;            /* adjust size if needed */
    font-weight: 700;
    position: relative;
    z-index: 2;                 /* ensure it's above background */
}
.packages-two__card__inner {
    display: flex;
    flex-direction: column;
    align-items: center;   /* horizontal centering */
    justify-content: flex-start; /* keep content top-aligned or change to center if needed */
    padding: 40px 20px;
}

</style>
<section class="packages-two packages-two--page">
    <div class="container">
        <div class="row gutter-y-30">

            <!-- PLAN 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="packages-two__card">
                    <div class="packages-two__card__inner">
                        <div class="packages-two__card__bg"></div>
                        <div class="packages-two__card__hover"
                            style="background-image:url(assets/images/resources/package-2-3.jpg);"></div>

                        <div class="packages-two__card__price">₹349 <span>/ Month</span></div>
                        <h3 class="packages-two__card__title">Home LITE</h3>

                        <ul class="packages-two__card__list">
                            <li><span class="fas fa-check"></span> 30 Mbps High-Speed Internet</li>
                            <li><span class="fas fa-check"></span>  Truly Unlimited no data caping</li>
                            <li><span class="fas fa-check"></span> OTT _IP TV add on</li>
                            <li><span class="fas fa-check"></span> Free Installation Support</li>
                        </ul>

                        <a class="packages-two__card__rm" href="https://user.snbroadband.in/book-connection">
                            <i class="icon-right-chevron"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- PLAN 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="packages-two__card">
                    <div class="packages-two__card__inner">
                        <div class="packages-two__card__bg"></div>
                        <div class="packages-two__card__hover"
                            style="background-image:url(assets/images/resources/package-2-2.jpg);"></div>

                        <div class="packages-two__card__price">₹449 <span>/ Month</span></div>
                        <h3 class="packages-two__card__title"> Home PLUS</h3>

                        <ul class="packages-two__card__list">
                            <li><span class="fas fa-check"></span> 50 Mbps Super Speed</li>
                            <li><span class="fas fa-check"></span> Truly Unlimited no data caping</li>
                            <li><span class="fas fa-check"></span> OTT _IP TV add on</li>
                            <li><span class="fas fa-check"></span> 24×7 Technical Support</li>
                        </ul>

                        <a class="packages-two__card__rm" href="https://user.snbroadband.in/book-connection">
                            <i class="icon-right-chevron"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- PLAN 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="packages-two__card">
                    <div class="packages-two__card__inner">
                        <div class="packages-two__card__bg"></div>
                        <div class="packages-two__card__hover"
                            style="background-image:url(assets/images/resources/package-2-1.jpg);"></div>

                        <div class="packages-two__card__price">₹649 <span>/ Month</span></div>
                        <h3 class="packages-two__card__title">Home MAX</h3>

                        <ul class="packages-two__card__list">
                            <li><span class="fas fa-check"></span> 100 Mbps Ultra Speed</li>
                            <li><span class="fas fa-check"></span> Truly Unlimited no data caping</li>
                            <li><span class="fas fa-check"></span> OTT _IP TV add on</li>
                            <li><span class="fas fa-check"></span> Priority Support</li>
                        </ul>

                        <a class="packages-two__card__rm" href="https://user.snbroadband.in/book-connection">
                            <i class="icon-right-chevron"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection