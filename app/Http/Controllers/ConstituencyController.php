<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\ConstituencyBlockDetail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ConstituencyController extends Controller
{
    public function show()
    {
        $users = DB::table('parties')->where('partyid', '1')->first();

        return view('parties.index', compact('users'));
    }

    public function create()
    {
        return view('constituency.create');
    }


    public function store(Request $request)
    {
        try {


            foreach ($_POST['blocks'] as $names) {
                $this->validate($request, [
                    'electionid' => 'bail|required',
                    'constituencyid' => 'bail|required',
                    $names => 'required',
                ]);
                $blocks = new ConstituencyBlockDetail();
                $blocks->electionid = $request->get('electionid');
                $blocks->constituencyid = $request->get('constituencyid');
                $users = DB::table('block_details')->where('blockid', $names + 1)->first();
                $blocks->block = $users->block;
                $blocks->save();
            }
            return view('constituency.show', compact('blocks'));
        } catch (\Exception $e) {
            Session::flash('message', 'Invalid Entry , Enter again');
            Session::flash('alert-class', 'alert-danger');
            return Redirect::to('http://localhost/project/public/create_constituency/create');
        }
    }
}