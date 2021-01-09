@extends('layouts.app')

@section('content')
    <div class="my-5 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2">
                    <ul class="nav flex-column nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="authentication-tab" data-toggle="tab" role="tab"
                                aria-controls="introduction" aria-selected="true" href="#introduction">Introduction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="authentication-tab" data-toggle="tab" role="tab"
                                aria-controls="authentication" aria-selected="false"
                                href="#authentication">Authentication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="lists-tab" data-toggle="tab" role="tab"
                                aria-controls="lists" aria-selected="false" href="#lists">Lists API</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contacts-tab" data-toggle="tab" role="tab"
                                aria-controls="contacts" aria-selected="false" href="#contacts">Contacts API</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="downloads-tab" data-toggle="tab" role="tab"
                                aria-controls="downloads" aria-selected="false" href="#downloads">Downloads API</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-tab" data-toggle="tab" role="tab"
                                aria-controls="account" aria-selected="false" href="#account">Account API</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-10 tab-content">
                    <div class="tab-pane active" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Leadsopedia API Documentation</h3>
                                <p>
                                    Leadsopedia API allows you to access and build your own application that interact with
                                    Leadsopedia Features.
                                    Our API provides a RESTful interface with JSON-formatted responses to access most
                                    resources.
                                    By using the following endpoint: <a
                                        href="https://api.leadsopedia.com">api.leadsopedia.com</a>,
                                    There is only one current versions
                                    of the API that covers the functionality of the system at the moment and we are
                                    continuously working on expanding our API functionality, so stay tuned!
                                </p>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="authentication" role="tabpanel" aria-labelledby="authentication-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Authentication</h3>
                                <p>
                                    To access the API, you need the API key located under <b>Settings - API Key</b>. Example
                                    of the
                                    API key: <b>AKp2BbuyfS-ugPMkBmd3sg2</b>
                                </p>
                                <p>All API request URLs start with <a
                                        href="https://api.leadsopedia.com/v1">https://api.leadsopedia.com/v1</a></p>
                                <p>
                                    For example, to make a request to get the list of contacts in your account, you need to
                                    append the people index path to the base URL to form a URL that looks like <a
                                        href="https://api.leadsopedia.com/contacts">https://api.leadsopedia.com/contacts</a>
                                </p>
                                <hr class="my-5">
                                <h5>Response Codes</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <b>200</b> - Request was successful.
                                    </li>
                                    <li class="list-group-item">
                                        <b>201</b> - Item was successfully created. The <code>Location</code> header returned contains the URL to the newly-created item.
                                    </li>
                                    <li class="list-group-item">
                                        <b>400</b> - Wrong input parameter. See the response content for details
                                    </li>
                                    <li class="list-group-item">
                                        <b>401</b> - User not found. No user was found for the granted <code>ApiKey</code>.
                                    </li>
                                    <li class="list-group-item">
                                        <b>403</b> - Access denied. User with granted <code>ApiKey</code> doesn't have access to the requested resource.
                                    </li>
                                    <li class="list-group-item">
                                        <b>404</b> - The requested resource could not be found. See the response content for details.
                                    </li>
                                    <li class="list-group-item">
                                        <b>500</b> - Internal Server Error. See the response content for additional details. We are notified about any server errors and will resolve them shortly.
                                    </li>
                                </ul>
                                <h5 class="mt-3">Rate Limiting</h5>
                                <p>Each Reply user has a limit of 15,000 API calls per month.</p>
                                <p>The time limit between API calls takes 10 seconds.</p>
                                <p>The limit for syncing contacts using native integrations is the same as the limit for the number of contacts in your Reply account.</p>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                                <div class="dropdown">
                                    <button class="btn btn-light mt-2 dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        cURL
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item custom-tab-button" href="#authentication-curl">cURL</a>
                                        <a class="dropdown-item custom-tab-button" href="#authentication-javascript">JavaScript</a>
                                    </div>
                                </div>
                                <div class="custom-tab-item" id="authentication-curl">
                                    <pre
                                        class="m-0"><code class="bash">curl https://api.leadsopedia.com/v1/contacts \<br />&nbsp;-H 'X-Api-Key: AKp2BbuyfS-ugPMkBmd3sg2'</code></pre>
                                </div>
                                <div class="custom-tab-item d-none" id="authentication-javascript">
                                    <pre
                                        class="m-0"><code class="javascript">@include('contents.api-blocks.authentication-javascript')</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="lists" role="tabpanel" aria-labelledby="lists-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Lists API</h3>
                                <h5>Endpoints</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Lists
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> List
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists/{list_id}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-primary">POST</code> Create List
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-primary">POST</code> Update List
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists/{list_id}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-danger">DEL</code> Delete List
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists/{list_id}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Contacts API</h3>
                                <h5>Endpoints</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Contacts
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts?list_id={list_id}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Contacts (By Email)
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts?list_id={list_id}&email={email_address}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Contacts (By ID)
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts?list_id={list_id}&email={contact_id}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-primary">POST</code> Add List Contact
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-primary">POST</code> Update List Contact (By Email)
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-danger">DEL</code> Delete Contact (By ID)
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}?id={contact_id}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-danger">DEL</code> Delete Contact (By Email)
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}?id={email_address}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                            
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="downloads" role="tabpanel" aria-labelledby="downloads-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Downloads API</h3>
                                <h5>Endpoints</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Downloads
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/downloads">https://api.leadsopedia.com/v1/downloads</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Download (By ID)
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/downloads">https://api.leadsopedia.com/v1/downloads?id={download_id}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                            
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Account API</h3>
                                <h5>Endpoints</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Account
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/account">https://api.leadsopedia.com/v1/account</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Account Credits Status
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/account/credits">https://api.leadsopedia.com/v1/account/credits</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Account Usages Status
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/account/usage">https://api.leadsopedia.com/v1/account/usage</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Account Activity
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/account/activity">https://api.leadsopedia.com/v1/account/activity</a>
                                    </li>
                                    <li class="list-group-item">
                                        <h6>
                                            <code class="text-warning">GET</code> Account History
                                        </h6>
                                        <a href="https://api.leadsopedia.com/v1/account/history">https://api.leadsopedia.com/v1/account/history</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/api-docs.js') }}"></script>
@endsection
