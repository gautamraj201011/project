

@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p font="bold">!!VOTER REGISTERATION!!</p><br>
@endsection

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
