@extends('layouts.loginmaster')

@section('title', 'Create Constituency')

@section('sidebar')
    @parent
    <h3><u>Create Constituency</u></h3>
@endsection

@section('content')



    {!! Form::open(
      array(
        'route' => 'const.store',
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
        {!! Form::label('ElectionID   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;') !!}
        {!! Form::text('electionid', $id,
          array(
            'class'=>'form-control','readonly'=>'true',
            'placeholder'=>'id'
          ))!!}
        {!! Form::label('Constituency Name   &nbsp;') !!}
        {!! Form::text('constituencyname', null ,
          array(
            'class'=>'form-control',
            'placeholder'=>'name'
          )) !!}




    {!! $blockList = App\BlockDetail::where('state',$state)->lists('block')  !!}



        {!! Form::label('Blocks') !!}<br />
        {!! Form::select('blocks[]',
        $blockList,
        null,
        ['class' => 'form-control',
        'multiple' => 'multiple']) !!}
<br/>
        {!! Form::submit('ADD',
          array('class'=>'btn btn-primary'
        )) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection