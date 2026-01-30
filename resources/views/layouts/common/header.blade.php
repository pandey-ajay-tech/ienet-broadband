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
            top: 23px;
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

        @media (max-width: 767px) {

            .mobile-account-wrapper {
                position: fixed;
                right: 0;
                top: 40%;
                transform: translateY(-50%);
                z-index: 9999;
            }

            .mobile-account-btn {
                background-color: var(--ienet-base, #df2339);
                color: #fff;
                padding: 14px 14px;
                border-radius: 12px 0 0 12px;
                display: flex;
                align-items: center;
                gap: 8px;
                cursor: pointer;
                box-shadow: -6px 0 20px rgba(0, 0, 0, 0.25);

                /* hidden state */
                transform: translateX(55%);
                transition: transform 0.35s cubic-bezier(.4, 0, .2, 1);
            }

            /* Icon always visible */
            .mobile-account-btn .icon {
                font-size: 18px;
                flex-shrink: 0;
            }

            /* Text hidden initially */
            .mobile-account-btn .text {
                white-space: nowrap;
                opacity: 0;
                transform: translateX(10px);
                transition: opacity 0.3s ease, transform 0.3s ease;
                font-weight: 600;
                font-size: 13px;
            }

            /* Hover / active → slide out */
            .mobile-account-wrapper:hover .mobile-account-btn,
            .mobile-account-btn:active {
                transform: translateX(0);
            }

            /* When button is out → show text */
            .mobile-account-wrapper:hover .mobile-account-btn .text,
            .mobile-account-btn:active .text {
                opacity: 1;
                transform: translateX(0);
            }

            /* Dropdown below */
            .mobile-account-dropdown {
                position: absolute;
                right: 0;
                top: 100%;
                margin-top: 10px;
                background: #fff;
                min-width: 170px;
                border-radius: 10px;
                box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);

                opacity: 0;
                visibility: hidden;
                transform: translateY(-10px);
                transition: opacity 0.35s ease, transform 0.35s ease;
            }

            .mobile-account-dropdown.show {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .mobile-account-dropdown a {
                display: block;
                padding: 12px 14px;
                color: #333;
                text-decoration: none;
                border-bottom: 1px solid #eee;
            }

            .mobile-account-dropdown a:last-child {
                border-bottom: none;
            }

            .mobile-account-dropdown a:hover {
                background: #d8232a;
                color: #fff;
            }
        }
        @media (max-width: 767px) {

   
    /* Icon always white */
    .mobile-account-btn .icon {
        font-size: 18px;
        color: #fff;
    }

    /* Text hidden initially */
    .mobile-account-btn .text {
        white-space: nowrap;
        opacity: 0;
        transform: translateX(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
        font-weight: 600;
        font-size: 13px;
        color: #fff;
    }

    /* Hover / active → slide out + RED background */
    .mobile-account-wrapper:hover .mobile-account-btn,
    .mobile-account-btn:active {
        transform: translateX(0);
        background: #d8232a; /* RED on hover */
    }

    /* Show text when expanded */
    .mobile-account-wrapper:hover .mobile-account-btn .text,
    .mobile-account-btn:active .text {
        opacity: 1;
        transform: translateX(0);
    }
}

    </style>

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">


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
                            </li>
                            <li class="{{ request()->is('our-teams') ? 'current' : '' }}">
                                <a href="{{ route('front.our-teams') }}">Our Teams</a>

                            </li>
                            <li class="{{ request()->routeIs('service') ? 'current' : '' }}">
                                <a href="{{ route('service') }}">Services</a>

                            </li>
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
                        </div>
                        <div class="main-header__call">
                            <div class="main-header__call__icon">
                                <span class="icon-telephone"></span>
                            </div>
                            <div class="main-header__call__title">Call us</div>
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


        </header>
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