<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    function loginPost(Request $request)
    {
        $validated = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:3',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    
            return redirect()->intended('/');
        }else{
            return back()->withErrors(['email' => 'Невалиден имейл или парола'])->withInput();
        }
       
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
