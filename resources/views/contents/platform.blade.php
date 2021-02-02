@extends('layouts.app')

@section('content')
    <div class="container pt-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h5 class="gradient-white-to-blue d-inline px-3 py-2 rounded">
                        Services
                    </h5>
                </div>
                <h2 class="mt-2 line-height-3" data-aos="fade-right" data-aos-duration="1000">
                    Leadsopedia.com offers the lowest pricing plans with the widest data coverage. We cater to both local and international companies and help them find opportunities to grow their businesses.
                </h2>
                <div class="d-flex pb-5 mb-5 mt-3">
                    <a href="{{env('APP_FRONT_URL')}}/register" class="btn btn-primary btn-lg mx-1" data-aos="fade-right" data-aos-duration="1000">
                        Sign Up
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 d-flex" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/info-from-data.png') }}" alt="" class="img-fluid mx-auto">
            </div>
        </div>

        <hr class="my-5" />
    
        <div class="row">
            <div class="d-none d-md-block col-sm-6 p-3 border-right" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/searching.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 text-left p-4">
                <h4 class="text-secondary mt-2" data-aos="fade-left" data-aos-duration="1000">B2B Leads</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">Get access to over +30 million contacts with guaranteed data accuracy</h1>
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-12 col-sm-6 text-left p-4">
                <h4 class="text-secondary mt-2" data-aos="fade-right" data-aos-duration="1000">Updated and Verified Data</h4>
                <h2 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Use our data to grow your business. Our platform’s refined data is designed for you to reach out to the right customers.
                </h2>
            </div>
            <div class="d-none d-md-block col-sm-6 p-3 border-left" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/designing.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <hr class="my-5" />
    
        <div class="row">
            <div class="d-none d-md-block col-sm-6 p-3 border-right" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/high-sales.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 text-left p-4">
                <h4 class="text-secondary mt-2" data-aos="fade-left" data-aos-duration="1000">Verified B2B Data</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">Leadsopedia’s verification process is designed for you to reach the right customers.</h1>
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-12 col-sm-6 text-left p-4">
                <h4 class="text-secondary mt-2" data-aos="fade-right" data-aos-duration="1000">B2B Email Lists
                </h4>
                <h2 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Target the right prospects and launch effective marketing strategies.
                </h2>
            </div>
            <div class="d-none d-md-block col-sm-6 p-3 border-left" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/boost-sale.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <hr class="my-4" />

    <div style="background-color: #0C73F9;" class="my-5 py-5 shadow">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-md-5 d-flex">
                    <div class="align-self-center">

                        <h3 class="text-white" data-aos="fade-right" data-aos-duration="1000">Get Started Today!</h3>
                        <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                            Want to experience the magic for yourself? Sign up to start generating leads for your
                            company!
                        </p>
                        <a href="https://app.leadsopedia.com/register" class="btn btn-light" data-aos="fade-right" data-aos-duration="1000">
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
@endsection
