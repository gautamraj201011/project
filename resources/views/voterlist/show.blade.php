
@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')

    @parent
    <h3>VoterList</h3>
@endsection

@section('content')

    <div class="ashish">
        <table>
            <th>VoterId</th>
            <th>VoterName</th>
            <th>DOB</th>
            <th>State</th>
            <th>Block</th>
        @foreach($voters as $voter)
                <tr>
         <td>   {!! $voter->voterid!!} </td>
          <td>  {!! $voter->votername!!} </td>
          <td>  {!! $voter->dob!!}  </td>
          <td>  {!! $voter->state!!}  </td>
          <td>  {!! $voter->block!!}  </td>
     </tr>

        @endforeach
        </table>
    </div>
@endsection



