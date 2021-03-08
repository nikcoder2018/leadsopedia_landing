@extends('layouts.app')

@section('css')
    <style>
        .hero-trusted-by {
            margin-top: 5em;
        }

        .hero-trusted-by h5 {
            font-weight: 400;
            color: #a1a1a1;
        }

        .card-footer {
            border: none;
            background-color: #fff;
        }

        .feature-card {
            height: 100%;
        }

        .feature-card__body {
            position: relative;
        }

        .learn-more-link {
            position: absolute;
            bottom: 0.25rem;
            left: 0;
        }

        .feature-paragraph {
            justify-content: center;
            text-align: justify;
        }

        .show-more {
            font-size: .85rem;
        }

        .show-more:before {
            content: '...';
            color: #73808F;
        }

        .show-more:hover {
            text-decoration: none;
        }

        .text-shadow-white {
            text-shadow: -3px 3px 10px rgb(211, 211, 211);
        }

    </style>
@endsection
@section('content')
    <!-- ========================= HERO SECTION ========================= -->
    <script data-ad-client="ca-pub-4340569493304226" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XL95ZV54FR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XL95ZV54FR');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-189785222-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-189785222-1');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '190241726193585');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=190241726193585&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



    <header id="hero" class="hero bg-blue-diagonal">
        <div class="container">
            <div class="row align-items-center overflow-hidden">
                <div class="col-12 col-sm-6">
                    <div class="hero-content" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="hero-title__group">
                            <div class="hero-title shadow-hover shadow-white-interval">
                                <h1 class="text-white" style="line-height: 3rem;">Grow your business with the right connections.</h1>
                            </div>
                            <div class="Hero--Subtitle">
                                <p class="lead text-white">
                                    Leadsopedia helps you find marketing deals, sales funnels, and prospects fit for all
                                    industries.
                                <p>
                            </div>
                            <b>
                                <i class="text-white">
                                    Your journey to success begins here.
                                </i>
                            </b>
                        </div>
                        <div class="hero-cta-group">
                            <a href="{{ route('pricing') }}" class="btn btn-light">Get Started</a>
                        </div>
                        {{-- <div class="hero-trusted-by">
                            <h5>TRUSTED BY</h5>
                            <img src="{{ asset('images/trusted-by.svg') }}" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-sm-6 d-none d-md-block" data-aos="zoom-in-left" data-aos-duration="1000">
                    <img src="{{ asset('images/graphics/intro.png') }}" class=" img-fluid w-100" alt="Leadsopedia - Leads generating business">
                </div>
            </div>
        </div>
    </header>

    <!-- ========================= APP SCREENS SLIDER ========================= -->
    <section id="overview">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 overflow-hidden">
                    <header class="section-header pt-50 text-center">
                        <h2 data-aos="fade-right" data-aos-duration="1000">
                            Leadsopedia is the number one leads generation platform to increase your sales, to collaborate
                            with the right people, and to create opportunities.
                        </h2>
                        <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                            Let our team provide you with the right tools to initiate proven trending marketing methods and
                            create a steady demand for your high-quality services.
                        </p>
                        {{-- <a href="https://www.youtube.com/watch?v=_zjQ0_v8JtY"
                            class="btn btn-has-icon icon-on__left text-uppercase btn-link--secondary js-video-modal-trigger">
                            <span class="u-icon u-icon__sm u-icon__circle u-icon__outline">
                                <i class="icon ion-ios-play"></i>
                            </span>
                            Watch our video
                        </a> --}}
                    </header>
                </div>
            </div>
        </div>
        <div class="container">
            {{--
            <div class="section-screens__inner">
                <div class="swiper-container screen-slider">
                    <div class="screen-slider-wrapper swiper-wrapper ">
                        <div class="screen-slider__item swiper-slide">
                            <img src="images/demo/screens/2.png" alt="Image">
                        </div>
                        <div class="screen-slider__item swiper-slide">
                            <img src="images/demo/screens/1.jpg" alt="Image">
                        </div>
                        <div class="screen-slider__item swiper-slide">
                            <img src="images/demo/screens/3.jpg" alt="Image">
                        </div>
                        <div class="screen-slider__item swiper-slide">
                            <img src="images/demo/screens/4.jpg" alt="Image">
                        </div>
                    </div>
                    <!-- If we need navigation buttons or just delete them-->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            --}}

            <div class="my-5"></div>
            
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 text-center">
                        <h1 class="pb-2" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                            Our Services
                        </h1>
                        {{-- <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                            We always make sure to provide you with bleeding-edge technology
                            so that you can make the most out of our service!
                        </p> --}}
                    </div>
                </div>
            </div>

            <div class="card-group">
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-apps"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">Refined Data</h4>
                        <p class="card-text text-center">
                            Our Clients’ success is also our success. This is why we make sure that resources are
                            optimized and we provide<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    Our Clients’ success is also our success. This is why we make sure that resources are
                                    optimized and we provide quality data to increase conversion rates. We filter out the noise
                                    to give Clients an edge over their competitors.
                                </span>
                                <span class="d-none">
                                    Our in-house specialists are equipped with digital marketing skills to help you build the
                                    perfect sales strategy and cultivate the right advertising process. Our Clients increase
                                    their ROI by building the right data and the right connections.
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-construct"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">Validated Data</h4>
                        <p class="card-text text-center">
                            We go beyond the ordinary and actively regulate and update our listings so you get new leads
                            every day. Our<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    We go beyond the ordinary and actively regulate and update our listings so you get new leads
                                    every day. Our top-notch database management efforts are designed to ensure successful
                                    connections every time. We curate the right resources for you so you are always one step
                                    ahead
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-analytics"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">B2B Data Lists</h4>
                        <p class="card-text text-center">
                            Leadsopedia generates millions of prospects in both local and global industries. With our
                            enhanced<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    Leadsopedia generates millions of prospects in both local and global industries. With our
                                    enhanced and calibrated platform, endless possibilities are at the tip of your fingertips.
                                    We guarantee that your business will stand out from the rest.
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-document"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">Verified Email Lists</h4>
                        <p class="card-text text-center">
                            We are confident that the data we give you are 100% verified and are tailor-fit to your
                            needs. We make sure<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    We are confident that the data we give you are 100% verified and are tailor-fit to your
                                    needs. We make sure that the data sets you receive from us are real and updated every day.
                                    There’s no need to collect e-mail addresses elsewhere because you’ve got everything that
                                    you’ll need here in Leadsopedia.
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-funnel"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">B2B Sales</h4>
                        <p class="card-text text-center">
                            Effective digital engagement is our top priority. We structure the lead data for you so you
                            can quickly decide with conviction. We believe<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    Effective digital engagement is our top priority. We structure the lead data for you so you
                                    can quickly decide with conviction. We believe that with less effort, you can create better
                                    results through our platform. Our tried and tested leads generation services can leverage
                                    your company’s sales and marketing without sacrificing quality and efficiency.
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-download"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">B2B Marketing</h4>
                        <p class="card-text text-center">
                            Leadsopedia is the right avenue for the right business deals, successful partnerships, and
                            impactful sales funnel. We match<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    Leadsopedia is the right avenue for the right business deals, successful partnerships, and
                                    impactful sales funnel. We match multiple industries to collaborate and create the future
                                    together. We believe that successful marketing campaigns are crucial for a new business. Let
                                    Leadsopedia turn your dream into a reality.
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-mail"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">Email Locator</h4>
                        <p class="card-text text-center">
                            Save precious time and discover our platform’s untapped potential. The emails we provide you
                            are verified across both<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    Save precious time and discover our platform’s untapped potential. The emails we provide you
                                    are verified across both local and global industries. Connect to experts, build the perfect
                                    team, and expand your business exponentially. You are guaranteed to convert leads to
                                    customers with us.
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card hover-zoom border-0 shadow p-2 m-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="u-icon u-icon__circle u-icon__lg theme-icon-color mx-auto">
                                <i class="icon ion-ios-flash"></i>
                            </div>
                        </div>
                        <h4 class="card-title text-center">Advance Search Filters</h4>
                        <p class="card-text text-center">
                            Our system thoroughly sifts through billions of data to meet your needs. Our world-class
                            service gives your business an edge<a href="" class="d-inline show-more">
                                Show More >>
                                <span class="d-none">
                                    Our system thoroughly sifts through billions of data to meet your needs. Our world-class
                                    service gives your business an edge over whatever industry you’re in. Leadsopedia makes sure
                                    that your business will stand out among the rest.
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-4"></div>

        <div class="container py-5 mt-5 text-center overflow-hidden">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <h1 class="pb-1" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                        In <span class="underlined">Leadsopedia</span>, you get the <span class="underlined">world-class
                            tools</span> and <span class="underlined">service</span> fit for a
                        successful sales campaign.
                    </h1>
                    <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                        Connect and build an empire with the right people. With just one click, you are given access to our
                        whole library. Access our site and get leads 24/7. With Leadsopedia’s dedicated customer support
                        group, you’ll never be lost and you’ll be surely on your way to delivering that perfect sales pitch.
                    </p>
                </div>
            </div>
        </div>

        <div class="my-4"></div>

        <div class="container-fluid py-5 mt-4 overflow-hidden">
            <div class="row">
                <div class="col-12 col-md-6 bg-primary p-5">
                    <h1 class="pb-1 text-white" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                        Integrations
                    </h1>
                    <p class="lead text-white" data-aos="fade-right" data-aos-duration="1000">
                        Work efficiently when you integrate Leadsopedia with your applications
                    </p>
                    <div class="d-flex mt-1">
                        <a href="https://app.leadsopedia.com/login" class="btn btn-light mx-1" data-aos="fade-right" data-aos-duration="1000">
                            Sign Up
                        </a>
                        <a href="https://app.leadsopedia.com/integrations" class="btn btn-primary mx-1" data-aos="fade-left" data-aos-duration="1000">
                            Browse Integrations
                        </a>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 p-5 d-flex text-center border">
                    <img src="{{ asset('images/companies/group.svg') }}" alt="Integrations" width="80%" class="img-fluid" data-aos="fade-left" data-aos-duration="1000">
                </div>
            </div>
        </div>

        <div class="my-4"></div>

        <div class="container py-5 mb-5 overflow-hidden">
            <div class="card-group">
                <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up-right"
                    data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex hover-zoom">
                            <div class="align-self-center custom-icon d-flex" style="height: 80px; width: 80px;">
                                <i class="fas fa-bullhorn align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <h3 class="card-title mt-3 hover-zoom">Marketing</h3>
                        <p class="card-text hover-zoom feature-paragraph">
                            Generating quality leads is important for successful marketing campaigns. Leadsopedia gives you
                            an
                            avenue to pull-off the perfect sales pitch to the right customers.
                        </p>
                        <p class="card-text hover-zoom feature-paragraph">
                            Our dedicated team filters out the noise so you can focus on more important things. We know the
                            struggle of getting quality leads so we devised a strategy for marketers to reach the right
                            customers.
                        </p>
                    </div>
                    {{-- <div class="card-footer">
                        <div class="d-flex">
                        </div>
                    </div> --}}
                </div>                    
                <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex hover-zoom">
                            <div class="align-self-center custom-icon d-flex" style="height: 80px; width: 80px;">
                                <i class="fas fa-signal align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <h3 class="card-title mt-3 hover-zoom">Sales</h3>
                        <p class="card-text hover-zoom feature-paragraph">
                            You don’t have to cold-call through every single phone number and get rejected every time. We
                            give
                            you the confidence that Leadsopedia’s system will help you save money, time, and effort.
                        </p>
                        <p class="card-text hover-zoom feature-paragraph">
                            Our analytics engine generates contactable customer data and our intelligent database management
                            are
                            designed to decrease your efforts while increasing your ROI.
                        </p>
                    </div>
                    {{-- <div class="card-footer">
                        <div class="d-flex">
                        </div>
                    </div> --}}
                </div>
                <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up-left"
                    data-aos-duration="1000">
                    <div class="card-body">
                        <div class="d-flex hover-zoom">
                            <div class="align-self-center custom-icon d-flex" style="height: 80px; width: 80px;">
                                <i class="fas fa-clipboard align-self-center mx-auto"></i>
                            </div>
                        </div>
                        <h3 class="card-title mt-3 hover-zoom">Recruiting</h3>
                        <p class="card-text hover-zoom feature-paragraph">
                            Our reliable and accurate data sets will lead you to build the right team.
                        </p>
                        <p class="card-text hover-zoom feature-paragraph">
                            We’ve collected and verified data from across industries, all around the world so you can
                            remotely
                            contact the right person for the job. Just enter the right filters or parameters on our
                            platform,
                            and you’ll get automated results.
                        </p>
                    </div>
                    {{-- <div class="card-footer">
                        <div class="d-flex">
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="container py-5 mt-5 text-center overflow-hidden">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                <img src="{{ asset('images/graphics/featured.jpg') }}" alt="featured media" width="100%" class="img-fluid" data-aos="fade-left" data-aos-duration="1000">
                </div>
            </div>
        </div>

        <div class="container-fluid py-5 my-5 overflow-hidden">
            <div class="row">
                <div class="d-none d-md-block col-md-6 text-center" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('images/graphics/email-marketing.jpg') }}" alt="Leadsopedia API" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="align-self-center">
                        <h1 data-aos="fade-left" data-aos-duration="1000">Leadsopedia API</h1>
                        <p class="lead text-justify" data-aos="fade-left" data-aos-duration="1000">
                            Build your roadmap to success with our
                            team of professionals, dedicated to giving you a world-class service with just one click.
                        </p>
                        <p class="lead text-justify" data-aos="fade-left" data-aos-duration="1000">
                            We do regular monitoring, assessment, and filtering of data quality so you get quality leads
                            every time you use our platform. Our intelligent API helps you identify the services you’ll need
                            so you can maximize our platform.
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-duration="750">
                            <a href="{{ route('api') }}" class="btn btn-primary mx-1">
                                Browse API Docs
                            </a>
                            <a href="{{route('aboutus')}}" class="btn btn-outline-primary mx-1">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--
        <hr class="my-4" />

        <div class="container-fluid text-center py-5 my-5">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h1>You'll be in Good Company</h1>
                    <p class="lead py-2">
                        Leadsopedia is the preferred B2B-tool for reputable companies from across the globe.
                    </p>
                </div>
            </div>
            <img src="{{ asset('images/companies.svg') }}" alt="">
        </div> --}}

        <div class="my-4"></div>

        <div style="background-color: #0C73F9;" class="my-5 pt-3 shadow">
            <div class="container text-white overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-5 d-flex" data-aos="fade-right" data-aos-duration="1000">
                        <div class="align-self-center">

                            <h4 class="text-white">Increase your ROI today!</h4>
                            <p class="lead">
                                Don’t miss this chance to get exclusive deals and discounts when you sign up now!
                            </p>
                            <a href="https://app.leadsopedia.com/register" class="btn btn-light mb-3">
                                Sign Up
                            </a>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-7 text-right" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('images/graphics/search-data-leads.png') }}" alt="Increase ROI" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script defer>
        $(document).ready(() => {
            $('.show-more').on('click', function(e) {
                e.preventDefault();
                const contents = [];
                $(this).children('span').each(function() {
                    contents.push(`<p>${$(this).text()}</p>`);
                });
                $(this).parent().html(contents.join(''));
            });

            setTimeout(() => {
                $('.shadow-white-interval').addClass('text-shadow-white');
                setTimeout(() => {
                    $('.shadow-white-interval').removeClass('text-shadow-white');
                }, 2000);
            }, 1500);
        })
    </script>
@endsection
