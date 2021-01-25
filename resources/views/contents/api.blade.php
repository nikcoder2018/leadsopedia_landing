@extends('layouts.app')

@section('content')
    <div class="my-5 py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2">
                    @include('contents.api-blocks.list')
                </div>
                <div class="col-12 col-md-10 tab-content">
                    <div class="tab-pane active" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">
                        @include('contents.api-blocks.tabs.introduction')
                    </div>
                    <div class="tab-pane" id="authentication" role="tabpanel" aria-labelledby="authentication-tab">
                        @include('contents.api-blocks.tabs.authentication')
                    </div>
                    <div class="tab-pane" id="lists" role="tabpanel" aria-labelledby="lists-tab">
                        @include('contents.api-blocks.tabs.lists')
                    </div>
                    <div class="tab-pane" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                        @include('contents.api-blocks.tabs.contacts')
                    </div>
                    <div class="tab-pane" id="downloads" role="tabpanel" aria-labelledby="downloads-tab">
                        @include('contents.api-blocks.tabs.downloads')
                    </div>
                    <div class="tab-pane" id="account" role="tabpanel" aria-labelledby="account-tab">
                        @include('contents.api-blocks.tabs.account')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/api-docs.js') }}"></script>
@endsection
