<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class sessionController extends Controller
{
    //
    public function login(){
        return view("auth.login");
    }
    public function store(){
        $userAtt = request()->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);

        if(!auth()->attempt($userAtt)){
            throw ValidationException::withMessages([
                'email'=>'Sorry these credentials does not match...!'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
        
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
