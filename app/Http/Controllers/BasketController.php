<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(){
        return view('basket');
    }

    public function addToBasket(Request $request){
        return response()->json(['id'=>$request->id]);
    }
}
