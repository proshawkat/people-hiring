<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>People Hire - Unlimited Graphic Design | Flat Monthly Fee | Dedicated Design Team</title>
    <meta name="description" content=""/>
    <link rel="canonical" href="https://www.peoplehiring.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />

    <meta property="og:title" content="People" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="https://peoplehiring.com/" />
    <meta property="og:site_name" content="People" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="___________" />


    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('front_assets/images/favicon.png') }}" type="image/x-icon" />

    <!--For Plugins css-->
    <link rel="stylesheet" href="{{ asset('front_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/sass/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/sass/style.scss') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/modal_css/modal_css.css') }}">
    
</head>

    <body>

        <!-- End Mobile Navbar -->
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <script src="{{ asset('front_assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front_assets/js/sina-nav.js') }}"></script>
        <script src="{{ asset('front_assets/js/scripet.js') }}"></script>
        <script src="{{ asset('front_assets/js/owl.carousel.min.js') }}"></script>

        @yield('js')
        <script type="text/javascript">
            $(".close").click(function(){
                $(".subscriber_modal_wrp").css("display", "none");;
            });

        </script>
    </body>
</html>