<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActuatorRequest;
use App\Models\Actuator;
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
        return view('admin.actuator.index',['actuators'=>actuator::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actuator.create',['actuators'=>actuator::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActuatorRequest $request)
    {
        $new_Actuator = new Actuator();
        $new_Actuator->name = $request->name;
        $new_Actuator->save();

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Actuator $actuator)
    {
        return view('admin.actuator.edit',['actuators'=>$actuator]);
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
