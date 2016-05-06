



@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p><h1 font="bold">New Election Created Successfully</h1></p>
@endsection

@section('content')
    <div class="ashish">
        <table>
    <h3><tr><td> Year:</td> <td>{{$elections->year }}</td></tr> </h3>
    <h3><tr> <td>state:</td> <td>{{$elections->state}}</td></tr></h3>
        </table>
    </div>
@endsection