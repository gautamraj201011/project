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
    <div class="ashish">
<table>
  <tr><td> voterid  :</td>
      <td> {{$user->voterid }}</td> </tr>
    <tr> <td> token no:</td>
        <td>{{ $user->token}}</td> </tr>
</table>
        </div>


@endsection
