<?php

namespace App\Repositories\Implementations;

use App\Models\User;
use App\Repositories\IAuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthRepositoryImpl implements IAuthRepository {


    public function checkUser($email){
         return User::where('email',$email)->exists();
    }

    public function createUser($lname,$fname,$email,$password){
     return User::create([
          'lastname'=> $lname,
          'Firststname'=> $fname,
          'email' => $email,
          'password'=> $password,
          'role'=>3,
]);
    }

    public function login($email,$password){
        if (Auth::attempt(['email'=>$email,'password' => $password,]))
         {
              $user = Auth::user();
              return true;
         }else{
            return false;
         }
    }
}
