@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h5 class="badge-primary d-inline px-3 py-2 rounded">
                    Data Enrichment
                </h5>
                <h1 class="mt-2 display-4">
                    Turn disjointed lists into sales opportunities
                </h1>
                <p class="lead">
                    Append 50+ accurate data points to your lists of contacts, companies and emails.
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
            <div class="col-12 col-md-3 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/enrich-contacts.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Enrich Contacts</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/enrich-companies.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Enrich Companies</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/enrich-emails.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Enrich Emails</h6>
                </div>
            </div>
            <div class="col-12 col-md-3 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/pay-verified-data.svg') }}" alt="" class="img-fluid align-self-center">
                    <h6 class="align-self-center ml-2">Only Pay For Verified Data</h6>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-md-6 border-right">
                <img src="{{ asset('images/graphics/data-enrichment.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/enrich-contacts.svg') }}" alt="">
                <h4 class="text-secondary mt-3">Contacts Enrichment</h4>
                <h1 style="line-height: 3rem;">
                    Get contact information for your leads
                </h1>
                <p class="lead">
                    Upload a list of names and companies and append key contact data such as email address, phone
                    number,
                    social links and more.
                </p>
                <div class="d-flex">
                    <ul>
                        <li>Full name and company URL required</li>
                        <li>Grab 50+ data fields, including verified emails</li>
                        <li>95% accuracy guarantee</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/enrich-companies.svg') }}" alt="">
                <h4 class="text-secondary mt-3">Companies Enrichment</h4>
                <h1 style="line-height: 3rem;">
                    Pre-qualify companies with sales intelligence
                </h1>
                <p class="lead">
                    Upload a list of URLs and get company name, sales volume, number of employees, industry, social
                    links and more.
                </p>
                <div class="d-flex">
                    <ul>
                        <li>Full name and company URL required</li>
                        <li>Grab 50+ data fields, including phone number</li>
                        <li>95% accuracy guarantee</li>
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
                <img src="{{ asset('images/enrich-emails.svg') }}" alt="">
                <h4 class="text-secondary mt-3">Email Enrichment</h4>
                <h1 style="line-height: 3rem;">
                    Know your leads on a personal level
                </h1>
                <p class="lead">
                    Upload a list of emails and unlock your prospects’ name, title, phone number, social links and more.
                </p>
                <div class="d-flex">
                    <ul>
                        <li>Contact email required</li>
                        <li>No email match, no charge</li>
                        <li>95% accuracy guarantee</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 p-5">
                <img src="{{ asset('images/pay-verified-data.svg') }}" alt="">
                <h4 class="text-secondary mt-3">Zero-Waste Download</h4>
                <h1 style="line-height: 3rem;">
                    Pay only for verified matches
                </h1>
                <p class="lead">
                    Our data enrichment engine tells you how many matches we find for your lists before you export them.
                    You have full control on how many records you want to enrich and download.
                </p>
                <div class="d-flex">
                    <ul>
                        <li>Control how you spend your credits</li>
                        <li>Only pay for verified data</li>
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
