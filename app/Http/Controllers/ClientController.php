<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request){
        $new_client=new Client();
        $new_client->first_name=$request->first_name;
        $new_client->last_name=$request->last_name;
        $new_client->phone=$request->phone;
        $new_client->email=$request->email;
        $new_client->save();
        return redirect()->back()->withSuccess('Вы верно ввели данные');
    }
}
