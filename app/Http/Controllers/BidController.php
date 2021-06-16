<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function create(Request $request){
        /*$new_client=new Client();
        $new_client->first_name=$request->first_name;
        $new_client->last_name=$request->last_name;
        $new_client->phone=$request->phone;
        $new_client->email=$request->email;
        $new_client->save();
        return view('car.blade',['$clients'=>$clients]);*/
    }
}
