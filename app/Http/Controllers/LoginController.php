<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //

    public function create()
    {
        return view('login.create');
    }

    public function show()
    {
        return view('login.show');
    }

    public function store(Request $request)
    {
         $username= $request->get('username') ;
         $password= $request->get('password') ;

        if($username=='admin' and $password=='admin')
        {
            return view('login.admin');
        }
        if($username=='officer' and $password=='officer')
        {
            return view('verification.create');
        }
        
        else
            return view('login.create');

     }



}
