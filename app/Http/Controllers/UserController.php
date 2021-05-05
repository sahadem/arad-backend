<?php


namespace App\Http\Controllers;


use App\Services\UserService;
use Illuminate\Http\Request;

class UserController
{
    public function login(Request $request, UserService $userService)
    {
        return $userService->login($request);
    }

    public function loguot(Request $request, UserService $userService)
    {

//        $params =  $this->validate($request , [
//            'userId' => 'required|unique:user',
//            'token' => 'required',
//        ]) ;



        return $userService->logout($request);

    }
}


