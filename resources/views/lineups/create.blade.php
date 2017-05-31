@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Lineup</div>

                    <div class="panel-body">
                        <form action="/lineups" method="POST">
                            {{ csrf_field() }}
                            {{ Form::label('name','Lineup Name') }}
                            {{ Form::text('name',null,['id'=>'name']) }}
                            @foreach(\Social\Contact::all() as $contact)
                                <div class="checkbox">
                                    <label for="checkbox{{$contact->id}}">
                                        {{ Form::checkbox('contacts[]',$contact->id,null,['id' => 'checkbox'.$contact->id]) }} {{ $contact->last_name }}, {{ $contact->first_name }}
                                    </label>
                                </div>
                            @endforeach
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
