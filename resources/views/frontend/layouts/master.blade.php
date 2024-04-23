<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')- {{ $setting->sitename }}</title>
    {{-- <title>IAK</title> --}}
    <meta name="description" content="ISLAM AFTAB KAMRUL CO. Chartered Accountants">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logo.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">


    {{-- Fixed Right Sidebar --}}
    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
    @stack('styles')

</head>

<body>


    @include('frontend.partials.header')

    <main class="fix">

        @yield('content')

    </main>


    @include('frontend.partials.footer')

    <script src="https://kit.fontawesome.com/230a51e61c.js" crossorigin="anonymous"></script>
    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.parallaxScroll.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- slider carousel -->
    {{-- <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script> --}}
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    {{-- chatboot --}}
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "b7e3b965-67db-4c0b-8fc2-cf7175976df1";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    </script>

    @stack('scripts')


</body>

</html>
