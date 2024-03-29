<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ App\SEO::GetValue(Request::path(),'title') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{App\SEO::GetValue(Request::path(),'description')}}">
    <meta name="keywords" content="{{App\SEO::GetValue(Request::path(),'keywords')}}">
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
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End TrustBox script -->
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

    <script>
        $(function(){
            'use strict';

            $('.emailsubscribe-form').on('submit', function(e){
                e.preventDefault();
                $('.emailsubscribe-form').find('button[type=submit]').prop('disabled', true);
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(resp){
                        if(resp.success){
                            $('.emailsubscribe-form').find('button[type=submit]').prop('disabled', false);
                            $('.emailsubscribe-form').find('.message-container').html(`
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <div class="alert-body">
                                        ${resp.msg}
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            `);

                            setTimeout(function(){
                                location.reload()
                            }, 3000);
                        }
                    }
                })
            });
        });
    </script>
</body>

</html>
