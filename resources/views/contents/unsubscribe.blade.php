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
                        <img src="/images/graphics/sad.svg" class="img-fluid" alt="Image">
                    </div>
                </div>
                <div class="col-sm-5 ml-auto">
                    <div class="feature-list-wrapper">
                        <div class="content-header" data-aos="fade-left" data-aos-duration="1000">
                            <h1 class="content-title">Unsubscribed</h1>
                            <p class="text-justify">
                                We will miss you!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
