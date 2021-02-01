@extends('layouts.app')

@section('css')
    <style>
        .card {
            border: none;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
            border-radius: 12px;
        }

    </style>
@endsection

@section('content')
    <div class="container my-5 py-5 text-center">
        <h1>Contact Us</h1>
        <p class="lead">We'd love to hear from you!</p>
        <div class="row mt-5">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <form class="text-left" id="form-message" action="{{route('message.send')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" id="name" placeholder="John Doe" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" name="email" id="email" placeholder="example@email.com"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea name="message" id="message" cols="30" rows="3"
                                    placeholder="I would love to hear about..." class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

