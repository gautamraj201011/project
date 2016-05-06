
@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Successfully Registered</p>
@endsection

@section('content')
    <div class="ashish">
        <table>
    <h1>thank you</h1>
    <p><h2>{{$voters->votername }} </h2>
    <h3><tr> <td>State:</td><td>{{$voters->state}} </td></tr></h3>
    <h3> <tr><td>Block:</td><td>{{$voters->block}}</td></tr></h3></p>
        </table>
    </div>
@endsection