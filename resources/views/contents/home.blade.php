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
            <div class="row align-items-center overflow-hidden">
                <div class="col-12 col-sm-6">
                    <div class="hero-content" data-aos="zoom-in-right" data-aos-duration="1000">
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
                        {{-- <div class="hero-trusted-by">
                            <h5>TRUSTED BY</h5>
                            <img src="{{ asset('images/trusted-by.svg') }}" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-sm-5 ml-auto" data-aos="zoom-in-left" data-aos-duration="1000">
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
                <div class="col-md-8 mx-auto overflow-hidden">
                    <header class="section-header pt-50 text-center">
                        <h2 data-aos="fade-right" data-aos-duration="1000">Leadsopedia is a book of leads that you can use
                            to connect and search the right contact.</h2>
                        <p class="lead" data-aos="fade-left" data-aos-duration="1000">
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
            <div class="row overflow-hidden">
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card hover-zoom">
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
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card hover-zoom">
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
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card hover-zoom">
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
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card hover-zoom m-0">
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
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card hover-zoom">
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
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card m-0 hover-zoom">
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
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card hover-zoom">
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
                <div class="col-md-6 col-12" data-aos="fade-up" data-aos-duration="1000">
                    <div class="feature-card hover-zoom">
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
        </div> --}}

        {{--
        <hr class="my-5" />

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 text-center">
                    <img src="{{ asset('images/5-stars.png') }}" height="55" alt="" class="mb-3">
                    <h1 class="pb-1" style="line-height: 3rem;">
                        Rated <span class="underlined">5 out of 5 stars</span>
                        by our customers!
                    </h1>
                    <p class="lead px-5">
                        Companies and Individuals from across the globe have had fantastic
                        experiences using Leadsopedia. Here's what they have to say.
                    </p>
                </div>
            </div>
        </div>

        <div class="container px-5">
            <div class="card-group">
                <div class="card py-5 px-3 text-center m-2 shadow" style="border: none; border-radius: 12px;">
                    <img src="{{ asset('images/quote.svg') }}" alt="" class="img-fluid mb-4">
                    <p class="card-text">
                        It has fulfilled everything that it has advertised and so much more. Highly recommended for
                        people
                        who use email as a channel for acquisition.
                    </p>
                    <div class="px-5 mb-4">
                        <img src="{{ asset('images/demo/clients/client-1.jpg') }}" alt=""
                            class="rounded-circle shadow img-fluid">
                    </div>
                    <h5>Sarah Gosiengfield</h5>
                    <p class="m-0 p-0">Growth Marketer,</p>
                    <p class="m-0 p-0">Vapor</p>
                </div>
                <div class="card py-5 px-3 text-center m-2 shadow" style="border: none; border-radius: 12px;">
                    <img src="{{ asset('images/quote.svg') }}" alt="" class="img-fluid mb-4">
                    <p class="card-text">
                        A good alternative to Zoom Info without annual engagement. Leadsopedia is really easy to use and
                        is
                        really efficient. It was easy for me to find my target persona.
                    </p>
                    <div class="px-5 mb-4">
                        <img src="{{ asset('images/demo/clients/client-2.jpg') }}" alt=""
                            class="rounded-circle shadow img-fluid">
                    </div>
                    <h5>Carl Everson</h5>
                    <p class="m-0 p-0">Lead Generation,</p>
                    <p class="m-0 p-0">Silicon Inc</p>
                </div>
                <div class="card py-5 px-3 text-center m-2 shadow" style="border: none; border-radius: 12px;">
                    <img src="{{ asset('images/quote.svg') }}" alt="" class="img-fluid mb-4">
                    <p class="card-text">
                        Easy to use platform, Great Value for money. I can affordably prospect, many tools out there
                        that offer a similar service are very expensive.
                    </p>
                    <div class="px-5 mb-4">
                        <img src="{{ asset('images/demo/clients/client-3.jpg') }}" alt=""
                            class="rounded-circle shadow img-fluid">
                    </div>
                    <h5>Kate Wilkins</h5>
                    <p class="m-0 p-0">Head of Operations,</p>
                    <p class="m-0 p-0">Horizon Dusk</p>
                </div>
                <div class="card py-5 px-3 text-center m-2 shadow" style="border: none; border-radius: 12px;">
                    <img src="{{ asset('images/quote.svg') }}" alt="" class="img-fluid mb-4">
                    <p class="card-text">
                        Easy to use platform, Great Value for money. I can affordably prospect, many tools out there
                        that offer a similar service are very expensive.
                    </p>
                    <div class="px-5 mb-4">
                        <img src="{{ asset('images/demo/clients/client-2.jpg') }}" alt=""
                            class="rounded-circle shadow img-fluid">
                    </div>
                    <h5>Matthew Ford</h5>
                    <p class="m-0 p-0">Team Manager,</p>
                    <p class="m-0 p-0">Zendesk</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center py-5">
                    <a href="#" class="btn btn-lg btn-primary">
                        Sign Up
                    </a>
                    <a href="#" class="btn btn-lg btn-outline-primary">
                        More Reviews
                    </a>
                </div>
            </div>
        </div> --}}

        <hr class="my-4" />

        <div class="container py-5 mt-5 text-center overflow-hidden">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <h1 class="pb-1" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                        A Sales Intelligence Tool that <span class="underlined">Works for You</span>
                    </h1>
                    <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                        The best-performing teams don’t just work hard, they also work smart.
                        Regardless of whether you’re in marketing, sales or recruiting,
                        you can use Leadsopedia to optimize your workflows and generate a steady
                        stream of prospects, leads and candidates for your company.
                    </p>
                </div>
            </div>
        </div>

        <hr class="my-4" />

        <div class="container py-5 mt-5 overflow-hidden">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="pb-1" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                        Integrations
                    </h1>
                    <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                        Leadsopedia integrates with all the tools you love and use, to allow you to work smarter and faster.
                    </p>
                    <a href="#" class="btn btn-primary" data-aos="fade-right" data-aos-duration="1000">
                        Sign Up
                    </a>
                    <a href="#" class="btn btn-outline-primary" data-aos="fade-left" data-aos-duration="1000">
                        Browse Integrations
                    </a>
                </div>
                <div class="d-none d-md-block col-md-6 d-flex" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('images/companies/group.svg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <hr class="my-4" />

        <div class="container py-5 mb-5 overflow-hidden">
            <div class="card-group">
                <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up-right"
                    data-aos-duration="1000">
                    <div class="d-flex hover-zoom">
                        <img src="{{ asset('images/horn.svg') }}" alt="" class="img-fluid">
                    </div>
                    <h3 class="card-title mt-3 hover-zoom">For Marketing Professionals</h3>
                    <p class="card-text hover-zoom">
                        Generate high-quality leads, build your pipeline, and create ABM campaigns.
                    </p>
                    <div class="d-flex">

                        <a href="#" class="btn btn-link btn-link--secondary">
                            Learn More
                            <i class="icon ion-ios-arrow-forward"></i>
                        </a>
                    </div>
                </div>
                <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="d-flex hover-zoom">
                        <img src="{{ asset('images/graph.svg') }}" alt="" class="img-fluid">
                    </div>
                    <h3 class="card-title mt-3 hover-zoom">For Sales Professionals</h3>
                    <p class="card-text hover-zoom">
                        Know everything about a prospect before you make a single call.
                    </p>
                    <div class="d-flex">

                        <a href="#" class="btn btn-link btn-link--secondary">
                            Learn More
                            <i class="icon ion-ios-arrow-forward"></i>
                        </a>
                    </div>
                </div>
                <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up-left"
                    data-aos-duration="1000">
                    <div class="d-flex hover-zoom">
                        <img src="{{ asset('images/clipboard.svg') }}" alt="" class="img-fluid">
                    </div>
                    <h3 class="card-title mt-3 hover-zoom">For Recruiting Professionals</h3>
                    <p class="card-text hover-zoom">
                        Source for the best talent, and ensure you have a steady stream of candidates
                        flowing in.
                    </p>
                    <div class="d-flex">

                        <a href="#" class="btn btn-link btn-link--secondary d-inline">
                            Learn More
                            <i class="icon ion-ios-arrow-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4" />

        <div class="container-fluid py-5 my-5 overflow-hidden">
            <div class="row">
                <div class="d-none d-md-block col-md-6 text-center" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('images/graphics/email-marketing.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 d-flex">
                    <div class="align-self-center">
                        <h1 data-aos="fade-left" data-aos-duration="1000">Leadsopedia API</h1>
                        <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                            Need company & contact data to power your
                            business? Try the powerful Leadsopedia API.
                        </p>
                        <div class="d-flex" data-aos="fade-up" data-aos-duration="750">
                            <a href="#" class="btn btn-primary mx-1">
                                Browse API Docs
                            </a>
                            <a href="#" class="btn btn-outline-primary mx-1">
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

        <hr class="my-4" />

        <div style="background-color: #0C73F9;" class="my-5 py-3 shadow">
            <div class="container text-white overflow-hidden">
                <div class="row">
                    <div class="col-12 col-md-5 d-flex" data-aos="fade-right" data-aos-duration="1000">
                        <div class="align-self-center">

                            <h4 class="text-white">Get Started Today!</h4>
                            <p class="lead">
                                Want to experience the magic for yourself? Sign up to start generating leads for your
                                company!
                            </p>
                            <a href="#" class="btn btn-light">
                                Sign Up
                            </a>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-7 text-right" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('images/graphics/search-data-leads.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
