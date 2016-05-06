@foreach($voters as $voter)

{!! $voter->voterid!!}
{!! $voter->votername!!}
{!! $voter->dob!!}
{!! $voter->state!!}
{!! $voter->block!!}
<br>

    @endforeach