@extends('layouts.app')

@section('css')
    <style>
        .hero-trusted-by{
          margin-top: 5em;
        }
        .hero-trusted-by h5{
          font-weight: 400;
          color: #a1a1a1;
        }
    </style>
@endsection
@section('content')
    <!-- ========================= HERO SECTION ========================= -->
<header id="hero" class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-6">
          <div class="hero-content">
            <div class="hero-title__group">
              <div class="hero-title">
                <h2>Creating Success with Effective Prospecting.</h2>
              </div>
              <div class="Hero--Subtitle">
                <p class="lead">We are leads generating website and B2B business leads for both Local and Global business<p>
              </div>
            </div>
            <div class="hero-cta-group">
                <a href="#" class="btn btn-secondary">Get started</a>
            </div>
            <div class="hero-trusted-by">
                <h5>TRUSTED BY</h5>
                <img src="{{asset('images/trusted-by.svg')}}" alt="">
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-5 ml-auto">
          <div class="hero-figure">
            <img src="images/demo/hero-1.svg" class="img-fluid w-100" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- ========================= APP SCREENS SLIDER ========================= -->
  <section id="overview">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <header class="section-header pt-50 text-center">
            <h2 class="section-title">Leadsopedia is a Book of leads that you can Used to connect and Search a Right Contact.</h2>
            <p class="lead">Our Leadsopedia Platform start creating a geat stragtegy and effective lead generations experience to give your ideal prospect.</p>
            {{-- <a href="https://www.youtube.com/watch?v=_zjQ0_v8JtY"
               class="btn btn-has-icon icon-on__left text-uppercase btn-link--secondary js-video-modal-trigger">
            <span class="u-icon u-icon__sm u-icon__circle u-icon__outline">
              <i class="icon ion-ios-play"></i>
            </span>
              Watch our video
            </a> --}}
          </header>
        </div>
      </div>
      {{-- 
      <div class="section-screens__inner">
        <div class="swiper-container screen-slider">
          <div class="screen-slider-wrapper swiper-wrapper ">
            <div class="screen-slider__item swiper-slide">
              <img src="images/demo/screens/2.png" alt="Image">
            </div>
            <div class="screen-slider__item swiper-slide">
              <img src="images/demo/screens/1.jpg" alt="Image">
            </div>
            <div class="screen-slider__item swiper-slide">
              <img src="images/demo/screens/3.jpg" alt="Image">
            </div>
            <div class="screen-slider__item swiper-slide">
              <img src="images/demo/screens/4.jpg" alt="Image">
            </div>
          </div>
          <!-- If we need navigation buttons or just delete them-->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div> 
      </div>
      --}}
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="feature-card">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__purple">
              <i class="icon ion-ios-apps"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">Data Enrichment</h4>
              <p>
                Your Success is our Achievements, the better leads that you can used is here. leadsopedia enriches your contact data to make it easy for every sales team to communicate and build connection.
              </p>
  
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="feature-card">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__purple">
              <i class="icon ion-ios-apps"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">Real-time verified Data.</h4>
              <p>
                Our Platform make sure give you Real time verified data, with a built in real verification process and that anytime you download your leads it will verify the email address in real time verification system.
              </p>
  
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="feature-card">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__primary">
              <i class="icon ion-ios-keypad"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">B2B Prospector   </h4>
              <p>
                Leadsopedia give a best qaulity access to over 44 millions business contacts worldwide, into local to global businesses, from search by 45+ creteria( including job title name, industry and locations) from our high qaulity leads.
              </p>
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="feature-card m-0">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__cyan">
              <i class="icon ion-ios-bug"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">Email Varifications.</h4>
              <p>
                Our leads generaions campaign will increase your prospect, just our leadsopedia email finder functions allow you to reach high level contact and grow your network.  
              </p>
  
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="feature-card">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__primary">
              <i class="icon ion-ios-keypad"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">B2B Sales Funnel</h4>
              <p>
                Knowing and Research about prospect before you making a call.
              </p>
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="feature-card m-0">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__cyan">
              <i class="icon ion-ios-bug"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">B2B Marketing funnel</h4>
              <p>
                Creating and Generating best quality leads, Build your Business Pipeline and Create a 	Successful Campaigns.
              </p>
  
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-12">
          <div class="feature-card">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__primary">
              <i class="icon ion-ios-keypad"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">Email finder</h4>
              <p>
                leadsopedia Varify tens of thousand emails that driving more value data to your business, Using our Email finder tools it will give you access to connect with exact people you are looking for.
              </p>
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="feature-card">
            <div class="u-icon u-icon__circle u-icon__lg bg-dimped__purple">
              <i class="icon ion-ios-apps"></i>
            </div>
            <div class="feature-card__body">
              <h4 class="feature-title">Conscripting Funnel</h4>
              <p>
                Building your process was increasing your Success and Credibility that helps you to Growth.
              </p>
  
              <a href="#" class="btn btn-link btn-link--secondary">Learn more
                <i class="icon ion-ios-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection