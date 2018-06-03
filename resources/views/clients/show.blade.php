@extends('master')

@section('title', 'View a client')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h2 class="header">{!! $client->name !!}</h2>
                <p> <strong>Status</strong>: {!! $client->status !!}</p>
                <p> {!! $client->content !!} </p>
            </div>
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-info">Delete</a>
        </div>
    </div>
@endsection