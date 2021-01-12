<footer class="section-spacer footer-section shadow border">
    <div class="container">
        <div class="row flex-column-reverse flex-sm-row flex-lg-row">
            <div class="col-md-4 col-12">
                <div class="footer-widget first-of-footer-widget">
                    <img src="{{ asset('images/logo-new-full.svg') }}" class="mb-10" style="max-height: 40px;" alt="Image">

                    <p>Copyright &copy; {{ date('Y') }} Leadsopedia. All Rights Reserved.</p>
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
                        <li>
                            <a href="#">
                                <i class="icon ion-logo-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ion-logo-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-sm-10">
                <div class="row">
                    <div class="col-md-4 col-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget__title">Menu</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('platform') }}">Platform</a>
                                </li>
                                <li>
                                    <a href="{{ route('marketing') }}">Marketing</a>
                                </li>
                                <li>
                                    <a href="{{ route('data') }}">Our Data</a>
                                </li>
                                <li>
                                    <a href="{{ route('customers') }}">Customers</a>
                                </li>
                                <li>
                                    <a href="#faq">Sign in</a>
                                </li>
                                <li>
                                    <a href="#faq">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
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
                                    <a href="#">Support</a>
                                </li>
                                <li>
                                    <a href="{{ route('api') }}">API Docs</a>
                                </li>
                                <li>
                                    <a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h4 class="footer-widget__title">Features</h4>
                            <ul class="list-unstyled">
                                {{-- <li>
                                    <a href="{{ route('marketing') }}">B2B Accounts Marketing</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('b2b') }}">Build B2B List</a>
                                </li>
                                <li>
                                    <a href="{{ route('products', 'email-verification') }}">Realtime Email
                                        Verification
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('email') }}">Email Marketing</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('products', 'data-enrichment') }}">Data Enrichment</a>
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
    </div>
</footer>
