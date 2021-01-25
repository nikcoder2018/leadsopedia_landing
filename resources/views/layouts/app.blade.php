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

    <link rel="shortcut icon" href="{{ asset('images/logo-new-solo.svg') }}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Themes can be changed at https://highlightjs.org/static/demo -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/monokai-sublime.min.css">

    @yield('css')
</head>

<body class="x-hidden has-sticky-header">

    <!--=========================PRELOADER========================= -->
    <div id="loading">
        <div style="height: 100vh; width: 100%;" class="d-flex flex-column align-items-center justify-content-center">
            <img src="{{ asset('images/logo-new-full.svg') }}" alt="" style="max-height: 60px;">
        </div>
    </div>
    {{-- <div id="loading">
        <div class="ripple ripple1"></div>
        <div class="ripple ripple2"></div>
        <div class="ripple ripple3"></div>
        <div class="ripple ripple4"></div>
    </div> --}}
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();

    </script>
    <script defer>
        $(document).ready(() => {
            AOS.init();
        });

    </script>
    @yield('js')
</body>

</html>
