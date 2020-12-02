@extends('layouts.app')

@section('content')
    <section class="section-spacer bg-very__gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="feature-list-image">
                        <img src="images/demo/about.svg" class="img-fluid" alt="Image">
                    </div>
                </div>
                <div class="col-sm-5 ml-auto">
                    <div class="feature-list-wrapper">
                        <div class="content-header">
                            <h2 class="content-title">About us</h2>
                            <p>Leadsopedia is leads generating website and B2B business leads for both Local and Global
                                business that can provide leads for every business that can turn prospect to be a clients.
                            </p>
                        </div>
                        <ul class="list list-unstyled list-circle">
                            <li>
                                <span>Fully responsive</span>
                            </li>
                            <li>
                                <span>24/7 Supports</span>
                            </li>
                            <li>
                                <span>Single API</span>
                            </li>
                            <li>
                                <span>Weekly Reports</span>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-link btn-link--secondary">
                            Explore our products
                            <i class="icon ion-ios-arrow-round-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="my-5 container">
        <div class="text-center mb-5">
            <h1>Who We Are</h1>
            <p class="lead">
                We are a distributed and agile team of experienced and cheerful people from countries around the world.
            </p>
        </div>
        <div class="card-group">
            <div class="card m-2 p-4 shadow text-center" style="border: none; border-radius: 12px;">
                <div class="card-body">
                    <div class="px-4">
                        <img src="{{ asset('images/demo/clients/client-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="text-secondary pt-4">
                        John Doe
                    </h4>
                    <p class="m-0">Silicon Valley</p>
                    <p class="lead m-0">
                        CEO
                    </p>
                </div>
            </div>
            <div class="card m-2 p-4 shadow text-center" style="border: none; border-radius: 12px;">
                <div class="card-body">
                    <div class="px-4">
                        <img src="{{ asset('images/demo/clients/client-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="text-secondary pt-4">
                        John Doe
                    </h4>
                    <p class="m-0">Silicon Valley</p>
                    <p class="lead m-0">
                        CEO
                    </p>
                </div>
            </div>
            <div class="card m-2 p-4 shadow text-center" style="border: none; border-radius: 12px;">
                <div class="card-body">
                    <div class="px-4">
                        <img src="{{ asset('images/demo/clients/client-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                    </div>
                    <h4 class="text-secondary pt-4">
                        John Doe
                    </h4>
                    <p class="m-0">Silicon Valley</p>
                    <p class="lead m-0">
                        CEO
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <h1>Leadsopedia Company Values</h1>
                <p class="lead">
                    Our values are at the core of our culture, and they can be summed up by the acronym
                    <span class="text-secondary">CIAN</span>.
                </p>
            </div>
            <div class="col-12 col-md-6 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/customer-driven.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Customer Driven</h5>
                        <div class="text-secondary">
                            Helpful | Honest | Caring
                        </div>
                        <p>
                            Leadsopedia is in the business of growing your business. Our main priority is listening to our
                            customers, understanding their needs, and fulfilling them to the fullest extent possible.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/light-bulb.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Improving Always</h5>
                        <div class="text-secondary">
                            Studious | Innovative | Curious
                        </div>
                        <p>
                            We never stop learning. It’s the only way we can keep improving our product, customer relations,
                            as well as the individual skills of everyone on our team.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/medal.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Ambitious</h5>
                        <div class="text-secondary">
                            Determined | Enthusiastic | Enterprising
                        </div>
                        <p>
                            We’re ambitious by nature, and we’ve set out to achieve big goals with Leadsopedia. Our primary
                            aim
                            is to build a sustainable company that will stand the test of time..
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2">
                <div class="d-flex">
                    <img src="{{ asset('images/electric.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Nimble</h5>
                        <div class="text-secondary">
                            Efficient | Driven | Resourceful
                        </div>
                        <p>
                            We love small teams. Small, distributed teams are quick and nimble. Small teams make everything
                            simpler and eliminate all the bureaucracy and need for management approval which allows us to
                            get more things done quicker.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container text-center pt-5">
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
