@extends('layouts.basic')

@section('title', 'Voting Status')

@section('sidebar')

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <ul class="nav navbar-nav"> <li><img src="http://cliparts.co/cliparts/yck/o57/ycko57xcE.png" style="width:80px;height:80px;" align="left" ></li></ul>

            <ul class="nav navbar-nav navbar-right"> <li><a href="http://localhost/project/public">Home</a></li></ul>
        </div>

    </nav>
    @parent
@endsection

@section('content')
    <h3>VOTING</h3>
    <p><h3>Enter Voter ID and Token</h3></p>

    {!! Form::open(
  array(
    'route' => 'voting.store',
    'class' => 'form')
  ) !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            There were some problems adding the category.<br />
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('Voter ID:') !!}
        {!! Form::text('voterid', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'voter id'
          )) !!}


        {!! Form::label('Token No:') !!}
        {!! Form::text('token', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'token no.'
          )) !!}
<br/>
        {!! Form::submit('ENTER!',
          array('class'=>'btn btn-primary'
        ),array('')) !!}
    </div>
    {!! Form::close() !!}
    </div>

@endsection




