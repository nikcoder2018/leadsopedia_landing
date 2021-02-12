@extends('layouts.app')

@section('css')
<style>
    .large {
        font-size: 2rem;
    }

    p {
        justify-content: center;
    }

    li {
        margin-top: 0.75rem;
        margin-bottom: 0.75rem;
    }
</style>
@endsection

@section('content')
    <div class="container pb-5 my-5">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-2">Do not Sell My Information</h2>
                <p class="text-justify" style="font-size: 1.2rem; line-height: 30px;">
                    If you are a California resident and don’t want to sell your information online, please fill out this form. Please provide your name, e-mail, and phone number. Please read our Privacy Policy for more information. If you have questions on how we implement the CCPA through our platform, you may email us at support@leadsopedia.com or call at +44 20 7097 8642.
                </p>
            </div>
            <div class="col-md-6">
                
                <div class="card rounded shadow">
                    <div class="card-body">
                        <h3>Do Not Sell My Personal Information</h3>
                        <p class="card-text">
                            Please enter your full name as well as one other field below.
                        </p>
                        <form>
                            <div class="form-group">
                                <input type="text" name="fullname" id="fullname" placeholder="Full Name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" id="email" placeholder="Email Address"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" placeholder="Phone Number"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Remove My Information
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection