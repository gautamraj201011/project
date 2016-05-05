@extends('layouts.master')
@section('title', 'Voting Status')
@section('sidebar')
    @parent

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
        'route' => 'elections.store',
        'class' => 'form')
      ) !!}
    <div class="form-group">
        {!! Form::label('Year') !!}
        {!! Form::selectRange('year', 2016, 2050)!!}

        {!! Form::label('Type') !!}
        {!! Form::select('status', array('State'=> 'STATE' ,'Union' =>'UNION')) !!}

        {!! Form::label('State') !!}
        {!! Form::select('state', array('Bihar'=>'Bihar','wb'=>'Wb','Odisa'=>'Odisa')) !!} </div><br/>
    <div class="form-group">
        {!! Form::label('Start') !!}
        {!! Form::text('start', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'YYYY-MM-DD',
            'provider'=> 'Makzumi\Calendar\CalendarServiceProvider',
          )) !!}</div><br/>
    <div class="form-group">
        {!! Form::label('End') !!}
        {!! Form::text('end', null,
          array(
            'class'=>'form-control',
            'placeholder'=>'YYYY-MM-DD'
          )) !!}</div><br>

    </div>
    <div class="form-group">
    <div class="form-group">
        {!! Form::submit('Create Election!',
          array('class'=>'btn btn-primary'
        )) !!}</div>
    </div>
    {!! Form::close() !!}
    </div>



@endsection


