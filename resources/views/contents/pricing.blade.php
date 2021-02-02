@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('css/bootstrap-extended.css')}}">
    <style>
        .card {
            border: none;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
            border-radius: 12px;
        }
        .custom-switch .custom-control-input:not(:checked) ~ .custom-control-label:before {
            background-color: #545A6A;
        }
        .custom-control-input:not(:checked) ~ .custom-control-label:before {
            background-color: #283046;
            border-color: #404656;
        }
        .custom-control-input:checked ~ .custom-control-label::before {
            color: #FFFFFF;
            border-color: #2A5EE9;
            background-color: #2A5EE9;
        }
        .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
            background-color: #FFFFFF;
            -webkit-transform: translateX(2rem);
            -ms-transform: translateX(2rem);
            transform: translateX(2rem);
        }
        .custom-switch .custom-control-label::before {
            left: -3.5rem;
            width: 3rem;
            pointer-events: all;
            border-radius: 1rem;
        }
        .custom-switch .custom-control-label::after {
            top: calc(0.225rem + 2px);
            left: calc(-3.5rem + 2px);
            width: 1rem;
            height: 1rem;
            background-color: #D8D6DE;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border-color 0s, -webkit-transform 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border-color 0s, -webkit-transform 0.15s ease-in-out;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border-color 0s;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border-color 0s, -webkit-transform 0.15s ease-in-out;
        }
        .custom-control-label::after {
            position: absolute;
            top: 0.225rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: '';
            background: no-repeat 50% / 50% 50%;
        }
        .custom-control-label{
            display: block !important;
        }
        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.225rem;
            opacity: 0;
        }
        .custom-control {
            position: relative;
            z-index: 1;
            display: block;
            min-height: 1.45rem;
            padding-left: 1.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
        }
        .custom-switch {
            padding-left: 3.5rem;
        }
    </style>
@endsection

@section('content')
	<!-- ========================= pricing TABLE ========================= -->
  <section id="pricing" class="section-spacer pricing-section bg-very__gray">
    <div class="container">
        <header class="section-header text-center">
            <h2 class="section-title">Pricing Plans</h2>

            <div class="d-flex align-items-center justify-content-center mb-5 pb-50">
                <h6 class="mr-1 mb-0">Monthly</h6>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="priceSwitch" />
                    <label class="custom-control-label" for="priceSwitch"></label>
                </div>
                <h6 class="ml-50 mb-0">Annually</h6>
            </div>
        </header>
        
        <div class="pricing-type-switch">
            <div class="row justify-content-center">
            @if(count($subscription_plans) > 0)
                @foreach($subscription_plans as $plan)
                <div class="col-md-4">
                <div class="pricing-single shadow text-center" style="border-radius: 1rem;">
                    <div class="pricing-header">
                    <h4 class="pricing-title">{{$plan->title}}</h4>
                    <p>{{$plan->description}}</p>
                    <div class="pricing-price">
                        <div class="pricing-value" data-price="{{$plan->price}}"><span>{{$plan->price}}</span><sup class="pricing-currency pl-2">{{$settings->currency_symbol}}</sup></div>
                        <small class="annual-pricing d-none text-muted" data-annual-price="{{$plan->price_annual}}" data-currency="{{$settings->currency_symbol}}"></small>

                        <small class="active-user">Per active user/
                            @if($plan->months== 1)monthly @endif
                            @if($plan->months > 1 && $plan->months < 12)months @endif
                            @if($plan->months== 12)yearly @endif
                            @if($plan->months > 12){{($plan->months/12)}} years @endif
                        </small>
                        {{-- <small class="text-warning">Save 8% on annually</small> --}}
                    </div>
                    </div>
                    @if(count($plan->priviledges) > 0)
                    <ul class="m-0 p-0" style="list-style-type: none;">
                        @foreach($plan->priviledges as $priviledge)
                        <li class="" data-toggle="tooltip" data-replacement="right">
                            {{$priviledge->description}}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="pricing-footer">
                        <a href="{{env('APP_FRONT_URL')}}/register" class="btn btn-primary">Select</a>
                    </div>
                </div>
                </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
  </section>

    <!--=========================FAQs ========================= -->
    <section id="faqs" class="section-spacer section-faq">
        <div class="container">
            <header class="section-header text-center">
                <h2 class="section-title">Frequently Asked Questions</h2>
            </header>
            <div class="row">
				<div class="card-group">
					<div class="card m-2 border shadow rounded">
						<div class="card-body">
							<h5 class="card-title">
								How can I get started?
							</h5>
							<p>
								You can browse through our plans and packages and find out which one best suits you and your needs. If you’re lost and need help with which package is perfect for you, we’re here to help! We’re just one chat and one call away!
							</p>
						</div>
					</div>
					<div class="card m-2 border shadow rounded">
						<div class="card-body">
							<h5 class="card-title">
								What if I need help with the platform?
							</h5>
							<p>
								You may contact our customer support team 24/7. We’ll make sure that you’re in good hands and that you can easily navigate through our platform.
							</p>
						</div>
					</div>
				</div>
                <div class="card-group">
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">How can I cancel my account?</h5>
                            <p>
                                If you wish to cancel your account, you may look at the Accounts page and select “Cancel My
                                Subscription”. You will be given further instructions after this. You may also chat or call
                                the Customer Service Support.
                            </p>
                        </div>
                    </div>
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">Where does Leadsopedia source its data?</h5>
                            <p>
                                Leadsopedia sources its data through website traffic, email subscriptions, surveys, and many
                                more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">
                                How can I upgrade my account?
                            </h5>
                            <p>
                                You may upgrade your account through the Accounts page and select “Upgrade my Subscription”.
                                You will be directed to the page where you can choose among upgrades which suits you.
                            </p>
                        </div>
                    </div>
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">Can I upgrade or downgrade my plan later?</h5>
                            <p>
                                Yes, once logged in under “Subscription” you can choose to upgrade or downgrade your plan at
                                any time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">
                                Can I download leads into Excel?
                            </h5>
                            <p>
                                Yes, you can easily download leads into an excel .csv file, or you can export leads directly
                                to your CRM
                            </p>
                        </div>
                    </div>
					<div class="card m-2 border shadow rounded">
						<div class="card-body">
							<h5 class="card-title">
								Integrations
							</h5>
							<p>
								In Leadsopedia, we want convenience for our Clients. You can integrate Leadsopedia with the work tools you’re already using. Our world-class lead generation platform connects with your email, search engine, productivity applications, and many more!
							</p>
						</div>
					</div>
				</div>
                <div class="card-group">
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">
                                Can I exclude/suppress contacts that I already have?
                            </h5>
                            <p>
                                Yes! With Leadsopedia, you can upload a list of emails, phone numbers or company URL’s to
                                exclude from your results.
                            </p>
                        </div>
                    </div>
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">
                                Am I committing myself to a long term contract?
                            </h5>
                            <p>
                                You are always welcome to cancel your subscription anytime and you can always renew and
                                upgrade your plans when you sign up at Leadsopedia. You may contact our Customer Service
                                Support for more details.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center p-0">
                    <div class="card m-2 border shadow rounded">
                        <div class="card-body">
                            <h5 class="card-title">
                                Do you have an API?
                            </h5>
                            <p>
                                Yes, we have an API. <a href="{{ route('api') }}">Click here</a> for our API Docs.
                            </p>
                        </div>
					</div>
                </div>
                <div class="col-12">
                    <div class="mt-4 text-center">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Talk to us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        var priceSwitch = $('#priceSwitch');
        priceSwitch.on('change', function() {
          if ($(this).is(':checked')) {
            ptype = 'annual';
              $.each($('.annual-pricing'), function(i, item){
                var data = $(item).data();
                var value = data.annualPrice;
                var currency = data.currency;
                if(value > 0){
                  var MonthValue = value / 12;
                  if(MonthValue%2 != 1){
                    MonthValue = MonthValue.toFixed(2);
                  }
                  $(item).parent().find('.active-user').addClass('d-none');
                  $(item).parent().find('.pricing-value').find('span').html(MonthValue);
                  $(item).removeClass('d-none').html(currency+' ' + value + ' / year');
                }
              });
          } else {
            ptype = 'monthly';
              $.each($('.pricing-value'), function(i, item){
                var data = $(item).data();
                console.log($(item));
                $(item).find('span').html(data.price);
                $(item).parent().find('.annual-pricing').addClass('d-none');
                $(item).parent().find('.active-user').removeClass('d-none');
                
              });
          }
        });
    </script>
@endsection