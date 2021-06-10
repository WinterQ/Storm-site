<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actuator;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\ModelCar;
use App\Models\Transmission;

class HomeController extends Controller
{
    public function index(){

        $cars_count = Car::all()->count();
        $brands_count = Brand::all()->count();
        $models_count = ModelCar::all()->count();
        $colors_count = Color::all()->count();
        $actuators_count = Actuator::all()->count();
        $transmissions_count = Transmission::all()->count();

        return view('admin.home.index', [
            'cars_count'=>$cars_count,
            'brands_count'=>$brands_count,
            'models_count'=>$models_count,
            'colors_count'=>$colors_count,
            'actuators_count'=>$actuators_count,
            'transmissions_count'=>$transmissions_count
        ]);
    }
}
