



@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Party Created Successfully</p>
@endsection

@section('content')
    <div class="ashish">
        <table>
          <tr>  <th>CandidateID</th>
            <th>CandidateName</th>
            <th>Vote</th>
            <th>PartyID</th>
            <th>Party</th></tr>
          <h1><tr>
                  <td>{{$user->candidateid}}</td>
         <td>   {{$user->candidatename}}</td>
                  <td>  {{$user->vote}}</td>
          <td>  {{$user->partyid}}</td>
          <td>  {{$party->partyname}}</td>

<tr>

        </h1> </p>

    </div>
@endsection



