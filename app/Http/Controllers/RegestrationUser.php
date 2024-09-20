<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;



class RegestrationUser extends Controller
{
    //create user
    public function register(){
        return view('auth.registrationForm');
    }

    public function registerUser(Request $request){
       
        $userAtt = $request->validate([
            'name'=>['required','string', 'min:4'],
            'email'=>['required','string','email'],
            'password'=>['required','confirmed', Password::min(3)],
        ]);

        $user = User::create($userAtt);
        auth()->login($user);
        return redirect('/');
    }
}
