@extends('layouts.app')

@section('content')
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center pt-5">
                <h1 data-aos="fade-right" data-aos-duration="1000">
                    Our great customers
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Over the years, we’ve become a dependable source of quality data for companies of various types, shapes
                    and sizes. We’ve got something for every company:
                </p>
            </div>
            <div class="col-12">
                <div class="card-group mt-3">
                    <div class="card m-2 border rounded p-3 shadow" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card-body text-center">
                            <div class="text-center">
                                <img src="{{ asset('images/customers/start-up.svg') }}" alt="" class="img-fluid">
                            </div>
                            <h4 class="card-title mt-4 mb-2">
                                Lean start-ups and small companies
                            </h4>
                            <p class="card-text">
                                appreciate our no-string-attached policy (no contracts), and the fact that you can use our
                                product for as long as it’s required, and cancel when you don’t need it.
                            </p>
                        </div>
                    </div>
                    <div class="card m-2 border rounded p-3 shadow" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body text-center">
                            <div class="text-center">
                                <img src="{{ asset('images/customers/business.svg') }}" alt="" class="img-fluid">
                            </div>
                            <h4 class="card-title mt-4 mb-2">
                                Medium-sized, mature businesses
                            </h4>
                            <p class="card-text">
                                like us for the price-to-quality ratio that Leadsopedia provides. You get a lot of bang for
                                your
                                buck, with a vast database of prospect data to build lists with, and use in any
                                sophisticated sales, marketing, or hiring campaign.</p>
                        </div>
                    </div>
                    <div class="card m-2 border rounded p-3 shadow" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card-body text-center">
                            <div class="text-center">
                                <img src="{{ asset('images/customers/enterprise.svg') }}" alt="" class="img-fluid">
                            </div>
                            <h4 class="card-title mt-4 mb-2">
                                Industry-leading enterprises
                            </h4>
                            <p class="card-text">
                                benefit from how easy it is to integrate Leadsopedia with the software that they already
                                use,
                                instant availability of data, reliable API access, the technological superiority of our
                                product, as well as the pristine quality of our data.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
