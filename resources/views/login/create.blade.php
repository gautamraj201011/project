

@extends('layouts.basic')

@section('title', 'Log In')

@section('sidebar')

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <ul class="nav navbar-nav"> <li><a href="http://localhost/project/public">Home</a></li></ul>
        </div>

    </nav>
    @parent
@endsection

@section('content')
<h3> Log In</h3>
    {!! Form::open(
      array(
       'route' => 'login.store',
        'class' => 'form')
      ) !!}


    <div class="form-group">
        {!! Form::label('UserName &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('username', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'username'
          )) !!}
        {!! Form::label('Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('password', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'password'
          )) !!}
        <br/>
        {!! Form::submit('LOG IN',
          array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection
