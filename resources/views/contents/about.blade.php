@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
@endsection

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
                            <h1 class="content-title">About Us</h1>
                            <i class="font-weight-bold">Professional. Expertise. Commitment</i>
                            <p class="text-justify">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-6 d-none d-md-block" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/coming_home.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <h1>Company Profile</h1>
                <p class="text-justify mt-3" style="font-size: 1.1rem; line-height: 30px">
                    Established in 2021, Leadsopedia.com is a leads generating platform with affordable pricing plans fit for both small and big companies. We cater to international and local clients from different industries. 
                </p>
            </div>
            <div class="col-12">
                <div class="my-5"></div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <h1 style="line-height: 3rem;">Collaborate with us! </h1>
                <h6>Mailing Address</h6>
                <p>Suite 9, Bicycle Mews, London, SW4 6FE, United Kingdom</p>
                <h6>Phone Number</h6>
                <p>+44 20 7097 8642</p>
                <h6>Email Address</h6>
                <p>info@leadsopedia.com</p>
            </div>
            <div class="col-12 col-md-6 d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/business_deal.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container mt-5 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-12 text-center">
                <h1 class="py-1" data-aos="fade-left" data-aos-duration="1000">Leadsopedia Company Values</h1>
                <p class="lead" data-aos="fade-right" data-aos-duration="1000">
                    Our values are at the core of our culture, and they can be summed up by the acronym
                    <span class="text-secondary">TECI</span>.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 p-2 pt-3">
                <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                    <div class="align-self-center">
                        <h5>
                            <i class="fas fa-project-diagram text-secondary" style="font-size: 1.5rem"></i>
                            Teamwork
                        </h5>
                        <div class="text-secondary font-weight-bold mb-1">
                            Helpful | Honest | Caring
                        </div>
                        <p>
                            In Leadsopedia, we believe that one person’s weakness can be another person’s strength. We
                            understand how our team’s different expertise can contribute to our platform’s success.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-2 pt-3" data-aos="fade-left" data-aos-duration="1000">
                <div class="d-flex">
                    <div class="align-self-center">
                        <h5>
                            <i class="fas fa-medal text-secondary" style="font-size: 1.5rem"></i>
                            Excellence
                        </h5>
                        <div class="text-secondary font-weight-bold mb-1">
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
                    <div class="align-self-center">
                        <h5>
                            <i class="fas fa-brain text-secondary" style="font-size: 1.5rem"></i>
                            Commitment
                        </h5>
                        <div class="text-secondary font-weight-bold mb-1">
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
                    <div class="align-self-center">
                        <h5>
                            <i class="fas fa-bolt text-secondary" style="font-size: 1.5rem"></i>
                            Innovation
                        </h5>
                        <div class="text-secondary font-weight-bold mb-1">
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
