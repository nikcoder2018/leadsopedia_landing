@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card-group">
            <div class="card m-3 rounded shadow">
                <div class="card-body">
                    <p class="card-text">
                        Bulk Search 1 Keyword In <b>Multiple Cities</b>
                    </p>
                    <p class="card-text">
                        Enter <b>1 Keyword</b> and Multiple Cities <small>(up to 100)</small>
                    </p>
                    <form>
                        <div class="form-group">
                            <label for="keyword">Pick a Keyword</label>
                            <input type="text" name="keyword" id="keyword" placeholder="Please Choose a Keyword"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="list">
                                Cities List
                                <a href="#" class="d-inline">
                                    <small>Top by Country</small>
                                </a>
                            </label>
                            <textarea name="list" id="list" cols="30" rows="10"
                                placeholder="Enter city or City State &#10;&#10;New York City &#10;Miami, FL &#10;Portland ME &#10;&#10; Separated 1 Per Line &#10;&#10; System will match cities to closest matching location"
                                class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="country">Choose a Country</label>
                            <select name="country" id="country" class="form-control">
                                <option value="United States">
                                    United States
                                </option>
                                <option value="Philippines">
                                    Philippines
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reference">
                                Enter a Reference/Filename for this List
                                <small>you can enter anything here</small>
                            </label>
                            <input type="text" name="reference" id="reference" placeholder="plumbers 100 cities"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Fetch Leads
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card m-3 rounded shadow">
                <div class="card-body">
                    <p class="card-text">
                        Bulk Search 1 City For <b>Multiple Keywords</b>
                    </p>
                    <p class="card-text">
                        Choose <b>1 City</b> and search for many keywords <small>(up to 100)</small>
                    </p>
                    <form>
                        <div class="form-group">
                            <label for="location">Select a Location</label>
                            <input type="text" name="location" id="location" placeholder="Choose a Location"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="keywords">
                                Enter Multiple Keywords
                                <a href="#" class="d-inline">
                                    <small>
                                        Keyword List
                                    </small>
                                </a>
                            </label>
                            <textarea name="keywords" id="keywords"
                                placeholder="Enter multiple keywords per line &#10;&#10;Appliance Repair &#10;Architects &#10;Attorneys &#10;Auto Body Repair &#10;Auto Detailing &#10;Auto Glass &#10;Auto Repair &#10;Bail Bonds"
                                cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="filename">
                                Enter a Reference/Filename for this List <small>you can enter anything here</small>
                            </label>
                            <input type="text" name="filename" id="filename" placeholder="dallas 100 niche for john smith"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Fetch Leads
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="container overflow-hidden pb-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 data-aos="fade-right" data-aos-duration="1000">How does this work?</h1>
                <p data-aos="fade-right" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum voluptates quas id aperiam eos ducimus
                    assumenda doloribus, nobis ipsam eaque quos debitis maiores. Illo porro error ut. Doloribus, doloremque.
                </p data-aos="fade-right" data-aos-duration="1000">
                <p data-aos="fade-right" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum voluptates quas id aperiam eos ducimus
                    assumenda doloribus, nobis ipsam eaque quos debitis maiores. Illo porro error ut. Doloribus, doloremque.
                </p>
            </div>
            <div class="text-center col-12 col-md-6 d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/searching.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12">
                <hr class="my-5" />
            </div>
            <div class="text-center col-12 col-md-6 d-none d-md-block" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/designing.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 pt-5">
                <h1 data-aos="fade-left" data-aos-duration="1000">What are the limits?</h1>
                <p data-aos="fade-left" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum voluptates quas id aperiam eos ducimus
                    assumenda doloribus, nobis ipsam eaque quos debitis maiores. Illo porro error ut. Doloribus, doloremque.
                </p>
                <p data-aos="fade-left" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum voluptates quas id aperiam eos ducimus
                    assumenda doloribus, nobis ipsam eaque quos debitis maiores. Illo porro error ut. Doloribus, doloremque.
                </p>
            </div>
            <div class="col-12">
                <hr class="my-5" />
            </div>
            <div class="col-12 col-md-6">
                <h1 data-aos="fade-right" data-aos-duration="1000">Is it accurate?</h1>
                <p data-aos="fade-right" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum voluptates quas id aperiam eos ducimus
                    assumenda doloribus, nobis ipsam eaque quos debitis maiores. Illo porro error ut. Doloribus, doloremque.
                </p>
                <p data-aos="fade-right" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum voluptates quas id aperiam eos ducimus
                    assumenda doloribus, nobis ipsam eaque quos debitis maiores. Illo porro error ut. Doloribus, doloremque.
                </p>
            </div>
            <div class="text-center col-12 col-md-6 d-none d-md-block" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('images/graphics/building.png') }}" alt="" class="img-fluid rounded  ">
            </div>
        </div>
    </div>

    <hr class="my-5" />

    <div class="blue overflow-hidden mt-5">
        <div class="container text-center py-5 my-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white" style="line-height: 3rem;" data-aos="fade-right" data-aos-duration="1000">
                        Experience the world-class service from Leadsopedia!
                    </h1>
                    <p class="lead text-white" data-aos="fade-right" data-aos-duration="1000">
                        Wherever you are in the world and whatever industry you’re in, opportunities are endless with
                        Leadsopedia!
                    </p>
                    <a href="https://app.leadsopedia.com/register" class="mt-2 btn btn-light btn-lg" data-aos="fade-right" data-aos-duration="1000">
                        Sign Up Now
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
