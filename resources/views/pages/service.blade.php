@extends('layouts.app')

@section('content')

        <h1>{{$title}}</h1>
        <ul>
                @foreach ($services as $service)
                        <li>{{$service}}</li>
                @endforeach
        </ul>
        <p>This is the services page </p>

@endsection