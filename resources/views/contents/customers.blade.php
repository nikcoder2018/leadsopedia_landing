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
                                Start-up Companies build the right foundation in Leadsopedia by helping them reach out to their first customers.
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
                                Medium-sized companies expand their reach through Leadsopedia by using our advanced search technology and world-class data enrichment processes.
                            </p>
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
                                Leading and Established Enterprises attract more customers and increase their revenue through Leadsopedia by gathering data on their existing and potential customers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center pt-5 my-5">
                <p class="lead" data-aos="fade-left" data-aos-duration="1000">
                    Our customers include business owners from small to large enterprises, prospectors, human resources
                    managers, and salespeople who want to make more connections and win their next sales pitch.
                </p>
                <h1 class="my-5 line-height-3" data-aos="fade-left" data-aos-duration="1000">
                    We guarantee that you’ll find the next successful deal here in Leadsopedia!
                </h1>
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
