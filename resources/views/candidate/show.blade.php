@extends('layouts.loginmaster')

@section('title', 'Voting Status')

@section('sidebar')
    @parent
    <p>Candidate Register Successfully</p>
@endsection

@section('content')
    <div class="ashish">
        <table>

    <p><h1><tr><td>CandidateID:</td><td>{{$candidate->candidateid }}</td> </tr></h1>
    <h3> <tr><td>Candidate Name:</td><td>{{$candidate->candidatename }}</td></tr> </h3>
    <h3><tr><td> ElectionID:</td><td>{{$candidate->electionid}}</td></tr></h3></p>
    <h3><tr> <td>ConstituencyID:</td><td>{{$candidate->constituencyid }}</td> </tr></h3>
    <h3><tr><td> PartyID:</td><td>{{$candidate->partyid}}</td></h3></tr></p>
        </table>
    </div>
@endsection
