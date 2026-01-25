<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\Maker;
use Illuminate\Http\Request;
use PDO;

class homeController extends Controller
{
    public function index(){
      
     $cars = Car::find(1);
     dd($cars->favoredUsers);
      return view('home.index');
    }
}
