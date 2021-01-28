@extends('layouts.app')

@section('content')
    <section class="section-spacer bg-very__gray overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="feature-list-image">
                        <img src="images/graphics/designing.png" class="img-fluid" alt="Image">
                    </div>
                </div>
                <div class="col-sm-5 ml-auto">
                    <div class="feature-list-wrapper">
                        <div class="content-header" data-aos="fade-left" data-aos-duration="1000">
                            <h2 class="content-title">About Us</h2>
                            <p>
                                Leadsopedia is the number one leads generating platform for local and global business owners
                                and salespeople. We build bridges between businesses and clients. We create once in a
                                lifetime opportunity for our clients through our reliable database and excellent customer
                                support.
                            </p>
                        </div>
                        <ul class="list list-unstyled list-circle" data-aos="fade-left" data-aos-duration="1000">

                            <li>
                                <span>24/7 Customer Support</span>
                            </li>
                            <li>
                                <span>Intelligent Predictive API</span>
                            </li>
                            <li>
                                <span>Real-time Verified Database</span>
                            </li>
                        </ul>
                        <a href="{{ route('products', ['name' => 'prospector']) }}" class="btn btn-link btn-link--secondary" data-aos="fade-up" data-aos-duration="1000">
                            Explore our products
                            <i class="icon ion-ios-arrow-round-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <h1 data-aos="fade-left" data-aos-duration="1000">Leadsopedia Company Values</h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Our values are at the core of our culture, and they can be summed up by the acronym
                    <span class="text-secondary">TECI</span>.
                </p>
            </div>
            <div class="col-12 col-md-6 p-2">
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('images/customer-driven.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Teamwork</h5>
                        <div class="text-secondary">
                            Helpful | Honest | Caring
                        </div>
                        <p>
                            In Leadsopedia, we believe that one person’s weakness can be another person’s strength. We
                            understand how our team’s different expertise can contribute to our platform’s success.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/light-bulb.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Excellence</h5>
                        <div class="text-secondary">
                            Studious | Innovative | Curious
                        </div>
                        <p>
                            Excellence is one of the core strengths of Leadsopedia. We don’t settle for less and we make
                            sure that we do our 100% in everything we do.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2" data-aos="fade-right" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/medal.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Commitment</h5>
                        <div class="text-secondary">
                            Determined | Enthusiastic | Enterprising
                        </div>
                        <p>
                            A successful platform such as Leadsopedia took a lot of time and effort to put together. Our
                            team believes a commitment to our work will lead us the way to project completion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <img src="{{ asset('images/electric.svg') }}" alt="" class="img-fluid mr-2 align-self-center">
                    <div class="align-self-center">
                        <h5>Innovation</h5>
                        <div class="text-secondary">
                            Efficient | Driven | Resourceful
                        </div>
                        <p>
                            We listen to each of our team members for feedback and ideas to improve our platform. We believe
                            that there is always room for improvement. We work together to come up with the best solutions
                            and approaches.
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

    <div class="container text-center pt-5 overflow-hidden my-5 py-5">
        <div class="row">
            <div class="col-12">
                <h1 data-aos="fade-left" data-aos-duration="1000">
                    Support
                </h1>
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    If you need help with our platform, contact our world-class customer service team.
                </p>
                <a href="{{ route('contact') }}" class="mt-2 btn btn-primary" data-aos="fade-left" data-aos-duration="1000">
                    Contact Us
                </a>
            </div>
        </div>
    </div>

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
