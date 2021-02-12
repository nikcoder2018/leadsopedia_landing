<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME', 'Leadsopedia | Grow your business with the right connections') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{App\Setting::GetValue('meta_tag_description')}}">
    <meta name="keywords" content="{{App\Setting::GetValue('meta_tag_keywords')}}">
    <meta name="author" content="{{App\Setting::GetValue('meta_tag_author')}}">
    <meta name="robots" content="index, follow">

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

    <link rel="shortcut icon" href="{{ asset('images/logo-new-solo.png') }}" />
    <script src="https://kit.fontawesome.com/f99f1d9afb.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Themes can be changed at https://highlightjs.org/static/demo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/monokai-sublime.min.css">

    <style>
        .btn {
            border-radius: 2rem;
        }

        .gradient-white-to-blue {
            background: linear-gradient(to right, #8551ff, #2A5EE9);
            color: white;
        }

        .shadow-hover {
            transition: 0.3s linear;
        }

        .shadow-hover:hover {
            text-shadow: -3px 3px 10px rgb(211, 211, 211);
        }

        .font-weight-700 {
            font-weight: 600;
        } 

        .bg-blue-diagonal {
            background-image: url(/images/bgs/blue-diagonal.png);
            background-repeat: no-repeat;
        }    

        @media(min-width: 768px) {
            .bg-blue-diagonal {
                background-size: 100%;
                background-position: center;
            }
        }

        .custom-icon {
            height: 50px;
            width: 50px;
            background-color: #D4E0FF;
            color: #2A5EE9;
            border-radius: 1rem;
            font-size: 1.75rem;
        }
        
        #chat-bot-launcher-container.chat-bot-avatar-launcher, #chat-bot-launcher-container.chat-bot-launcher-notext {
            bottom: 95px !important;
        }
    </style>

    @yield('css')
</head>

<body class="x-hidden has-sticky-header">
    
    <!-- End Provely Conversions App Data Code -->
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

    <div id="chat-app-container" class="d-none"></div>
    <script src="{{ mix('js/apps/index.js') }}"></script>
    
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
    <script>(function(w, d) { w.CollectId = "6020ba3c8255d2479d733937"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    <!-- Provely Conversions App Data Code -->
    <script>(function(w,n) {
        if (typeof(w[n]) == 'undefined'){ob=n+'Obj';w[ob]=[];w[n]=function(){w[ob].push(arguments);};
        d=document.createElement('script');d.type = 'text/javascript';d.async=1;
        d.src='https://s3.amazonaws.com/provely-public/w/provely-2.0.js';x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(d,x);}
        })(window, 'provelys', '');
        provelys('config', 'baseUrl', 'app.provely.io');
        provelys('config', 'https', 1);
        provelys('data', 'campaignId', '26321');
        provelys('config', 'track', 1);
    </script>
    <!-- Provely Conversions App Display Code -->
<script>(function(w,n) {
    if (typeof(w[n]) == 'undefined'){ob=n+'Obj';w[ob]=[];w[n]=function(){w[ob].push(arguments);};
    d=document.createElement('script');d.type = 'text/javascript';d.async=1;
    d.src='https://s3.amazonaws.com/provely-public/w/provely-2.0.js';x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(d,x);}
    })(window, 'provelys', '');
    provelys('config', 'baseUrl', 'app.provely.io');
    provelys('config', 'https', 1);
    provelys('data', 'campaignId', '26321');
    provelys('config', 'widget', 1);
    </script>
    <!-- End Provely Conversions App Display Code -->
    @yield('js')
</body>

</html>
