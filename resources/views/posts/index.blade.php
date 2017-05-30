@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="level">
                                <h4 class="flex">
                                    {{$post->contact->last_name}}, {{$post->contact->first_name}} said
                                    <a href="/posts/{{$post->id}}">{{$post->created_at->diffForHumans()}}</a>
                                </h4>
                                <a href="/networks/{{ $post->network_id }}">
                                    <i class="phpdebugbar-fa {{$post->network->icon}}"></i>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="body">
                                {{ $post->content }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
