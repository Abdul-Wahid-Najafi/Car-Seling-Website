<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use PDO;

class homeController extends Controller
{
    public function index(){
      
      $cars = Car::where('published_at', '<', now())
    ->orderBy('published_at', 'desc')
    ->limit(3)
    ->get();


      return view('home.index',['cars'=>$cars]);
    }
}
