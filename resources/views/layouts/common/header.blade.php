<body class="custom-cursor">
    <style>
        .my-account {
            position: relative;
            margin-top: 8px;
        }

        .my-account__btn {
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .my-account__btn .arrow {
            font-size: 10px;
            margin-left: 4px;
        }

        .my-account__dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: #ffffff;
            min-width: 150px;
            list-style: none;
            padding: 5px 0;
            margin: 5px 0 0;
            border-radius: 4px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            display: none;
            z-index: 999;
        }

        .my-account__dropdown li a {
            display: block;
            padding: 8px 15px;
            color: #333;
            font-size: 14px;
            text-decoration: none;
        }

        .my-account__dropdown li a:hover {
            background: #f5f5f5;
        }

        /* Hover Dropdown */
        .my-account:hover .my-account__dropdown {
            display: block;
        }

        .modal-backdrop.show {
            opacity: 0 !important;
        }

        .modal-backdrop {
            display: none !important;
        }
    </style>

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <!-- <div class="topbar-one topbar-one--inner ">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"><i class="icon-mail"></i></span>
                            <a href="mailto:info@snbroadband.in" class="text-white">info@snbroadband.in</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"><i class="icon-maps-and-flags"></i></span>
                            {{-- At-Sapaha Near TTC Ground, Madhupur, Dist-Deoghar, Jharkhand, Pin-815353 --}}
                            MR KUNDAN KUMAR YADAV, S/O BISHNU YADAV, GRAM SAPAHA, GP-PATWABAD.PO PS MADHUPUR,
                            <br />SAPHA
                            DEOGHAR, DEOGHAR 815353, JHARKHAND INDIA
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="topbar-one__info__icon"> | </span>

                            <a href="{{ url('/clear-cache') }}">Clear Cache</a>
                        </li>
                    </ul>
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">

                            <a href="https://facebook.com">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://www.youtube.com/">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <header class="main-header main-header--inner sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ route('/') }}">
                            <img src="{{ asset('assets/images/logo_wifi.png') }}" alt="Ienet HTML" height="100">
                        </a>
                    </div><!-- /.main-header__logo -->
                    <a href="#" class="main-header__toggler"><span class="icon-menu"></span></a>
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">


                            <li class="{{ request()->routeIs('/') ? 'current' : '' }}">
                                <a href="{{ route('/') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('front.about-us') ? 'current' : '' }}">
                                <a href="{{ route('front.about-us') }}">About</a>
                            </li>
                            <li class="{{ request()->routeIs('front.gallery') ? 'current' : '' }}">
                                <a href="{{ route('front.gallery') }}">Gallery</a>
                            </li>

                            <li class="{{ request()->is('plans-pricing') ? 'current' : '' }}">
                                <a href="plans-pricing">Plans </a>
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
                            <li class="{{ request()->is('our-teams') ? 'current' : '' }}">
                                <a href="{{ route('front.our-teams') }}">Our Teams</a>

                            </li>
                            <li class="{{ request()->routeIs('service') ? 'current' : '' }}">
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
                            </li>
                            <li class="dropdown">
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

                            <li class="{{ request()->is('contact') ? 'current' : '' }}">
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
                        </a><!-- /.search-toggler -->
                        <a href="cart" class="main-header__cart">
                            <i class="icon-cart" aria-hidden="true"></i>
                            <span class="sr-only">Cart</span>
                        </a><!-- /.cart-toggler --> --}}
                        <div class="main-header__call">
                            <div class="main-header__call__icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <div class="main-header__call__title">Call Emergency</div>
                            <a class="main-header__call__text" href="tel:919234377577">
                                +91 9234377577
                            </a>

                            <!-- My Account Dropdown -->
                            <div class="my-account">
                                <a href="javascript:void(0)" class="my-account__btn text-dark">
                                    My Account <span class="arrow">&#9662;</span>
                                </a>

                                <ul class="my-account__dropdown">
                                    <li><a href="https://user.snbroadband.in/quickpay">Quick Recharge</a></li>
                                    <li>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#chatModal">
                                            Chat with Us
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- Chat Modal -->
                        <div class="modal fade" id="chatModal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Chat with SpeedNET</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form id="whatsappForm">
                                            <input type="text" id="name" class="form-control mb-2"
                                                placeholder="Your Name" required>
                                            <input type="tel" id="phone" class="form-control mb-2"
                                                placeholder="Phone Number" required>
                                            <textarea id="message" class="form-control mb-2" rows="3" placeholder="Your Message" required></textarea>

                                            <button type="submit" class="btn btn-success w-100">
                                                <i class="bi bi-whatsapp"></i> Start WhatsApp Chat
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
        </header><!-- /.main-header -->
        <script>
            document.querySelector('.my-account__btn').addEventListener('click', function() {
                document.querySelector('.my-account__dropdown').classList.toggle('show');
            });
        </script>
        <script>
            document.getElementById('whatsappForm').addEventListener('submit', function(e) {
                e.preventDefault();

                let name = document.getElementById('name').value;
                let phone = document.getElementById('phone').value;
                let message = document.getElementById('message').value;

                let adminNumber = "9234377577"; // without + sign

                let text = `Hello SpeedNET,%0A
Name: ${name}%0A
Phone: ${phone}%0A
Message: ${message}`;

                let whatsappUrl = `https://wa.me/${adminNumber}?text=${text}`;

                window.open(whatsappUrl, '_blank');
            });
        </script>


        <style>
            .my-account__dropdown.show {
                display: block;
            }
        </style>
