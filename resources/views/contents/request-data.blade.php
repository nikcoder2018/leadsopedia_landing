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
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-2">Request free data sample</h2>
                <p style="font-size: 1.2rem; line-height: 30px;">
                    Check before you buy. View a custom-made data sample of your target group. It’s free.
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                
                <div class="card rounded shadow">
                    <div class="card-body p-5">
                        <h3>We strongly believe in our data…</h3>
                        <p class="card-text">
                            So we give away an Excel sheet with a selection of 10 tailor made records. Just let us know what you need.
                        </p>
                        <form class="form-request-data" action="{{route('request-data')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First name</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="Your first name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last name</label>
                                        <input type="text" name="lastname" id="lastname" placeholder="Your last name"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Phone number</label>
                                        <input type="text" name="phone" id="phone" placeholder="Your phone number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="text" name="email" id="email" placeholder="Your business email address"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="dataset">What data do you need?</label>
                                        <select name="dataset" id="dataset" class="form-control">
                                            <option value="postal">Postal dataset</option>
                                            <option value="email">Email dataset</option>
                                            <option value="telemarketing">Telemarketing dataset</option>
                                            <option value="multichannel">Multichannel dataset</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="target">Target group and country/region</label>
                                    <div class="form-group">
                                        <input type="text" name="target" id="target" placeholder='Your target? ex. "hotels in Canada"'
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 message-container">
                                     
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Request free sample
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function(){
            'use strict';

            $('.form-request-data').on('submit', function(e){
                e.preventDefault();
                $('.form-request-data').find('button[type=submit]').prop('disabled', true);
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(resp){
                        if(resp.success){
                            $('.form-request-data').find('button[type=submit]').prop('disabled', false);
                            $('.message-container').html(`
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <div class="alert-body">
                                        ${resp.msg}
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            `);

                            setTimeout(function(){
                                location.reload()
                            }, 3000);
                        }
                    }
                })
            });
        });
    </script>
@endsection