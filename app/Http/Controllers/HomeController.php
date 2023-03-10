<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function signup(){
        return view('Frontend.Login.signup');

    }
    public function login(){
        return view('Frontend.Login.login');
      }
    public function welcome(){
          return view('welcome');
    }
    public function admin(){
        return view('Backend.index');
    }
}
