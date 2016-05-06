



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

              @foreach($user as $users)
              <tr>

                  <td>{{$users->candidateid}}</td>
         <td>   {{$users->candidatename}}</td>
                  <td>  {{$users->vote}}</td>
          <td>  {{$users->partyid}}</td>


</tr>
            @endforeach
</table>


    </div>
@endsection



