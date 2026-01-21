<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signinController extends Controller
{
    public function create(){
        return view('auth.signin');
    }
}
