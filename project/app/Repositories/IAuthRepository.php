<?php 


namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

interface IAuthRepository{
public function checkUser(string $email);
public function createUser($lname,$fname,$email,$password);
public function login($email,$password);
}
