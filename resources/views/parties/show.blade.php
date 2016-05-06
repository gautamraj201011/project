



@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Party Created Successfully</p>
@endsection

@section('content')
    <div class="ashish">
        <table>
        <h1><tr><td>PartId:</td><td>{{$parties->partyid }}</td> </tr> </h1>
       <h3> <tr><td>partyname:</td><td>{{$parties->partyname }}</td> </tr> </h3>
       <h3> <tr><td>partysymbol:</td><td>{{$parties->partysymbol}}</td> </tr></h3>
        </table></div>
@endsection