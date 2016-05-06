

@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <h3><u>Add Party</u></h3>
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
        'route' => 'create_constituency.store',
        'class' => 'form')
      ) !!}



    <div class="form-group">
        {!! Form::label('Election ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('electionid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!}
        {!! Form::submit('ADD',
          array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection
