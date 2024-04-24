<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\IAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    private $authservice;
    public function __construct(IAuthService $authservice) {
        $this->authservice = $authservice;
    }

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


        $password=Hash::make($request->password);
        
            $Firstname=$request->fname;
            $lastname=$request->lname;
            $email=$request->email;
            $password=$password;

            $this->authservice->register($lastname,$Firstname,$email,$password);
       return redirect()->route('login');
        return redirect('/login');
        
             
        

    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|string',
            'password'=>'required|string|min:8',
         ]);
         $email=$request->input('email');
         $password=$request->input('password');

  $login=$this->authservice->login($email,$password);
  if($login){
       return redirect('/')->with('success','welcome again');
    }else{
        return redirect('login')->with('error','email or password wrong');
    }
}

    public function logout()
    {
        Auth::logout();
        return redirect(route('index'));
    }
}
