@extends('master')

@section('title', 'View all clients')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Clients </h2>
            </div>
            @if ($clients->isEmpty())
                <p> There are no clients.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Account Manager</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{!! $client->id !!} </td>
                                <td><a href="{!! action('ClientsController@show', $client->id) !!}">{!! $client->name !!}</td>
                                <td>{!! $client->accman_id !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection