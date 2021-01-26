@extends('layouts.app')

@section('content')
    <div class="container pt-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <h5 class="badge-primary d-inline px-3 py-2 rounded">
                        Email Verification
                    </h5>
                </div>
                <h1 class="mt-2 display-4" data-aos="fade-right" data-aos-duration="1000">
                    Our secret to delivering emails that don’t bounce
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    The moment you click to get an email, we verify it in real-time to guarantee its accuracy.
                </p>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Leadsopedia’s IT system updates verified emails and contact numbers in real-time. Our infographics are designed to be in an easy-to-understand format and we eliminate unnecessary information so you can focus on what matters.
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
                    <img src="{{ asset('images/target-small.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">95% Accuracy Guarantee</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2" data-aos="zoom-in" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/pay-verified-data.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Only Verified Data</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/bulk-email.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Bulk Email Verification</h6>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="d-none d-md-block col-md-6 border-right" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/data-enrichment.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/clock.svg') }}" alt="" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">Realtime Verification</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    Our system automatically filters out inaccurate data for you
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    You don’t need to worry if your email will bounce back. We verify our data realtime.
                </p>
                <div class="d-flex" data-aos="fade-left" data-aos-duration="1000">
                    <ul>
                        <li>Real-time verification for every email</li>
                        <li>95% accuracy guarantee for valid emails</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/control.svg') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Controlled Downloads</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Have full control on your downloads
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    You can download all of our generated email lists or you can choose which ones you’ll keep.
                </p>
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <ul>
                        <li>Accept-all and catch-all emails are flagged</li>
                        <li>No downloads = no charge</li>
                    </ul>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 p-5 border-left" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/business-info.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <hr class="my-5" />


    <div class="container overflow-hidden">
        <div class="row">
            <div class="d-none d-md-block col-md-6 p-5 border-right" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/business-consultants.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/refresh.svg') }}" alt="" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">Always Fresh Data</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    Get access to updated data lists every time you log-in
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    We believe that opportunities are born every single minute. We make sure you won’t miss out.
                </p>
                <div class="d-flex" data-aos="fade-left" data-aos-duration="1000">
                    <ul>
                        <li>Verification happens instantly</li>
                        <li>Emails are always verified before download</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/file-download.svg') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Bulk Email Verification</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Our system verifies bulk email lists within seconds
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    You won’t need other tools to verify our data.
                </p>
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <ul>
                        <li>Pay as you go</li>
                        <li>Replaces NeverBounce and similar tools</li>
                        <li>Pay as low as $0.003 per verification</li>
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
