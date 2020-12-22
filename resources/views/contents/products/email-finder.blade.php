@extends('layouts.app')

@section('content')
    <div class="container pt-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="d-flex" data-aos="fade-down" data-aos-duration="1000">
                    <h5 class="badge-primary d-inline px-3 py-2 rounded">
                        Email Finder
                    </h5>
                </div>
                <h1 class="mt-2 display-4" data-aos="fade-right" data-aos-duration="1000">
                    Unlock your top prospects’ emails
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Find the right emails and contacts for key decision-makers at the companies you sell to.
                </p>
                <div class="d-flex pb-5 mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#" class="btn btn-primary btn-lg mx-1">
                        Sign Up
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-lg mx-1">
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
                    <h6 class="align-self-center ml-2 mr-auto">95% Accuracy Guarantee</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2" data-aos="fade-up" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/quick-search-small.svg') }}" alt=""
                        class="img-fluid align-self-center ml-auto">
                    <h6 class="align-self-center ml-2 mr-auto">Search By Company Name Or URL</h6>
                </div>
            </div>
            <div class="col-12 col-md-4 p-2" data-aos="fade-left" data-aos-duration="1000">
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
                <img src="{{ asset('images/graphics/data-enrichment.png') }}" alt="" class="img-fluid align-self-center"
                    data-aos="fade-right" data-aos-duration="1000">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/target.svg') }}" alt="" data-aos="fade-left" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">95% Accuracy</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    We back up our accuracy with a guarantee
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Similar tools won’t disclose their accuracy rate because it’s too low or they simply can’t guarantee it.
                    We say it upfront: 95% data accuracy.

                </p>
                <div class="d-flex">
                    <ul>
                        <li data-aos="fade-left" data-aos-duration="1000">Real-time verification</li>
                        <li data-aos="fade-left" data-aos-duration="1000">No match = no charge</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/quick-search.svg') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Lookup</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Find emails by company or URL
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Enter a contact name and company name or URL and get your lead’s valid email in seconds.
                </p>
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <ul>
                        <li data-aos="fade-right" data-aos-duration="1000">Pay only for valid emails</li>
                        <li data-aos="fade-right" data-aos-duration="1000">Accept-all and catch-all emails are flagged</li>
                    </ul>
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
                <h4 class="text-secondary mt-3" data-aos="fade-left" data-aos-duration="1000">Valid Emails</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-left" data-aos-duration="1000">
                    Real emails — no guesses
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    You don’t want to pay to access guessed emails or guessed email patterns. UpLead only works with known,
                    verified emails.
                </p>
                <div class="d-flex" data-aos="fade-left" data-aos-duration="1000">
                    <ul>
                        <li data-aos="fade-left" data-aos-duration="1000">Instant verification</li>
                        <li data-aos="fade-left" data-aos-duration="1000">Phone number and social links included</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/bulk-email-large.svg') }}" alt="" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="text-secondary mt-3" data-aos="fade-right" data-aos-duration="1000">Bulk Email Lookup</h4>
                <h1 style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Grab thousands of emails in seconds
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Upload a list with names and companies and get emails, phone numbers, social profiles and more, at once.
                </p>
                <div class="d-flex">
                    <ul>
                        <li data-aos="fade-right" data-aos-duration="1000">Grab 40+ attributes at once</li>
                        <li data-aos="fade-right" data-aos-duration="1000">Export to Excel or CRM</li>
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
