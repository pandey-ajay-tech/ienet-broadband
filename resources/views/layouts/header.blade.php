<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"><i class="icon-mail"></i></span>
                            <a href="mailto:info@snbroadband.in')}}">info@snbroadband.in</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"><i class="icon-maps-and-flags"></i></span>
                            Sapaha Near TTC Ground, Madhupur, 815353
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    {{-- <div class="topbar-one__right">
                        <div class="topbar-one__social">

                            <a href="https://facebook.com')}}">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com')}}">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com')}}">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://www.youtube.com/')}}">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right --> --}}
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->

        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ route('/') }}">
                            <img src="{{ asset('assets/images/logo_black.png') }}" alt="Ienet HTML" height="80">
                            {{-- <img src="{{ asset('assets/images/74.png') }}" alt="Ienet HTML" height="80"> --}}
                        </a>
                    </div><!-- /.main-header__logo -->
                    <a href="#" class="main-header__toggler"><span class="icon-menu"></span></a>
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li class="dropdown megamenu">
                                <a href="{{ route('/') }}">Home</a>

                            </li>



                            <li>
                                <a href="{{ route('front.about-us') }}">About</a>
                            </li>
                            <li class="dropdown">
                                <a href="plans-pricing">Plans & Pricing </a>
                                {{-- <ul>
                                    <li class="dropdown">
                                        <a href="#">Movies</a>
                                        <ul class="sub-menu">
                                            <li><a href="movie">Movies Page</a></li>
                                            <li><a href="movie-carousel">Movies Carousel</a></li>
                                            <li><a href="movie-details">Movies Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Teams</a>
                                        <ul class="sub-menu">
                                            <li><a href="team">Our Team</a></li>
                                            <li><a href="team-carousel">Team Carousel</a></li>
                                            <li><a href="team-details">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="reviews">Testimonials</a></li>
                                    <li><a href="reviews-carousel">Testimonials Carousel</a></li>
                                    <li><a href="packages">Pricing Page</a></li>
                                    <li><a href="packages-carousel">Pricing Carousel</a></li>
                                    <li>
                                        <a href="gallery">Gallery</a>
                                        <ul>
                                            <li><a href="gallery">Gallery Masonry</a></li>
                                            <li><a href="gallery-filter">Gallery Filter</a></li>
                                            <li><a href="gallery-grid">Gallery Grid</a></li>
                                            <li><a href="gallery-carousel">Gallery Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq">FAQs</a></li>
                                    <li><a href="login">Login</a></li>
                                    <li><a href="404">404 Error</a></li>
                                </ul> --}}
                            </li>
                            <li class="dropdown">
                                <a href="{{ route('service') }}">Services</a>

                            </li>

                            {{-- <li class="dropdown">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="#">Products</a>
                                        <ul class="sub-menu">
                                            <li><a href="products">No Sidebar</a></li>
                                            <li><a href="products-left">Left Sidebar</a></li>
                                            <li><a href="products-right">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="products-carousel">Products Carousel</a></li>
                                    <li><a href="product-details">Product Details</a></li>
                                    <li><a href="cart">Cart</a></li>
                                    <li><a href="checkout">Checkout</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="dropdown">
                                <a href="#">News</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="#">News grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid">No Sidebar</a></li>
                                            <li><a href="blog-grid-left">Left Sidebar</a></li>
                                            <li><a href="blog-grid-right">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">News list</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list">No Sidebar</a></li>
                                            <li><a href="blog-list-left">Left Sidebar</a></li>
                                            <li><a href="blog-list-right">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-carousel">News Carousel</a></li>
                                    <li class="dropdown">
                                        <a href="#">News Details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-details">No Sidebar</a></li>
                                            <li><a href="blog-details-left">Left Sidebar</a></li>
                                            <li><a href="blog-details-right">Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        {{-- <a href="#" class="search-toggler main-header__search">
                            <i class="icon-search" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a> --}}
                        {{-- <a href="cart" class="main-header__cart">
                            <i class="icon-cart" aria-hidden="true"></i>
                            <span class="sr-only">Cart</span>
                        </a> --}}
                        <div class="main-header__call">
                            <div class="main-header__call__icon"><span class="icon-telephone"></span></div>
                            <div class="main-header__call__title">Call Emergency</div>
                            <a class="main-header__call__text" href="tel:9234377577">+91 9234377577</a>
                        </div>
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
