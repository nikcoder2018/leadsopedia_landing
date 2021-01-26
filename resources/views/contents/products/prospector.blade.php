@extends('layouts.app')

@section('content')
    <div class="container text-center py-5 overflow-hidden">
        <div class="d-flex" data-aos="fade-down" data-aos-duration="1000">
            <h4 class="px-3 py-2 badge-primary d-inline rounded mx-auto">Prospector</h4>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 pt-4">
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Get access to over +20 million contacts with 95% data accuracy
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Sign up now and find the right prospects today!
                </p>
                <div class="d-flex" data-aos="fade-up" data-aos-duration="1000">
                    <a href="https://app.leadsopedia.com/register" class="btn btn-primary btn-lg mr-1 ml-auto">
                        Sign Up
                    </a>
                    <a href="{{ route('aboutus') }}" class="btn btn-outline-primary btn-lg ml-1 mr-auto">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <hr class="my-5" />

        <div class="row">
            <div class="col-12 col-md-3 py-3 px-2" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/contracts-and-companies.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Contracts & Companies</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3 px-2" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/filter-small.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Advanced Search Filters</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3 px-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/clock-small.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Realtime Verification</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 py-3 px-2" data-aos="fade-left" data-aos-duration="1000">
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
                <h5 class="text-secondary mt-2" data-aos="fade-left" data-aos-duration="1000">95% Data Accuracy</h5>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">Create opportunities, Build partnerships</h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Our intelligent search engine and filtering process helps prospectors find the right match.
                </p>
                <ul data-aos="fade-left" data-aos-duration="1000">
                    <li>Over 20 Million Contacts</li>
                    <li>Data in 200+ Countries</li>
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
                    Quality data with just one click
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    We want our Clients to seal the next big deal. That’s why in Leadsopedia, we update our data real-time using website traffic.
                </p>
                <ul data-aos="fade-right" data-aos-duration="1000">
                    <li>Real-time leads</li>
                    <li>Easy platform navigation</li>
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
                    We narrow down our lists based on your selected filters. We make sure the leads we give you are already interested in your business!
                </p>
                <ul data-aos="fade-left" data-aos-duration="1000">
                    <li>Advanced search criteria</li>
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

    
    <div class="blue overflow-hidden">
        <div class="container text-center py-5 my-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                        Experience the world-class service from Leadsopedia!
                    </h1>
                    <p class="lead text-white" data-aos="fade-right" data-aos-duration="1000">
                        Wherever you are in the world and whatever industry you’re in, opportunities are endless with
                        Leadsopedia!
                    </p>
                    <a href="https://app.leadsopedia.com/register" class="mt-2 btn btn-light btn-lg" data-aos="fade-right" data-aos-duration="1000">
                        Sign Up Now
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
