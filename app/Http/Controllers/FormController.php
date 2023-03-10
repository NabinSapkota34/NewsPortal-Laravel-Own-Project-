<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\form;

class FormController extends Controller
{

    
    public function signupUser(Request $req)
    {
        // dd("hello");
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:forms',
            'password' => 'required',
        ]);
        // dd($req->all());

        form::create([
            'name'=> $req->name,
            'email'=> $req->email,
            'password'=> Hash::make($req->password),

        ]);
        return redirect()->route('login');
    }
    public function loginUser(Request $req)
    {

        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($req->only('email','password'))){
           return redirect()->route('admin');
        } else {
            return back()->with('fail', 'User not found!');
        }
    }
}
