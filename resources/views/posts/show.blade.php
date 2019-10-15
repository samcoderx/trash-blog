@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <h1> Title of post : {{$post->title}}</h1>
    <small>Create at : {{$post->created_at}}</small>
    <div class="card">
        <div class="card-body">
            <p>{{$post->body}}</p>
        </div>
    </div>
    
@endsection