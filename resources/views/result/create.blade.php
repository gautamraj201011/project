@extends('layouts.loginmaster')
@section('title', 'Voting Status')
@section('sidebar')
    @parent

@endsection

@section('content')
    <h1 font="bold">View Result</h1>

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
        'route' => 'result.store',
        'class' => 'form')
      ) !!}



    <div class="form-group">
        {!! Form::label('ElectionID') !!}
        {!! Form::text('electionid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'electionid'
          )) !!}
        {!! Form::label('ConstituencyID') !!}
        {!! Form::text('constituencyid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}
<br/>
            {!! Form::submit('VIEW!',
              array('class'=>'btn btn-primary'
            )) !!}</div>
    </div>
    {!! Form::close() !!}
    </div>
@endsection
