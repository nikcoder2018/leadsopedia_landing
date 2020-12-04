@extends('layouts.app')

@section('css')
	<style>
		.card {
			border: none;
			box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
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
                      <a href="#" class="btn btn-primary">Select</a>
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
        		<div class="col-sm-6">
          			<div class="card">
           				 <div class="card-body">
              				<h5 class="card-title">How can i cancel my account?</h5>
              				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, impedit! Harum laboriosam id provident repudiandae recusandae libero, aliquam dicta ratione excepturi ullam eos, tempora reiciendis illo reprehenderit obcaecati alias eius!</p>
            			</div>
          			</div>
        		</div>
        		<div class="col-sm-6">
          			<div class="card">
            			<div class="card-body">
              				<h5 class="card-title">Where is the data sourced?</h5>
              				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero corrupti tempore exercitationem architecto ducimus amet repellat. Odit rerum quidem quia ut, saepe maxime, sunt quo numquam quae veniam doloremque magni.</p>
            			</div>
          			</div>
				</div>
				<div class="col-sm-6">
          			<div class="card">
            			<div class="card-body">
              				<h5 class="card-title">Can I upgrade or downgrade my plan later?</h5>
              					<p>
				  					Yes, once logged in under “Subscription” you can choose to upgrade or downgrade your plan at any time.
			  					</p>
            			</div>
          			</div>
        		</div>
				<div class="col-sm-6">
          			<div class="card">
            			<div class="card-body">
              				<h5 class="card-title">
								Can I download leads into Excel?
			  				</h5>
              				<p>
								Yes, you can easily download leads into an Excel .csv file, or you can export leads directly to your CRM
			  				</p>
            			</div>
          			</div>
        		</div>
				<div class="col-sm-6">
          			<div class="card">
           				<div class="card-body">
              				<h5 class="card-title">
								Can I exclude/suppress contacts that I already have?
			  				</h5>
              				<p>
								Yes! With Leadsopedia, you can upload a list of emails, phone numbers or company URL’s to exclude from your results.
			  				</p>
            			</div>
          			</div>
      			</div>
				<div class="col-sm-6">
          			<div class="card">
            			<div class="card-body">
              				<h5 class="card-title">
								Do you have an API?
			  				</h5>
              				<p>
								Yes, we have an API. <a href="#">Click here</a> for our API Docs.
			  				</p>
            			</div>
          			</div>
        		</div>
      			<div class="col-12">
					<div class="mt-4 text-center">
       		 			<a href="#" class="btn btn-primary btn-lg">Talk to us</a>
      				</div>
				</div>
			</div>
    	</div>
  	</section>
@endsection