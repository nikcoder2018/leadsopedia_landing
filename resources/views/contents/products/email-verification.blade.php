@extends('layouts.app')

@section('content')
    <div class="half-blue border-bottom">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5 class="badge-primary d-inline px-3 py-2 rounded">
                        Realtime Email Verification
                    </h5>
                    <h1 class="mt-2 display-4">
                        Our secret to delivering emails that don’t bounce
                    </h1>
                    <p class="lead">
                        The moment you click to get an email, we verify it in real-time to guarantee its accuracy.
                    </p>
                    <div class="d-flex pb-5 mb-5">
                        <a href="#" class="btn btn-primary btn-lg mx-1">
                            Sign Up
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-lg mx-1">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 d-flex">
                    <img src="{{ asset('images/graphics/data-enrichment.png') }}" alt="" class="img-fluid mx-auto">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-4 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/target-small.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">95% Accuracy Guarantee</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/pay-verified-data.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Only Pay For Verified Data</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/bulk-email.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Bulk Email Verification</h6>
                </div>
            </div>
        </div>
    </div>

    <hr class="mb-5 mt-0 pt-0" />

    <div class="half-blue-reverse border">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-md-6 p-5">
                    <img src="{{ asset('images/graphics/high-sales.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-5">
                    <img src="{{ asset('images/clock.svg') }}" alt="">
                    <h4 class="text-secondary mt-3">Realtime Verification</h4>
                    <h1 style="line-height: 3rem;">
                        Verify emails on the fly
                    </h1>
                    <p class="lead">
                        Click to unlock emails for your contacts. If we find a valid email, we’ll reveal it. If the email we
                        find is invalid, we won’t show it — and won’t charge you for it.
                    </p>
                    <div class="d-flex">
                        <ul>
                            <li>Real-time verification for every email</li>
                            <li>95% accuracy guarantee for valid emails</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="half-blue border">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 p-5">
                    <img src="{{ asset('images/control.svg') }}" alt="">
                    <h4 class="text-secondary mt-3">Controlled Downloads</h4>
                    <h1 style="line-height: 3rem;">
                        Full control on which emails you want to download
                    </h1>
                    <p class="lead">
                        Choose to ignore or download accept-all and catch-all emails. Your credits remain untouched if you
                        choose not to download.
                    </p>
                    <div class="d-flex">
                        <ul>
                            <li>Accept-all and catch-all emails are flagged</li>
                            <li>No downloads = no charge</li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 p-5">
                    <img src="{{ asset('images/graphics/business-info.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="half-blue-reverse border">
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-md-6 p-5">
                    <img src="{{ asset('images/graphics/business-consultants.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-5">
                    <img src="{{ asset('images/refresh.svg') }}" alt="">
                    <h4 class="text-secondary mt-3">Always Fresh Data</h4>
                    <h1 style="line-height: 3rem;">
                        Our data doesn’t go stale, because we don’t sit on it
                    </h1>
                    <p class="lead">
                        Every single time you get an email from Leadsopedia, we check to make sure it’s accurate. We call it
                        real-time verification, and no other tool does it.
                    </p>
                    <div class="d-flex">
                        <ul>
                            <li>Verification happens instantly</li>
                            <li>Emails are always verified before download</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="half-blue border">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 p-5">
                    <img src="{{ asset('images/file-download.svg') }}" alt="">
                    <h4 class="text-secondary mt-3">Bulk Email Verification</h4>
                    <h1 style="line-height: 3rem;">
                        Thousands of emails verified in seconds
                    </h1>
                    <p class="lead">
                        Real-time email verification and email cleansing. Clean up your lists before you start doing
                        outreach. Make sure your emails land in your prospect’s inbox.
                    </p>
                    <div class="d-flex">
                        <ul>
                            <li>Pay as you go</li>
                            <li>Replaces NeverBounce and similar tools</li>
                            <li>Pay as low as $0.003 per verification</li>
                        </ul>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-6 p-5">
                    <img src="{{ asset('images/graphics/image.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

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
    </div>

    <div class="blue">
        <div class="container text-center py-5 my-5">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <h1 class="text-white">Try it today</h1>
                    <p class="lead text-white">
                        Sign up now and put our 95% data accuracy guarantee to the test. No mandatory demos or yearly
                        contracts.
                    </p>
                    <div class="d-flex">
                        <ul class="text-left mx-auto align-self-center">
                            <li class="text-white">No mandatory demos</li>
                            <li class="text-white">No annual contract</li>
                        </ul>
                    </div>
                    <a href="#" class="mt-2 btn btn-light btn-lg">
                        Sign Up Now
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
