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
       // $elections->save();
       // return view('elections.show', compact('elections'));
          return $elections->state;
    }catch (\Exception $e) {
        Session::flash('message', 'Invalid Input, Try again');
        Session::flash('alert-class', 'alert-danger');
        return Redirect::to('http://localhost/project/public/elections/create');
    }

    }

}
