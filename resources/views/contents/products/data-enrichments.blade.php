@extends('layouts.app')

@section('content')
    <div class="container pt-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <h5 class="gradient-white-to-blue d-inline px-3 py-2 rounded">
                        Data Enrichment
                    </h5>
                </div>
                <h1 class="mt-2 display-4" data-aos="fade-right" data-aos-duration="1000">
                Use Our Data to Grow Your Business!
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Access our data lists to local and global opportunities when you sign up in Leadsopedia.
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
                <img src="{{ asset('images/graphics/designing.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container py-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-3 p-2" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <div class="align-self-center custom-icon d-flex">
                        <i class="fas fa-address-book align-self-center mx-auto"></i>
                    </div>
                    <h6 class="align-self-center ml-2">Contact Lists</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-2" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <div class="align-self-center custom-icon d-flex">
                        <i class="fas fa-briefcase align-self-center mx-auto"></i>
                    </div>
                    <h6 class="align-self-center ml-2">Advanced Search Filters</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <div class="align-self-center custom-icon d-flex">
                        <i class="fas fa-mail-bulk align-self-center mx-auto"></i>
                    </div>
                    <h6 class="align-self-center ml-2">Verified Data</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <div class="align-self-center custom-icon d-flex">
                        <i class="fas fa-id-card-alt align-self-center mx-auto"></i>
                    </div>
                    <h6 class="align-self-center ml-2">Wide Data Coverage</h6>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="d-none d-md-block col-md-6 border-right" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/innovation.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-5">
                <div class="align-self-center custom-icon d-flex" data-aos="fade-left" data-aos-duration="1000">
                    <i class="fas fa-address-book align-self-center mx-auto"></i>
                </div>
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">Contacts Lists</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    Get updated contacts list of your future customers
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    In Leadsopedia, our contacts list gets updated everyday so prospectors can reach out to new customers.
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
                <div class="align-self-center custom-icon d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <i class="fas fa-briefcase align-self-center mx-auto"></i>
                </div>
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Companies Lists</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Seal more deals for your companies
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Find the right prospects for your business through our extended data list.
                </p>
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 p-5 border-left" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/searching.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="d-none d-md-block col-md-6 p-5 border-right text-center" data-aos="fade-right"
                data-aos-duration="1000">
                <img src="{{ asset('images/graphics/building.png') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-6 p-5">
                 <div class="align-self-center custom-icon d-flex" data-aos="fade-left" data-aos-duration="1000">
                    <i class="fas fa-mail-bulk align-self-center mx-auto"></i>
                </div>
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">Email Lists</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    Updated and quality email lists
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Reach the right customers through our platform.
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
                <div class="align-self-center custom-icon d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <i class="fas fa-id-card-alt align-self-center mx-auto"></i>
                </div>
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Verified Data</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                Valid data downloads
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                For the lowest subscription plans, you get to download contact lists from our wide database.
                </p>
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <ul>
                        <li>Control how you spend your credits</li>
                        <li>Only verified data</li>
                    </ul>
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
