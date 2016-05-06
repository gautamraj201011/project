
@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')

    @parent
    <p>Successfully Registered</p>
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



