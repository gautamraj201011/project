@extends('layouts.loginmaster')
@section('title', 'Voting Status')
@section('sidebar')
    @parent

@endsection

@section('content')
    <h3 style="color:#D9853B";><u>CANDIDATE REGISTERATION</u></h3><br>
    <h3><u>Candidate Registration</u></h3>
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
        'route' => 'candidate.store',
        'class' => 'form')
      ) !!}



    <div class="form-group">
        {!! Form::label('CandidateID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('candidateid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}
        {!! Form::label('CandidateName') !!}
        {!! Form::text('candidatename', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!}
        {!! Form::label('ElectionID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('electionid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}
        {!! Form::label('Constituency ID &nbsp;') !!}
        {!! Form::text('constituencyid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}
        {!! Form::label('Party ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('partyid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}

        {!! Form::submit('ADD!',
          array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div><br>
    @endsection


