



@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p><h1 font="bold">New Election Created Successfully</h1></p>
@endsection

@section('content')
    <div class="ashish">
    <h3> Year:{{$elections->year }} </h3>
    <h3> state:{{$elections->state}}</h3></p>
    </div>
@endsection