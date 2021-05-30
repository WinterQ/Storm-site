<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransmissionRequest;
use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transmission.index',['transmissions'=>Transmission::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transmission.create',['transmissions'=>Transmission::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransmissionRequest $request)
    {
        $new_transmission = new Transmission();
        $new_transmission->name = $request->name;
        $new_transmission->save();

        return redirect()->back()->withSuccess('КПП успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function show(Transmission $transmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Transmission $transmission)
    {
        return view('admin.transmission.edit',['transmissions'=>$transmission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function update(TransmissionRequest $request, Transmission $transmission)
    {
        $transmission->name = $request->name;
        $transmission->save();

        return redirect()->back()->withSuccess('КПП успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transmission $transmission)
    {
        $transmission->delete();
        return redirect()->back()->withSuccess('КПП удален!');
    }
}
