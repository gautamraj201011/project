

@extends('layouts.basic')

@section('title', 'Voting Status')

@section('sidebar')
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public">Home</a></li></ul>
        </div>

    </nav>
    @parent
    <p>Voted Successfully</p>
@endsection

@section('content')
    <p>Thank you!! Come again next time.</p>
@endsection