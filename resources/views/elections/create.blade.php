@extends('layouts.loginmaster')
@section('title', 'Voting Status')
@section('sidebar')
    @parent
    <h3><u>Create Election</u></h3>
@endsection

@section('content')
    <h1>Create Party</h1>

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
    'route' => 'elections.store',
    'class' => 'form')
  ) !!}
    <div class="form-group">
        {!! Form::label('Year') !!}
        {!! Form::selectRange('year', 2016, 2050)!!}

        {!! Form::label('Type') !!}
        {!! Form::select('status', array('State'=> 'STATE' ,'Union' =>'UNION')) !!}

        {!! Form::label('State') !!}
        {!! Form::select('state', array('Bihar'=>'Bihar','West Bengal'=>'West Bengal','Odisa'=>'Odisa')) !!}
        {!! Form::label('Start') !!}
        {!! Form::text('start', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'YYYY-MM-DD',

          )) !!}
        {!! Form::label('End') !!}
        {!! Form::text('end', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'YYYY-MM-DD'
          )) !!}
        <div class="form-group">
            {!! Form::submit('Create',
              array('class'=>'btn btn-primary'
            )) !!}</div>
    </div>
    {!! Form::close() !!}



@endsection
