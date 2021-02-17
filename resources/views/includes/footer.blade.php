<footer class="footer-section shadow" style="padding-top: 50px;">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-sm-row flex-lg-row px-md-3">
            <div class="col-md-4 col-12">
                <div class="footer-widget first-of-footer-widget">
                    <a class="navbar-brand bg-white rounded py-2" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-new-full.svg') }}" alt="Image" class="logo-md" style="max-height: 42px;">
                    </a>
                    <div style="width:70%; text-align:center; margin-left: 12px; margin-top: 15px;">
                    <h4 style="font-size: 15px; background-color: #0c73f9;
                    padding: 10px;
                    color: white;">Get connected with us on Social Network</h4>
                    <ul class="social-list__inline mt-10 pt-3">
                        <li>
                            <a href="https://www.facebook.com/Leadsopedia">
                                <i class="icon ion-logo-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="twitter.com/leadsopedia  ">
                                <i class="icon ion-logo-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/leadsopedia-limited">
                                <i class="icon ion-logo-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="www.instagram.com/leadsopedia">
                                <i class="icon ion-logo-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCcftKvQToMcqnTAb86gqqjg">
                                <i class="icon ion-logo-youtube"></i>
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
                                    <a href="{{ route('customers') }}">Our Clients</a>
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
                                    <a href="{{ route('ccpa-policy') }}">CCPA Policy</a>
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
                                    <a href="{{ route('services', 'b2b-leads') }}">B2B Leads</a>
                                </li>
                                <li>
                                    <a href="{{ route('services', 'refined-data') }}">Refined Data</a>
                                </li>
                                <li>
                                    <a href="{{ route('services', 'b2b-verified') }}">Verified B2B Data</a>
                                </li>
                                <li>
                                    <a href="{{ route('services', 'b2b-emails') }}">B2B Email Lists</a>
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
                <div class="footer-content container-fluid">
                    <hr>
                    <div class="footer mb-4 row">
                        <div class="col-12 col-md-10">
                            <span class="mb-0 text-muted">Copyright Leadsopedia Limited. Registered in England. Number 13145058. Registered Office at Suite 9, 2 Bicycle Mews, London, SW4 6FE, United Kingdom </span>
                            <p class="mb-0 text-muted">&#169 2021 Leadsopedia Limited. All Rights Reserved. </span><a href="{{ route('dont-sell') }}">| Do not sell my info</a></p>
                        </div>
                        <div class="col-12 col-md-2 d-flex">
                            <!-- TrustBox widget - Review Collector -->
                            <div class="trustpilot-widget" data-locale="en-GB" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="60267e25bc79ab0001bb79b2" data-style-height="62px" data-style-width="100%">
                                <a href="https://uk.trustpilot.com/review/leadsopedia.com" target="_blank" rel="noopener">Trustpilot</a>
                            </div>
                            <!-- End TrustBox widget -->
                            <img src="{{ asset('images/gdpr.png') }}" class="ml-md-auto" style="max-width: 46px;">
                            
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</footer>
