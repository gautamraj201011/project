<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ConstituencyBlockDetail;
use App\ConstituencyDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ConstController extends Controller
{
    //

    
    public function create()
    {
        return view('const.create');
    }


    public function store(Request $request)
    {

        $id =  $request->get('electionid');
        try {
            $this->validate($request, [
                'constituencyname' => 'bail|required|unique:constituency_details,constituencyname'

            ]);
            $const = new ConstituencyDetail();
            $const->electionid = $request->get('electionid');
            $const->constituencyname = $request->get('constituencyname');
            $const->save();

            foreach ($_POST['blocks'] as $names) {


                $blocks = new ConstituencyBlockDetail();
                $blocks->electionid = $request->get('electionid');
                $aa = DB::table('constituency_details')->where('constituencyname', $const->constituencyname)->where('electionid', $blocks->electionid)->first();
                $blocks->constituencyid = $aa->constituencyid;
                $users = DB::table('block_details')->where('blockid', $names + 1)->first();
                $blocks->block = $users->block;
                $blocks->save();
            }

            

        }
        catch (\Exception $e) {
                Session::flash('message', 'Invalid Entry , Enter again');
                Session::flash('alert-class', 'alert-danger');
                return Redirect::to('http://localhost/project/public/create_constituency/create');
            }



        return view('const.show', compact('blocks'));
    }
}
