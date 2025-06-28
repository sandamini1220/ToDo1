<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    public function login()
    {
        return view('auth.login'); 
    }

    public function loginpost(Request $request)
    {
        
    }
}
