<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
// use App\Http\Requests\LoginRequest;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    // public function verify(SignupRequest $req)
    // {
        
    //     if($req->email == $req->password){
    //         return redirect('/home');
    //     }
    //     else
    //     {
    //         echo "Invalid User";
    //     }
    // }
}
