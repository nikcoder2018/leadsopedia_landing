@extends('layouts.app')

@section('content')
    <div class="my-5 py-5 overflow-hidden"
        style="background: linear-gradient(to right, #2C2933 0%, #2C2933 50%, #D9D9D9 50%, #D9D9D9 0%);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 pr-5">
                    <h1 class="text-white" data-aos="fade-right" data-aos-duration="1000">Our Data</h1>
                    <div style="padding-right: 60%;">
                        <hr class="bg-info" />
                    </div> 
                    <p align="justify" class="text-white" data-aos="fade-right" data-aos-duration="1000">
                        Leadsopedia’s secured and safe data sets are maintained by IT experts so you don’t have to worry
                        about unsafe connections and downloads. We optimize the platform’s performance by regular server
                        checking and maintenance. Our data release is subject to a privacy agreement by both parties.
                    </p>
                    <h4 class="text-white mt-5" data-aos="fade-right" data-aos-duration="1000">
                     Data Accuracy
                    </h4>
                    <div style="padding-right: 60%;">
                        <hr class="bg-info" />
                    </div>
                    <p align="justify" class="text-white" data-aos="fade-right" data-aos-duration="1000">
                        With the right filtering process, our system efficiently generates who your next customer should be.
                        No matter how specific or how broad your preferences are, our platform will surely find the right
                        match for you. Our detailed statistics and research systems help improve the platform’s search
                        accuracy.
                    </p>
                    <a class="btn btn-warning" href="https://app.leadsopedia.com/register" data-aos="fade-right" data-aos-duration="1000">
                        Get Started
                    </a>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="container">
                        <div class="row">
                            @foreach ($plans as $plan)
                                <div class="col-6 p-3" data-aos="fade-left" data-aos-duration="1000">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $plan->title }}</h3>
                                            <p class="card-text">
                                                {{ $plan->description }}
                                            </p>
                                            <p class="card-text">
                                                {{ $plan->price }}
                                                <sup>
                                                    {{ $settings->currency_symbol }}
                                                </sup>
                                            </p>
                                            <a href="{{ route('pricing') }}" class="btn btn-sm btn-primary">
                                                Avail
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-3 my-3 overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 text-center" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="mb-4">
                 Try our world-class service today!
                </h1>
                <ul style="list-style-type: none;" class="p-0 m-0">
                    <li class="m-0 p-0">
                        <p class="lead mb-0">
                         Over 20 Million B2B Contact Lists
                        </p>
                    </li>
                    <li class="m-0 p-0">
                        <p class="lead mb-0">
                         More than 20 Million B2B Data
                        </p>
                    </li>
                    <li class="m-0 p-0">
                        <p class="lead mb-0">
                         Guaranteed High Accuracy
                        </p>
                    </li>
                </ul>
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
