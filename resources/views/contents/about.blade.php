@extends('layouts.app')

@section('content')
<section class="section-spacer bg-very__gray">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <div class="feature-list-image">
            <img src="images/demo/about.svg" class="img-fluid" alt="Image">
          </div>
        </div>
        <div class="col-sm-5 ml-auto">
          <div class="feature-list-wrapper">
            <div class="content-header">
              <h2 class="content-title">About us</h2>
              <p>Leadsopedia is leads generating website and B2B business leads for both Local and Global business that can provide leads for every business that can turn prospect to be a clients.
              </p>
            </div>
            <ul class="list list-unstyled list-circle">
              <li>
                <span>Fully responsive</span>
              </li>
              <li>
                <span>24/7 Supports</span>
              </li>
              <li>
                <span>Single API</span>
              </li>
              <li>
                <span>Weekly Reports</span>
              </li>
            </ul>
            <a href="#" class="btn btn-link btn-link--secondary">
              Explore our products
              <i class="icon ion-ios-arrow-round-forward"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection