<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class homeController extends Controller
{
    public function index(){
        return view('home.index');
    }
}
