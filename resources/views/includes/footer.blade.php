<footer class="section-spacer footer-section shadow border">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-sm-row flex-lg-row px-md-3">
            <div class="col-md-4 col-12">
                <div class="footer-widget first-of-footer-widget">
                    <a class="navbar-brand bg-white rounded py-2" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-new-full.svg') }}" alt="Image" class="logo-md" style="max-height: 42px;">
                    </a>
                    <div style="margin-left: 12px; margin-top: 5px;">
                    <a href="#" class="d-block mb-10">1-203-345-8989</a>
                    <a href="#">support@leadsopedia.com</a>
                    <ul class="social-list__inline mt-10">
                        <li>
                            <a href="#">
                                <i class="icon ion-logo-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ion-logo-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ion-logo-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-10">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget__title">Menu</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('platform') }}">Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('data') }}">Data Source</a>
                                </li>
                                <li>
                                    <a href="{{ route('customers') }}">Customers</a>
                                </li>
                                <li>
                                    <a href="https://app.leadsopedia.com/login">Sign In</a>
                                </li>
                                <li>
                                    <a href="https://app.leadsopedia.com/register">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget__title">About</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('aboutus') }}">Company</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="mailto:support@leadsopedia.com">Support</a>
                                </li>
                                <li>
                                    <a href="{{ route('api') }}">API Docs</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget__title">Policies</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('disclaimer') }}">Disclaimer</a>
                                </li>
                                <li>
                                    <a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('cookies') }}">Cookie Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('refund') }}">Refund Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget__title">Our Services</h4>
                            <ul class="list-unstyled">
                                {{-- <li>
                                    <a href="{{ route('marketing') }}">B2B Accounts Marketing</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('b2b') }}">B2B Leads</a>
                                </li>
                                <li>
                                    <a href="{{ route('products', 'email-verification') }}">Refined Data
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('email') }}">Verified Emails</a>
                                </li>
                                <li>
                                    <a href="{{ route('products', 'data-enrichments') }}">B2B Email Lists</a>
                                </li>
                                <li>
                                    <a href="{{ route('bulk') }}">Bulk Search</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <div class="footer-content">
                    <div class="footer-alt text-center mb-5">
                        <p class="mb-0 text-muted">Copyright Leadsopedia Limited. Registered in England. Number 13145058. Registered Office at Suite 9, 2 Bicycle Mews, London, SW4 6FE, United Kingdom </p>
                    </div>
                    <div class="footer-icon mt-4">                                       
                                            
                    </div>                              
                </div>
            </div>
        </div>
    </div>
</footer>
