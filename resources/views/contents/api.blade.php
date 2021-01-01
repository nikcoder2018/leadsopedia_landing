@extends('layouts.app')

@section('content')
    <div class="my-5 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2">
                    <ul class="nav flex-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="authentication-tab" data-toggle="tab" role="tab"
                                aria-controls="introduction" aria-selected="true" href="#introduction">Introduction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="getting-started-tab" data-toggle="tab" role="tab"
                                aria-controls="getting-started" aria-selected="false" href="#getting-started">Getting
                                Started</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="installation-tab" data-toggle="tab" role="tab"
                                aria-controls="installation" aria-selected="false" href="#installation">Installation</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-10 tab-content">
                    <div class="tab-pane active" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Leadsopedia Documentation</h3>
                                <p>Our API uses the following endpoint: api.leadsopedia.com. There are two versions of the
                                    API - V1
                                    and
                                    V2 that cover different functionality of the system. You can use both versions
                                    simultaneously.
                                </p>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                                <pre><code class="javascript">console.log('Hello World');</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="getting-started" role="tabpanel" aria-labelledby="getting-started-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Getting Started</h3>
                                <p>Geting started page</p>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                                <pre class="m-0" style="">
                                    {{-- Don't put whitespace inside <code> --}}
                                    <code class="sh">@include('contents.api-blocks.getting-started')</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="installation" role="tabpanel" aria-labelledby="installation-tab">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>Installation</h3>
                                <p>Installation page</p>
                            </div>
                            <div class="col-12 col-md-6" style="background-color: #23241F;">
                                <pre class="m-0" style="">
                                    <code class="java">@include('contents.api-blocks.installation')</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
