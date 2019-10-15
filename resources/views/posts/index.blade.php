@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
        @foreach ($posts as $post)
          <div class="container-fluid">
                <div class="card">
                        <div class="card-body">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small> Created at : {{$post->created_at}}</small>
                        </div>
                    </div>
                    <br>
                    {{$posts->links()}}
          </div>
        @endforeach
@endsection