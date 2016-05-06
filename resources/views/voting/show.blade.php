@extends('layouts.basic')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
@endsection

@section('content')
    <p>Choose Candidate of your preference and Click VOTE</p>

    {!! Form::open(
  array(
    'route' => 'vote.store',
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
        {!! Form::label('voterid:') !!}
        {!! Form::text('voterid', $user->voterid ,
          array(
            'class'=>'form-control',
            'placeholder'=>'voterid',
            'readonly'=>'true'
         )) !!}
    </div>
    <table>
        <th>Candidate Id</th>
        <th>Candidate Name</th>
        <th>Button</th>
    @foreach($kmr as $kmrs)
         <tr> <td> {{$kmrs->candidateid}} </td>
             <td> {{$kmrs->candidatename}} </td>
             <td> {!! Form::radio('candidate', $kmrs->candidateid) !!} </td>
         </tr>

    @endforeach
    </table>


<br>
    <div class="form-group">
        {!! Form::submit('VOTE',
          array('class'=>'btn btn-primary'
        ),array('')) !!}
    </div>
    {!! Form::close() !!}
    </div>


@endsection