<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PreConstController extends Controller
{
    //
    public function create()
    {
        return view('create_constituency.create');
    }


    public function store(Request $request)
    {
        try {


            $this->validate($request, [
                'electionid' => 'bail|required'

            ]);
            $id = $request->get('electionid');


            $election = DB::table('elections')->where('electionid', $id)->first();

            $state = $election->state;
        }catch (\Exception $e) {
            Session::flash('message', 'Invalid Entry , Enter again');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/create_constituency/create');
        }

        return view('const.create', compact('id','state'));
    }

}
