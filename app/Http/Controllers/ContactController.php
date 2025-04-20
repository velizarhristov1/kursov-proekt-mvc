<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function store(Request $request){
        $validated = request()->validate([
             'name'=>'required|min:4',
             'email'=>'required|email',
             'message'=>'required|max:500',
             ]);
 
             Contact::create($validated);
 
             return back()->with('success', 'Успешно изпратихте съобщение!');
             
             
     }
}
