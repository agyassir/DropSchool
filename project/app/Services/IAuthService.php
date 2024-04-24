<?php
namespace App\Services;

interface IAuthService{
    public function register($lname,$fname,$email,$password);
    public function login($email,$password);
    public function logout();
}