<?php

namespace App\Http\Controllers;

use App\ConstituencyDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class CreateConstituencyController extends Controller
{
    //
    public function create()
    {
        return view('create_constituency.create');
        
    }



    public function store(Request $request)
    {
        $cons = new ConstituencyDetail();
        $cons->constituencyname = $request->get('constituencyname');
        $cons->electionid = $request->get('electionid');
        $cons->save();
        $app = DB::table('constituency_details')->where('constituencyname',$cons->constituencyname)->first();
        return view('constituency.create', compact('cons','app'));
       
        
       // return  $cons->constituencyname;

    }

}
