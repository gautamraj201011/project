
@extends('layouts.master')

@section('title', 'Voting Status')

@section('sidebar')

    @parent
    <p>Successfully Registered</p>
@endsection

@section('content')

    <div class="ashish">
        <table>
        @foreach($voters as $voter)
                <tr>
         <td>   {!! $voter->voterid!!} </td>
          <td>  {!! $voter->votername!!} </td>
          <td>  {!! $voter->dob!!}  </td>
          <td>  {!! $voter->state!!}  </td>
          <td>  {!! $voter->block!!}  </td>
     </tr>
            <br>

        @endforeach
        </table>
    </div>
@endsection



