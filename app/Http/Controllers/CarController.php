<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\ModelCar;

class CarController extends Controller
{
    public function cars(){
        $cars = Car::all();
        return view('models',['cars'=>$cars]);
    }
    public function carsForModel(ModelCar $modelcar)
    {
        $cars = $modelcar->cars;
        return view('car',['cars'=>$cars]);
    }
    public function carsAll(){
        $cars = Car::all();
        return view('all-cars',['cars'=>$cars]);
    }
}
