@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h5 class="badge-primary d-inline px-3 py-2 rounded">
                    Email Finder
                </h5>
                <h1 class="mt-2 display-4">
                    Unlock your top prospects’ emails
                </h1>
                <p class="lead">
                    Find the right emails and contacts for key decision-makers at the companies you sell to.
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
            <div class="d-none d-md-block col-md-6 border-left">
                <img src="{{ asset('images/graphics/high-sales.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-4 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/target-small.svg') }}" alt="" class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">95% Accuracy Guarantee</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/quick-search-small.svg') }}" alt=""
                        class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">Search By Company Name Or URL</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/contacts-small.svg') }}" alt="" class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">+20M Contacts</h6>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-6 border-right d-flex">
                <img src="{{ asset('images/graphics/data-enrichment.png') }}" alt="" class="img-fluid align-self-center">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/target.svg') }}" alt="">
                <h4 class="text-secondary mt-3">95% Accuracy</h4>
                <h1 style="line-height: 3rem;">
                    We back up our accuracy with a guarantee
                </h1>
                <p class="lead">
                    Similar tools won’t disclose their accuracy rate because it’s too low or they simply can’t guarantee it.
                    We say it upfront: 95% data accuracy.

                </p>
                <div class="d-flex">
                    <ul>
                        <li>Real-time verification</li>
                        <li>No match = no charge</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/quick-search.svg') }}" alt="">
                <h4 class="text-secondary mt-3">Lookup</h4>
                <h1 style="line-height: 3rem;">
                    Find emails by company or URL
                </h1>
                <p class="lead">
                    Enter a contact name and company name or URL and get your lead’s valid email in seconds.
                </p>
                <div class="d-flex">
                    <ul>
                        <li>Pay only for valid emails</li>
                        <li>Accept-all and catch-all emails are flagged</li>
                    </ul>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 p-5 border-left">
                <img src="{{ asset('images/graphics/business-info.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-6 p-5 border-right text-center">
                <img src="{{ asset('images/graphics/business-consultants.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/email-check.svg') }}" alt="">
                <h4 class="text-secondary mt-3">Valid Emails</h4>
                <h1 style="line-height: 3rem;">
                    Real emails — no guesses
                </h1>
                <p class="lead">
                    You don’t want to pay to access guessed emails or guessed email patterns. UpLead only works with known,
                    verified emails.
                </p>
                <div class="d-flex">
                    <ul>
                        <li>Instant verification</li>
                        <li>Phone number and social links included</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/bulk-email-large.svg') }}" alt="">
                <h4 class="text-secondary mt-3">Bulk Email Lookup</h4>
                <h1 style="line-height: 3rem;">
                    Grab thousands of emails in seconds
                </h1>
                <p class="lead">
                    Upload a list with names and companies and get emails, phone numbers, social profiles and more, at once.
                </p>
                <div class="d-flex">
                    <ul>
                        <li>Grab 40+ attributes at once</li>
                        <li>Export to Excel or CRM</li>
                    </ul>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 p-5 border-left">
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
