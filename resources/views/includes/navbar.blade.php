<nav class="navbar navbar-expand-lg fixed-top custom-menu custom-menu__light font-weight-700">
    <div class="container-fluid px-md-3">
        <a class="navbar-brand bg-white rounded py-1" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-new-full.svg') }}" alt="Image" class="logo-md" style="max-height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-icon__circle bg-secondary">
            </span>
            <span class="menu-icon">
                <span class="menu-icon__bar"></span>
                <span class="menu-icon__bar"></span>
                <span class="menu-icon__bar"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-lg-auto pr-2">
                <li class="nav-item mx-xl-4 dropdown">
                    <a class="nav-link dropdown-toggle shadow-hover" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Our Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('products', 'prospector') }}">B2B Leads</a>
                        <a class="dropdown-item" href="{{ route('products', 'data-enrichments') }}">Refined Data</a>
                        <a class="dropdown-item" href="{{ route('products', 'email-verification') }}"> Verified B2B Data</a>
                        <a class="dropdown-item" href="{{ route('products', 'email-finder') }}">B2B Email Lists</a>
                        <a class="dropdown-item" href="{{ route('api') }}">API</a>
                    </div>
                </li>
                <li class="nav-item mx-xl-4">
                    <a class="nav-link" href="{{ route('pricing') }}">Pricing Plans</a>
                </li>
                <li class="nav-item mx-xl-4">
                    <a class="nav-link" href="{{ route('data') }}">Data Source</a>
                </li>
                <li class="nav-item mx-xl-4">
                    <a class="nav-link shadow-hover" href="{{ route('aboutus') }}">About Us</a>
                </li>
            </ul>
            <div class="custom-menu__right d-flex">
                <a href="{{ env('APP_AUTH_URL', 'https://app.leadsopedia.com') . '/login' }}"
                    class="btn btn-default mx-auto align-self-center shadow-hover">Login</a>
                <a href="{{ env('APP_AUTH_URL', 'https://app.leadsopedia.com') . '/register' }}"
                    class="btn btn-primary mx-auto align-self-center btn-pills shadow-hover">Sign Up</a>
            </div>
        </div>
    </div>
</nav>
