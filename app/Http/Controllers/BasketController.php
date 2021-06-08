<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(){
        return view('basket');
    }

    public function addToBasket(Request $request){
        /*$car=Car::where('id',$request->id)->first();
        if(!isset($_COOKIE['basket_id'])) setcookie('basket_id', uniqid);
        $basket_id = $_COOKIE['basket_id'];
        \Cart::session($basket_id);
        Cart::add([
            'id' => $car->id
        ]);*/
        return response()->json(['id'=>$request->id]);
        /*return response()->json(\Cart::getContent());*/
    }
}
