<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function store(Request $request){
        $validated = request()->validate([
             'name'=>'required|min:4',
             'email'=>'required|email|unique:users',
             'password'=>'required|min:4',
             'psw-repeat'=>'required|same:password',
             ]);
 
             User::create($validated);
 
             return redirect(route('login'))->with('success', 'Успешна регистрация');
             
             
     }
}
