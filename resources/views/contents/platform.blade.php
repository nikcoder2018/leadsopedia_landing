@extends('layouts.app')

@section('content')
    <div class="container pt-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h5 class="badge-primary d-inline px-3 py-2 rounded">
                        Platform
                    </h5>
                </div>
                <h1 class="mt-2 line-height-3" data-aos="fade-right" data-aos-duration="1000">
                    Our data assessment includes predictive search results to make sure you don’t miss out on every
                    opportunity.
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Find new customers with an easy-to-use platform featuring over
                    20 Million contact profiles, API, data enrichment,
                    account based marketing and much more.
                </p>
                <div class="d-flex pb-5 mb-5">
                    <a href="#" class="btn btn-primary btn-lg mx-1" data-aos="fade-right" data-aos-duration="1000">
                        Browse Features
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-lg mx-1" data-aos="fade-right" data-aos-duration="1000">
                        Sign Up
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 d-flex" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/info-from-data.png') }}" alt="" class="img-fluid mx-auto">
            </div>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <h1 class="mt-5 text-center" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    <span class="underlined">Why does Leadsopedia</span>
                    stand out from the rest?
                </h1>
            </div>
            <div class="col-12 col-md-8 offset-md-2">
                <div class="pt-3 card-group">
                    <div class="card py-5 px-4 text-center m-2 shadow" data-aos="fade-right" data-aos-duration="1000"
                        style="border: none; border-radius: 12px;">
                        <img src="{{ asset('images/ease.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">1. Ease of Use</h3>
                        <p class="card-text">
                            Simply select the criteria to fit your needs and find qualified prospects in a few clicks
                        </p>
                    </div>
                    <div class="card py-5 px-4 text-center m-2 shadow" data-aos="fade-left" data-aos-duration="1000"
                        style="border: none; border-radius: 12px;">
                        <img src="{{ asset('images/ribbon.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">2. High Quality Data</h3>
                        <p class="card-text">
                            Access to high-quality, up-to-date information to spend more time talking to leads and less time
                            qualifying them.
                        </p>
                    </div>
                </div>
                <div class="pt-3 card-group">
                    <div class="card py-5 px-4 text-center m-2 shadow" data-aos="fade-right" data-aos-duration="1000"
                        style="border: none; border-radius: 12px;">
                        <img src="{{ asset('images/clock.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">3. Realtime Verification</h3>
                        <p class="card-text">
                            Verify every email in real-time to make sure your leads get your emails.
                        </p>
                    </div>
                    <div class="card py-5 px-4 text-center m-2 shadow" data-aos="fade-left" data-aos-duration="1000"
                        style="border: none; border-radius: 12px;">
                        <img src="{{ asset('images/data-coverage.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">4. Data Coverage</h3>
                        <p class="card-text">
                            Get Access to 20 million business contacts worldwide in over 200 countries.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center pt-4" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="btn btn-primary btn-lg">
                    Sign Up
                </a>
            </div>
        </div>
    </div>

    <div class="container py-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6">
                <h5 class="text-secondary pb-3" data-aos="fade-right" data-aos-duration="1000">
                    Prospector
                </h5>
                <h1 class="my-2" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                    Find laser-focused contact & company leads easily
                </h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Searching through over 20 million profiles is easy. Simply tailor your search using over 50 filters
                    to find leads that match your ideal profile. Then access their profile to find their direct contact
                    information and engage in seconds.
                </p>
                <div class="d-flex pb-5 mb-5">
                    <a href="#" class="btn btn-primary btn-lg mx-1" data-aos="fade-right" data-aos-duration="1000">
                        Sign Up
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-lg mx-1" data-aos="fade-right" data-aos-duration="1000">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="d-none d-md-block col-md-6 d-flex" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/data-enrichment.png') }}" alt="" class="img-fluid mx-auto">
            </div>
        </div>
    </div>

    <div class="container py-5 text-center overflow-hidden">
        <div class="row">
            <div class="col-12">
                <div class="pt-3 card-group">
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-right"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/profile.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Rich Profiles</h3>
                        <p class="card-text">
                            You and your team can easily picture your leads through detailed profiles.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/contacts.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Over 20MM Contacts</h3>
                        <p class="card-text">
                            With over 20 million contacts in 200+ countries worldwide, you’ll easily find the leads you
                            need.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-left"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/filter.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Advanced Filters</h3>
                        <p class="card-text">
                            Use over 50 filters including job title, industry, location, management level, revenue and more.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pt-3 card-group">
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-right"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/gear.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Technographics</h3>
                        <p class="card-text">
                            Generate qualified leads according to the type of technology they use.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/target.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Account Based Marketing</h3>
                        <p class="card-text">
                            Start your process by identifying the accounts you want to target.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-left"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/clock.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Realtime Verification</h3>
                        <p class="card-text">
                            Verify every single email in real-time to guarantee delivery and save time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pt-3 card-group">
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-right"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/neuron.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">CRM Integration</h3>
                        <p class="card-text">
                            Seamlessly integrate with platforms like Salesforce, HubSpot, Zoho, Pipedrive, and many more.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/file-download.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Bulk Downloads</h3>
                        <p class="card-text">
                            Find and download all the information you need in a matter of minutes to access offline and
                            share with your teams.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-left"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/quick-search.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Quick Search</h3>
                        <p class="card-text">
                            Simply list down the characteristics you’re looking for and let Leadsopedia connect you to the
                            right leads.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pt-3 card-group">
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-right"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/neuron.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Data Enrichment</h3>
                        <p class="card-text">
                            Your Success is our Achievements, the better leads that you can use is here. Leadsopedia
                            enriches
                            your contact data to make it easy for every sales team to communicate and build connection.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/gear.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Email Verifications</h3>
                        <p class="card-text">
                            Our leads generations campaign will increase your prospect, just our leadsopedia email finder
                            functions allow you to reach high level contact and grow your network.
                        </p>
                    </div>
                    <div class="card py-5 px-4 m-2 shadow" style="border: none; border-radius: 12px;" data-aos="fade-left"
                        data-aos-duration="1000">
                        <img src="{{ asset('images/quick-search.svg') }}" alt="" class="img-fluid mb-4">
                        <h3 class="card-title">Email Finder</h3>
                        <p class="card-text">
                            Leadsopedia verifies tens of thousand emails that driving more value data to your business,
                            using
                            our email finder tools it will give you access to connect with exact people you are looking for.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{--
    <hr class="my-4" />

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <h3 class="text-secondary">Integrations</h3>
                <h1 class="display-4">
                    <span class="underlined">Integrate Leadsopedia</span> with your favorite applications
                </h1>
                <p class="lead">
                    Integrate Leadsopedia directly to the most used CRMs and to over 1,500 apps using Zapier.
                </p>
                <a href="#" class="mt-3 btn btn-primary btn-lg">
                    Sign Up
                </a>
            </div>
        </div>
    </div>

    <img src="{{ asset('images/more-companies.png') }}" class="img-fluid mb-0 pb-0" alt="">

    <hr class="mb-4 mt-0 pt-0" />

    <div class="container-fluid text-center py-5 my-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h1>You'll be in Good Company</h1>
                <p class="lead py-2">
                    Leadsopedia is the preferred B2B-tool for reputable companies from across the globe.
                </p>
            </div>
        </div>
        <img src="{{ asset('images/companies.svg') }}" alt="">
    </div> --}}

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
