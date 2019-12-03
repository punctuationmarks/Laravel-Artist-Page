<?php

namespace App\Http\Controllers\Auth;

use App\AuthenticatesUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\LoginToken;
use League\Flysystem\Exception;

class AuthController extends Controller
{

    public function __construct(AuthenticatesUser $auth)
    {
        $this->auth = $auth;
    }
    // not following RESTapi, could refactor
    // to have a sessionsController@create
    // sessionsController@store
    public function login()
    {
        return view('login');
    }

    public function postLogin()
    { 
        // try
        // 
        $this->auth->invite();

        return 'Check your email';
    }

     public function authenticate(LoginToken $token)
     {  
         try{
            $this->auth->login($token);
            return view('loggedIn');
            // "You're logged in " . auth()->user() ->name;
        } catch (Exception $e) {
            // dd($e);
            return redirect('/');
        }

     }

     public function logout()
     {
         Auth::logout();

         return redirect('/');
     }

}


