<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\VoterDetail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class VoterController extends Controller
{
    /*
        public function show()
        { $users=DB::table('voter_details')->where('partyid','1')->first();
    
            return view('parties.index',compact('users'));
        }*/

    public function create()
    {
        return view('voter.create');
    }


    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'votername' => 'required',
                'dob' => 'required',
                'state' => 'required',
                'block' => 'required',
                'voterid' => 'required',
            ]);
            $voters = new VoterDetail();
            $voters->votername = $request->get('votername');
            $voters->dob = $request->get('dob');
            $voters->state = $request->get('state');
            $voters->block = $request->get('block');
            $voters->save();
            return view('voter.show', compact('voters'));
        }catch (\Exception $e) {
                Session::flash('message', 'Invalid Entry , Enter again');
                Session::flash('alert-class', 'alert-danger');
                return Redirect::to('http://localhost/project/public/voter/create');
            }
    }
}