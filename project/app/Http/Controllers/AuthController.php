<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function signupView(){
        return view('Auth.register');
    }
    public function signinView(){
        return view('Auth.login');
    }
    public function signup(Request $request){
        
        $request->validate([
           'fname'=>'required|string',
           'lname'=>'required|string',
           'email'=>'required|string',
           'password'=>'required|string|min:8',
        ]);

        $check=User::where('email',$request->email)->exists();
        if(!$check){
        $password=Hash::make($request->password);
        $register=User::create([
            'Firstname'=>$request->fname,
            'lastname'=>$request->lname,
            'email'=>$request->email,
            'password'=>$password,
            'role' => 3,
        ]);
        return redirect('/login');
        
        }else
        {
            return redirect()->back()->with('error','email already used');
        }
        

    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|string',
            'password'=>'required|string|min:8',
         ]);
         if (Auth::attempt(['email'=>$request->email,'password' => $request->password,]))
         {
            $user = Auth::user();
           return redirect('/')->with('success','welcome again');
         }
         else{
           return redirect()->back()->with('error','you must have wronged the email or the password');
         }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('index'));
    }
}
