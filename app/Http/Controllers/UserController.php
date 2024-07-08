<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $req){
        $data = $req->validate([
            'username'=>'required',
            'useremail'=>'required|email',
            'userage'=>'required|integer',
            'password'=>'required|min:6|confirmed'
        ]);
        return $req;
    }
}
