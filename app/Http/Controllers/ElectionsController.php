<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Election;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\ValidationException;
use App\VotingStatus;

class ElectionsController extends Controller
{

     
    public function create()
    {
        return view('elections.create');
    }

    public function store(Request $request)
    {
      try{
        $this->validate($request, [
            'year' => 'required',
            'status' => 'required',
            'state' => 'required',
            'start' => 'required',
            'end' => 'required',


        ]);
        $elections = new Election();

        $elections->year = $request->get('year');
        $elections->status = $request->get('status');
        $elections->state = $request->get('state');
        $elections->start = $request->get('start');
        $elections->end = $request->get('end');
        $elections->save();
          //$query = DB::table('elections')->where('elec',)->first();

          $state = DB::table('elections')->where('electionid',$elections->id)->first();

          $voters = DB::table('voter_details')->where('state',$state->state)->get();

          foreach($voters as $voter){

              $entry = new VotingStatus();
              $entry->voterid=$voter->voterid;
              $entry->electionid = $elections->id;
              $entry->status=0;
              $entry->token=0;
              $entry->Estatus=0;
              $entry->save();
          }
        

         // return $elections->state;
    }catch (\Exception $e) {
        Session::flash('message', 'Invalid Input, Try again');
        Session::flash('alert-class', 'alert-danger');
        return Redirect::to('http://localhost/project/public/elections/create');
    }
        return view('elections.show', compact('elections'));
    }

}
