@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-3">
                @include('partials.filters',['url' => "/lineups/$lineup->name/"])
            </div>
            <div class="col-md-5">
                @include('partials.postList')
            </div>
            <div class="col-md-4">
                @include('partials.contactUsernamesList')
            </div>
        </div>
    </div>
@endsection
