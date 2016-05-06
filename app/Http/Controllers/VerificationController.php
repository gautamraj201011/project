<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VoterDetail;
//use App\CandidateDetail;
//use App\ConstituencyBlockDetail;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class VerificationController extends Controller
{



    public function create()
    {
        return view('verification.create');
    }
    public function store(Request $request)
    {

        try{

            $this->validate($request, [
                'voterid' => 'required',
                
            ]);
            
            $voters =$request->get('voterid');
            $user = DB::table('voting_statuses')->where('voterid', $voters)->first();
            $aa=$user->Estatus;
           if ($aa!=1)
           {
               $bb=$user->status;

               if($bb!=1)
               {
                   DB::table('voting_statuses')->where('voterid', $voters)->update(array('token' => $user->token+rand()));
                   $user = DB::table('voting_statuses')->where('voterid', $voters)->first();
                   return view('verification.show',compact('user'));
               }
               else
               {
                   Session::flash('message', 'Already Voted');
                   //Session::flash('alert-class', 'alert-danger');
                   return Redirect::to('http://localhost/project/public/verification/create');
               }


           }
            else
            {
                return 'oops';
            }


            } catch (\Exception $e) {
            Session::flash('message', 'Wrong Input');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/verification/create')->with('msg', ' Sorry something went worng. Please try again.');
        }
    }

}
