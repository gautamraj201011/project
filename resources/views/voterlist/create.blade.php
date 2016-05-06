@extends('layouts.loginmaster')

@section('title', 'Voter List')

@section('sidebar')
    @parent

@endsection

@section('content')
    <p><h3>Generate Voter List</h3></p>

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
    'route' => 'voterlist.store',
    'class' => 'form')
  ) !!}



    <div class="form-group">
        {!! Form::label('Election ID:') !!}
        {!! Form::text('electionid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'id'
          )) !!}

<br/>
        {!! Form::submit('Generate',
          array('class'=>'btn btn-primary'
        ),array('')) !!}
    </div>
    {!! Form::close() !!}
    </div>

@endsection




