@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                @include('_sidebar-links')
            </div>
            <div class="col-sm-6">
               @include('_publish-tweet-panel')

               @include('_tweet')
            </div>
            <div class="col-sm">
                @include('_friends-list')
            </div>
        </div>
    </div>
@endsection
