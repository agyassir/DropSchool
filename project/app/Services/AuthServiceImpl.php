<?php

namespace App\Services;
use App\Repositories\IAuthRepository;
use App\Services\IAuthService;
use Illuminate\Support\Facades\Auth;

class AuthServiceImpl implements IAuthService {

private IAuthRepository $authrepo;
public function __construct(IAuthRepository $authrepo) {
 $this->authrepo = $authrepo;
}

public function login($email,$password){
    $login=$this->authrepo->login($email,$password);
    return $login;
}

public function register($lname,$fname,$email,$password){
    $check=$this->authrepo->checkUser($email);
    if(!$check){
return $this->authrepo->createUser($lname,$fname,$email,$password);
}else{
    return false;
}

}
public function logout(){
    Auth::logout();
}

}


