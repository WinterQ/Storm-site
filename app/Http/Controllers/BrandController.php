<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('brands',['brands'=>Brand::all()]);
    }

    public function show(Brand $brand){
        $models = $brand->models;
        return view('models',['models'=>$models]);
    }
}
