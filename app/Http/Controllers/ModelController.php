<?php

namespace App\Http\Controllers;

use App\Models\ModelCar;

class ModelController extends Controller
{
    public function show(){
        $models = ModelCar::all();
        return view('models',['models'=>$models]);
    }
}
