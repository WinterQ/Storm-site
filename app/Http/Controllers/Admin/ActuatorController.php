<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ActuatorRequest;
use App\Models\Actuator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActuatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.actuator.index',['actuators'=>Actuator::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actuator.create',['actuators'=>Actuator::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_actuator = new Actuator();
        $new_actuator->name = $request->name;
        $new_actuator->save();

        return redirect()->back()->withSuccess('Привод успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function show(Actuator $actuator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function edit(Actuator $actuator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function update(ActuatorRequest $request, Actuator $actuator)
    {
        $actuator->name = $request->name;
        $actuator->save();

        return redirect()->back()->withSuccess('Привод успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actuator  $actuator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actuator $actuator)
    {
        $actuator->delete();
        return redirect()->back()->withSuccess('Привод удален!');
    }
}
