@extends('layouts.app')

@section('content')
    
   <div class="index jumbotron">
        <h1>{{$title}}</h1>
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Ipsum rerum sint deleniti nesciunt harum dolores
            <div class="login">
                    <a class="btn btn-primary btn-lg btn_login" href="/login">Login</a>
                    <a class="btn btn-success btn-lg btn_regitser" href="/register">Register</a>
            </div>
        </p>
   </div>

@endsection