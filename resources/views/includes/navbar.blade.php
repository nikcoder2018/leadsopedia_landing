<nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('images/logo-default.png')}}" alt="Image" class="logo-md">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-icon__circle">
          </span>
        <span class="menu-icon">
            <span class="menu-icon__bar"></span>
            <span class="menu-icon__bar"></span>
            <span class="menu-icon__bar"></span>
          </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" 
              id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('products', 'prospector')}}">Prospector</a>
              <a class="dropdown-item" href="{{route('products', 'data-enrichments')}}">Data Enrichments</a>
              <a class="dropdown-item" href="{{route('products', 'email-verification')}}">Email Verification</a>
              <a class="dropdown-item" href="{{route('products', 'email-finder')}}">Email Finder</a>
              <a class="dropdown-item" href="{{route('products', 'api')}}">API</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutus')}}">About us</a>
          </li>
        </ul>
        <div class="custom-menu__right">
          <a href="{{env('APP_FRONT_URL').'/login'}}" class="btn btn-default">Login</a>
          <a href="{{env('APP_FRONT_URL').'/register'}}" class="btn btn-primary btn-pills">Signup</a>
        </div>
      </div>
    </div>
</nav>