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
	<!-- ========================= pricing TABLE ========================= -->
  <section id="pricing" class="section-spacer pricing-section bg-very__gray">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">pricing</h2>
        <p class="section-subtitle">Everything is included, no hidden fees, no nonsense</p>
      </header>
      <div class="pricing-type-switch">
        <div class="row justify-content-center">
          @if(count($subscription_plans) > 0)
            @foreach($subscription_plans as $plan)
            <div class="col-md-4">
              <div class="pricing-single">
                  <div class="pricing-header">
                  <h4 class="pricing-title">{{$plan->title}}</h4>
                  <p>{{$plan->description}}</p>
                  <div class="pricing-price">
                      <div class="pricing-value">
                      {{$plan->price}}
                      <sup class="pricing-currency">{{$settings->currency_symbol}}</sup>
                      </div>
                      <small>Per active user/
                        @if($plan->months== 1)monthly @endif
                        @if($plan->months > 1 && $plan->months < 12)months @endif
                        @if($plan->months== 12)yearly @endif
                        @if($plan->months > 12){{($plan->months/12)}} years @endif
                      </small>
                      {{-- <small class="text-warning">Save 8% on annually</small> --}}
                  </div>
                  </div>
                  @if(count($plan->priviledges) > 0)
                  <ul class="pricing-list">
                    @foreach($plan->priviledges as $priviledge)
                      <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                          title="" @if(!$priviledge->enabled) style="text-decoration:line-through;" @endif>
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
