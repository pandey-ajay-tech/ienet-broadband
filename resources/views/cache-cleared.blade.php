@extends('layouts.master')
@section('title')
    404 Error
@endsection

@section('content')
    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Cache Cleared</h2><!-- /.page-title -->
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="index">Cache Cleared</a></li>
                <li><span>Cache Cleared</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="error-404">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="error-404__image">
                        <img src="assets/images/shapes/404.png" alt="404">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                    <div class="error-404__content">
                        <h2 class="error-404__title">Cache Cleared</h2><!-- /.error-404__title -->
                        <h2>✅ Cache cleared successfully</h2>
                        <p>You will be redirected to the home page in 5 seconds...</p>


                        <a href="/" class="ienet-btn"><span>Back To Home</span></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.error-404 -->
@endsection
