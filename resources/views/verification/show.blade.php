@extends('layouts.basic')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public">Log Out</a></li></ul>
        </div>

    </nav>

@endsection

@section('content')

    <h1>voterid  : {{$user->voterid }}</h1>
    <h3>token no: {{ $user->token}}</h3>



@endsection
