<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'useremail' => 'required|email',
            'userage' => 'required|integer',
            'password' => 'required|min:6|confirmed'
        ]);
        $checkEmail = DB::table('users')->where('email', $req->useremail)->exists();
        // return $checkEmail;
        if ($checkEmail) {
            return "Email Already Exist! please Login";
        } else {
            $users = DB::table('users')->insert([
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                // 'role'=>$req->role,
                'password' => bcrypt($req->password)
            ]);
            if ($users) {
                return redirect()->route('loginpage');
            } else {
                return "Problem while Logging. Please Try Again!";
            }
        }
    }

    public function login(Request $req){
        $data = $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        // return $credentials;
        if (Auth::attempt($data)) {
            return redirect()->route('home');
        }
        else{
            return redirect()->route('registerpage');
        }
    }
    // public function taskpage(){
    //     if(Auth::check()){
    //         echo "Hello faizan";
    //         return redirect()->route('task.index');
    //     }
    //     else{
    //         return redirect()->route('registerpage');
    //     }
    // }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginpage');
    }
}
