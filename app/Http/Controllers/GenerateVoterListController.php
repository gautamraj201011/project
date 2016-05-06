<?php

namespace App\Http\Controllers;

use App\VotingStatus;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class GenerateVoterListController extends Controller
{
    //
    public function create()
    {
        return view('voterlist.create');
    }

    public function store(Request $request)
    {
        try {

            $this->validate($request, [
                'electionid' => 'required',

            ]);
            $id = $request->get('electionid');

            $state = DB::table('elections')->where('electionid', $id)->first();

            $voters = DB::table('voter_details')->where('state', $state->state)->get();


            return view('voterlist.show', compact('voters'));


        }catch (\Exception $e) {
            Session::flash('message', 'Wrong Input');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/voterlist/create')->with('msg', ' Sorry something went worng. Please try again.');

        
    }
        return view('voterlist.show', compact('voters'));
}
}
