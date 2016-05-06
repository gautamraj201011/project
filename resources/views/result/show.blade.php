



@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Party Created Successfully</p>
@endsection

@section('content')
    <div class="ashish">
        <p>   <h1>{{$user->candidateid}}.
            {{$user->candidatename}}.
            {{$user->vote}}
            {{$user->partyid}}
            {{$party->partyname}}



        </h1> </p>

    </div>
@endsection



