@extends('layouts.app')
@section('content')
    <!-- ========================= pricing TABLE ========================= -->
  <section id="pricing" class="section-spacer pricing-section bg-very__gray">
    <div class="container">
      <header class="section-header text-center">
        <h2 class="section-title">pricing</h2>
        <p class="section-subtitle">Everything is included, no hidden fees, no nonsense</p>
      </header>
      <div class="pricing-type-switch">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="pricing-single">
                    <div class="pricing-header">
                    <h4 class="pricing-title">Monthly</h4>
                    <p>Just trying out?</p>
                    <div class="pricing-price">
                        <div class="pricing-value">
                        40
                        <sup class="pricing-currency">$</sup>
                        </div>
                        <small>Per active user/monthly</small>
                        <small class="text-warning">Save 8% on annually</small>
                    </div>
                    </div>
                    <ul class="pricing-list">
                        <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                            title="">
                            30 Daily Searches
                        </li>
                        <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                            title="">
                            Up to 30,000 Leads/Day
                        </li>
                        <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                            title="">
                            Leads Contact Data
                        </li>
                    </ul>
                    <div class="pricing-footer">
                        <a href="#" class="btn btn-primary">Select</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-single">
                  <div class="pricing-header">
                    <h4 class="pricing-title">Yearly</h4>
                    <p>Needs lots of data?</p>
                    <div class="pricing-price">
                      <div class="pricing-value">
                        240
                        <sup class="pricing-currency">$</sup>
                      </div>
                      <small>Per active user/yearly</small>
                    </div>
                  </div>
                  <ul class="pricing-list">
                    <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                        title="">
                        50 Daily Searches
                    </li>
                    <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                        title="">
                        Up to 50,000 Leads/Day
                    </li>
                    <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                        title="">
                        Lead Contact Data
                    </li>
                    <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                        title="">
                        Extended Lead Data
                    </li>
                    <li class="pricing-list__item" data-toggle="tooltip" data-replacement="right"
                        title="">
                        Bulk Search & API
                    </li>
                  </ul>
                  <div class="pricing-footer">
                    <a href="#" class="btn btn-primary">Select</a>
                  </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= testimonialS WITH SLIDER ========================= -->
  <section id="testimonials" class="section-spacer bg-blue testimonial-section">
    <div class="container">
      <header class="text-center section-header">
        <span class="text-light">Words of mouth</span>
        <h2 class="section-title">What our customer are saying</h2>
      </header>
      <div class="row flex-column-reverse flex-lg-row-reverse align-items-sm-center">
        <div class="col-md-1">
          <ul class="dots testimonial-slider__indicators">
            <li class="owl-dot"></li>
            <li class="owl-dot"></li>
            <li class="owl-dot"></li>
          </ul>
        </div>
        <div class="col-md-11">
          <div class="owl-carousel testimonial-slider">
            <blockquote class="testimonial-item">
              <div class="row align-items-center flex-column-reverse flex-md-row justify-content-sm-center">
                <div class="col-12 col-md-4">
                  <div class="testimonial-item__thumb">
                    <div class="testimonial-item__image">
                      <img src="images/demo/clients/client-3.jpg" alt="Image">
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="testimonial-content">
                    <div class="testimonial-item__context">
                      <img src="images/demo/slack-logo-light.svg" class="logo-sm" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationt.</p>
                    </div>
                    <div class="testimonial-meta">
                      <h5>Jenny Sello</h5>
                      <a href="#" class="d-block text-light">@Freelance Artist</a>
                    </div>
                  </div>
                </div>
              </div>
            </blockquote>
            <blockquote class="testimonial-item">
              <div class="row align-items-center flex-column-reverse flex-md-row justify-content-sm-center">
                <div class="col-12 col-md-4">
                  <div class="testimonial-item__thumb">
                    <div class="testimonial-item__image">
                      <img src="images/demo/clients/client-2.jpg" alt="Image">
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="testimonial-content">
                    <div class="testimonial-item__context">
                      <img src="images/demo/client-logos/logo-5-light.svg" class="logo-sm" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationt.</p>
                    </div>
                    <div class="testimonial-meta">
                      <h5>Jenny Sello</h5>
                      <a href="#" class="d-block text-light">@Freelance Artist</a>
                    </div>
                  </div>
                </div>
              </div>
            </blockquote>
            <blockquote class="testimonial-item">
              <div class="row align-items-center flex-column-reverse flex-md-row justify-content-sm-center">
                <div class="col-12 col-md-4">
                  <div class="testimonial-item__thumb">
                    <div class="testimonial-item__image">
                      <img src="images/demo/clients/client-1.jpg" alt="Image">
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="testimonial-content">
                    <div class="testimonial-item__context">
                      <img src="images/demo/client-logos/logo-7-light.svg" class="logo-sm" alt="">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationt.</p>
                    </div>
                    <div class="testimonial-meta">
                      <h5>Jenny Sello</h5>
                      <a href="#" class="d-block text-light">@Freelance Artist</a>
                    </div>
                  </div>
                </div>
              </div>
            </blockquote>
          </div>
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
      </div>
      <div class="mt-40 text-center">
        <a href="#" class="btn btn-primary btn-lg">Talk to us</a>
      </div>
    </div>
  </section>
@endsection