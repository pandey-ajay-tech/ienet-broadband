<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>@yield('title', 'Home  | SpeedNET Broadband ')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Ienet is a multipurpose & unique HTML5 template. We especially designed for broadband internet services, satellite TV, Broadband, Online TV, Cable Television, Online Cinema and Movies, Voip, Wifi, Internet and TV store, Digital TV, Computer Networks, IPTV, Telecom company, CCTV and alternative Security, Networking Solution technology and all other internet businesses and websites." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com')}}" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-select/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/tiny-slider/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/ienet-icons/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/ienet.css')}}" />
</head>

<body>

    @include('layouts.header')
    {{-- Page Content --}}
        @yield('content')
    {{-- Footer --}}
    @include('layouts.footer')

</body>

</html>