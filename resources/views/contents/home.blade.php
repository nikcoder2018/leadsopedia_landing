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

    </style>
@endsection
@section('content')
    <!-- ========================= HERO SECTION ========================= -->
    <header id="hero" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="hero-content">
                        <div class="hero-title__group">
                            <div class="hero-title">
                                <h2>Creating Success with Effective Prospecting.</h2>
                            </div>
                            <div class="Hero--Subtitle">
                                <p class="lead">We are a leads generating website and B2B business leads for both Local and
                                    Global businesses
                                <p>
                            </div>
                        </div>
                        <div class="hero-cta-group">
                            <a href="{{ env('APP_FRONT_URL') . '/register' }}" class="btn btn-secondary">Get Started</a>
                        </div>
                        <div class="hero-trusted-by">
                            <h5>TRUSTED BY</h5>
                            <img src="{{ asset('images/trusted-by.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-5 ml-auto">
                    <div class="hero-figure">
                        <img src="{{ asset('images/graphics/roi-logo.jpg') }}" class=" img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ========================= APP SCREENS SLIDER ========================= -->
    <section id="overview">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <header class="section-header pt-50 text-center">
                        <h2>Leadsopedia is a book of leads that you can use to connect and search the right contact.</h2>
                        <p class="lead">
                            Our Leadsopedia Platform starts by creating a great strategy and effective lead generations
                            experience to give your ideal prospects.
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
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="feature-card">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__purple">
                            <i class="icon ion-ios-apps"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">Data Enrichment</h4>
                            <p>
                                Your Success is our Achievements, the better leads that you can use is here. Leadsopedia
                                enriches your contact data to make it easy for every sales team to communicate and build
                                connection.
                            </p>

                            <a href="#" class="btn btn-link btn-link--secondary">
                                Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="feature-card">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__purple">
                            <i class="icon ion-ios-apps"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">Realtime Verified Data</h4>
                            <p>
                                Our Platform makes sure give you realtime verified data, with built-in verification process
                                and that anytime you download your leads it will verify the email address in realtime.
                            </p>
                            <a href="#" class="btn btn-link btn-link--secondary">
                                Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="feature-card">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__primary">
                            <i class="icon ion-ios-keypad"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">B2B Prospector</h4>
                            <p>
                                Leadsopedia give a best quality access to over 44 millions business contacts worldwide, into
                                local to global businesses, from search by 45+ criterias (including job titles, industries
                                and locations) from our high quality leads.
                            </p>
                            <a href="#" class="btn btn-link btn-link--secondary">Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="feature-card m-0">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__cyan">
                            <i class="icon ion-ios-bug"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">Email Verifications</h4>
                            <p>
                                Our leads generations campaign will increase your prospect, just our leadsopedia email
                                finder functions allow you to reach high level contact and grow your network.
                            </p>

                            <a href="#" class="btn btn-link btn-link--secondary">
                                Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="feature-card">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__primary">
                            <i class="icon ion-ios-keypad"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">B2B Sales Funnel</h4>
                            <p>
                                Knowing and Research about prospect before making a call.
                            </p>
                            <a href="#" class="btn btn-link btn-link--secondary">Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="feature-card m-0">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__cyan">
                            <i class="icon ion-ios-bug"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">B2B Marketing funnel</h4>
                            <p>
                                Creating and Generating best quality leads, Build your Business Pipeline and Create
                                Successful Campaigns.
                            </p>

                            <a href="#" class="btn btn-link btn-link--secondary">
                                Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="feature-card">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__primary">
                            <i class="icon ion-ios-keypad"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">Email Finder</h4>
                            <p>
                                Leadsopedia verifies tens of thousand emails that driving more value data to your business,
                                using our email finder tools it will give you access to connect with exact people you are
                                looking for.
                            </p>
                            <a href="#" class="btn btn-link btn-link--secondary">
                                Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="feature-card">
                        <div class="u-icon u-icon__circle u-icon__lg bg-dimped__purple">
                            <i class="icon ion-ios-apps"></i>
                        </div>
                        <div class="feature-card__body">
                            <h4 class="feature-title">Conscripting Funnel</h4>
                            <p>
                                Building your process is increasing your Success and Credibility that helps your Growth.
                                We help in making your experience better.
                            </p>

                            <a href="#" class="btn btn-link btn-link--secondary">Learn more
                                <i class="icon ion-ios-arrow-forward"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div style="background-color: #0C73F9;" class="my-5 py-5 shadow">
            <div class="container text-white">
                <h1 class="text-white">
                    Mission
                </h1>
                <hr class="my-4 bg-white" />

                <p style="text-indent: 1rem;" class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste distinctio molestias vero quo, dolorem
                    nostrum similique repellat voluptas unde eius quos qui ducimus doloribus eveniet autem voluptate
                    architecto provident eligendi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste distinctio molestias vero quo, dolorem
                    nostrum similique repellat voluptas unde eius quos qui ducimus doloribus eveniet autem voluptate
                    architecto provident eligendi.
                </p>
            </div>
        </div>

        <div class="container py-5 my-5">
            <h1>
                Vision
            </h1>
            <hr class="my-4" />
            <p style="text-indent: 1rem;" class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum consequatur ad adipisci ullam, consequuntur
                libero tenetur ut ducimus cumque perferendis cum rem eos natus obcaecati a expedita aut pariatur maiores!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum consequatur ad adipisci ullam, consequuntur
                libero tenetur ut ducimus cumque perferendis cum rem eos natus obcaecati a expedita aut pariatur maiores!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum consequatur ad adipisci ullam, consequuntur
                libero tenetur ut ducimus cumque perferendis cum rem eos natus obcaecati a expedita aut pariatur maiores!
            </p>
        </div>

        <hr class="mb-5" /> --}}

        <div class="container py-5 text-center my-5">
            <h1>Want to know more?</h1>
            <p class="lead">Send us a message and we will take care of things for you.</p>
            <a href="#" class="btn btn-sm btn-primary">
                Sign Up Now
            </a>
        </div>
    </section>
@endsection
