@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                @foreach($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="level">
                                <h4 class="flex">
                                    {{$post->contact->last_name}}, {{$post->contact->first_name}} said
                                    <a href="{{$post->permalink}}">{{$post->created_at->diffForHumans()}}</a>
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
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="level">
                            <h4 class="flex">
                                Contacts in List
                            </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Username</th>
                                <th>Network</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $c)
                                @foreach($c->usernames as $u)
                                    <tr>
                                        <td>{{$c->last_name}}</td>
                                        <td>{{$c->first_name}}</td>
                                        <td><a href="{{$u->network->url.$u->identifyer}}">{{$u->identifyer}}</a></td>
                                        <td><i class="phpdebugbar-fa {{$u->network->icon}}"></i></td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
