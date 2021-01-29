@extends('layouts.app')

@section('content')
    <div class="container pt-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="d-flex" data-aos="fade-down" data-aos-duration="1000">
                    <h5 class="badge-primary d-inline px-3 py-2 rounded">
                     B2B Email Lists
                    </h5>
                </div>
                <h1 class="mt-2 display-4" data-aos="fade-right" data-aos-duration="1000">
                    Target the right prospects and launch effective marketing strategies
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Our team optimizes the platform’s email database so prospectors can efficiently scan through millions of data.
                </p>
                <div class="d-flex pb-5 mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <a href="https://app.leadsopedia.com/register" class="btn btn-primary btn-lg mx-1">
                        Sign Up
                    </a>
                    <a href="{{ route('aboutus') }}" class="btn btn-outline-primary btn-lg mx-1">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 border-left" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/high-sales.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container py-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-4 p-2" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/target-small.svg') }}" alt="" class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">Contacts Lists</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2" data-aos="fade-up" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/quick-search-small.svg') }}" alt=""
                        class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">Advanced Search Filters</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/contacts-small.svg') }}" alt="" class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">Verified Data</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/contacts-small.svg') }}" alt="" class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">Wide Data Coverage</h6>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-6 border-right d-flex">
                <img src="{{ asset('images/graphics/data-enrichment.png') }}" alt="" class="img-fluid align-self-center"
                    data-aos="fade-right" data-aos-duration="1000">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/target.svg') }}" alt="" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">Guaranteed Accuracy</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    Save more time with accurate data
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    You don’t need to go through all of the data lists just to check if this data is accurate for your search. Simply tell us your requirements, and we’ll give you accurate downloadable data.
                </p>
                <div class="d-flex">
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/quick-search.svg') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Advanced Search Technology</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Experience our advanced search features
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    No matter how broad or specific your search is, we’ll give you the numbers in just a few seconds
                </p>
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 p-5 border-left">
                <img src="{{ asset('images/graphics/business-info.png') }}" alt="" class="img-fluid" data-aos="fade-left"
                    data-aos-duration="1000">
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-6 p-5 border-right text-center">
                <img src="{{ asset('images/graphics/business-consultants.png') }}" alt="" class="img-fluid"
                    data-aos="fade-right" data-aos-duration="1000">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/email-check.svg') }}" alt="" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">Verified B2B Lists</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    We provide valid emails for your next successful marketing campaign
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Whether you’re a business owner, human resource agent, or a marketing manager, we know that you need the right emails to reach your target
                </p>
                <div class="d-flex" data-aos="fade-left" data-aos-duration="1000">
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/bulk-email-large.svg') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Advanced Search Engine</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Easy export on bulk emails on our platform
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    We let you export Leadsopedia’s generated data on our platform, fast and easy!
                </p>
                <div class="d-flex">
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 p-5 border-left" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/image.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    {{--
    <hr class="my-5" />

    <div class="container text-center">
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
        </div>
    </div>

    <div class="d-flex my-5 py-5">
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
