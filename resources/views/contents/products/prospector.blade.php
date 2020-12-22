@extends('layouts.app')

@section('content')
    <div class="container text-center py-5 overflow-hidden">
        <div class="d-flex" data-aos="fade-down" data-aos-duration="1000">
            <h4 class="px-3 py-2 badge-primary d-inline rounded mx-auto">Prospector</h4>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 pt-4">
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Search +20 million contacts with 95% data accuracy
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Other tools average 50% accuracy. Leadsopedia guarantees 95% precision, or you get your credits back.
                </p>
                <div class="d-flex" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#" class="btn btn-primary btn-lg mr-1 ml-auto">
                        Sign Up
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-lg ml-1 mr-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <hr class="my-5" />

        <div class="row">
            <div class="col-12 col-md-3 p-3" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/contracts-and-companies.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Contracts & Companies</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-3" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/filter-small.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">+50 Search Filters</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-3" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/clock-small.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Realtime Verification</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-3" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/world-small.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Worldwide Coverage</h6>
                </div>
            </div>
        </div>

        <hr class="my-5" />

        <div class="row">
            <div class="d-none d-md-block col-sm-6 p-3 border-right" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/roi-logo.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 text-left p-4">
                <img src="{{ asset('images/target.svg') }}" alt="" data-aos="fade-left" data-aos-duration="1000">
                <h5 class="text-secondary mt-2" data-aos="fade-left" data-aos-duration="1000">Accuracy Guarantee</h5>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">Fewer bounces, higher open rate
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Prospect with the highest accuracy for B2B contacts. If we don’t find the right email for your leads, we
                    don’t charge you.
                </p>
                <ul data-aos="fade-left" data-aos-duration="1000">
                    <li>20M+ Contacts</li>
                    <li>Coverage in 200+ Countries</li>
                    <li>95% Accuracy Guarantee</li>
                </ul>
            </div>
        </div>

        <hr class="my-5" />

        <div class="row">
            <div class="col-12 col-sm-6 text-left p-4">
                <img src="{{ asset('images/profile.svg') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                <h5 class="text-secondary mt-2" data-aos="fade-right" data-aos-duration="1000">Realtime Prospecting</h5>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    List building as easy as clicking
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Click on any search filter and see your list of prospects update in front of your eyes. No waiting
                    around, no processing — build your lists in real-time.
                </p>
                <ul data-aos="fade-right" data-aos-duration="1000">
                    <li>Leads shown in real-time</li>
                    <li>Easy to use</li>
                </ul>
            </div>
            <div class="d-none d-md-block col-sm-6 p-3 border-left" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/ai-support.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>

        <hr class="my-5" />

        <div class="row">
            <div class="d-none d-md-block col-sm-6 p-3 border-right" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/team-sales.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 text-left p-4">
                <img src="{{ asset('images/quick-search.svg') }}" alt="" data-aos="fade-left" data-aos-duration="1000">
                <h5 class="text-secondary mt-2" data-aos="fade-left" data-aos-duration="1000">Advanced Search</h5>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    Target the right prospects
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Laser focus on your ideal buyer using location, industry, revenue, size and many other filters. Give
                    your sales and marketing teams the right data to boost sales.
                </p>
                <ul data-aos="fade-left" data-aos-duration="1000">
                    <li>50+ search criteria</li>
                    <li>Data for contacts and companies</li>
                </ul>
            </div>
        </div>

        {{--
        <hr class="my-5" />

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1 style="line-height: 3rem;">
                    <span class="underlined">Sales-oriented</span>
                    companies grow with our data
                </h1>
                <p class="lead">
                    Leadsopedia is the preferred lead generation tool for companies selling across the globe.
                </p>
            </div>
        </div> --}}
    </div>

    {{-- <div class="d-flex my-5 py-5">
        <img src="{{ asset('images/companies.svg') }}" alt="" class="mx-auto">
    </div> --}}

    <div class="blue">
        <div class="container text-center py-5 my-5 overflow-hidden">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <h1 class="text-white" data-aos="fade-right" data-aos-duration="1000">Try it today</h1>
                    <p class="lead text-white" data-aos="fade-left" data-aos-duration="1000">
                        Sign up now and put our 95% data accuracy guarantee to the test. No mandatory demos or yearly
                        contracts.
                    </p>
                    <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                        <ul class="text-left mx-auto align-self-center">
                            <li class="text-white">No mandatory demos</li>
                            <li class="text-white">No annual contract</li>
                        </ul>
                    </div>
                    <a href="#" class="mt-2 btn btn-light btn-lg" data-aos="fade-up" data-aos-duration="1000">
                        Sign Up Now
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection