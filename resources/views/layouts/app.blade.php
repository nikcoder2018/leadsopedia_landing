<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ env('APP_NAME', 'Leadsopedia - Generates Leads for Local and Global Businesses') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ========================= ICONS ========================= -->
    <!--IONICONS-->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">

    <!-- ========================= THIRD PARTY PLUGINS ========================= -->
    <!-- MANIFIC POPUPS-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- OWL CAROUSEL-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!--SWIPER CAROUSEL-->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- ========================= MAIN STYLES ========================= -->
    <!-- MAIN STYLES-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- RESPONSIVE -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script defer>
        AOS.init();

    </script>

    @yield('css')
</head>

<body class="x-hidden has-sticky-header">

    <!--=========================PRELOADER========================= -->
    <div id="loading">
        <div class="ripple ripple1"></div>
        <div class="ripple ripple2"></div>
        <div class="ripple ripple3"></div>
        <div class="ripple ripple4"></div>
    </div>
    <!--END PRELOADER-->

    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

    <script src="{{ asset('js/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/vendors/swiper.min.js') }}"></script>
    <script src="{{ asset('js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('js')
</body>

</html>
