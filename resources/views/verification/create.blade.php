@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h3>Verification</h3>
    <p><h3>Enter Voter ID</h3></p>

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
    'route' => 'verification.store',
    'class' => 'form')
  ) !!}



    <div class="form-group">
        {!! Form::label('Voter ID:') !!}
        {!! Form::text('voterid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!}
<br/>
        {!! Form::submit('VERIFY!',
          array('class'=>'btn btn-primary'
        ),array('')) !!}
    </div>
    {!! Form::close() !!}


@endsection




