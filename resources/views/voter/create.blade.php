@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p font="bold">!!VOTER REGISTERATION!!</p><br>
@endsection

@section('content')
    {!! Form::open(
 array(
 'route' => 'voter.store',
 'class' => 'form')
 ) !!}



    <div class="form-group">
        <div class="form-group">
        {!! Form::label('Votername') !!}
        {!! Form::text('votername', null,
        array(
        'class'=>'form-control',
        'placeholder'=>'Year'
        )) !!}</div><br>
        <div class="form-group">
        {!! Form::label('DOB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('dob', null,
        array(
        'class'=>'form-control',
        'placeholder'=>'date'
        )) !!}</div><br>
        <div class="form-group">
        {!! Form::label('State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('state', null,
        array(
        'class'=>'form-control',
        'placeholder'=>'Name'
        )) !!}</div><br>
        <div class="form-group">
        {!! Form::label('Block&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('block', null,
        array(
        'class'=>'form-control',
        'placeholder'=>'name'
        )) !!}</div><br/>

    </div>

    <div class="form-group">
        {!! Form::submit('Register!',
        array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div>
    @endsection
