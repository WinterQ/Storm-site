<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Actuator;
use App\Models\Bodywork;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\ModelCar;
use App\Models\Transmission;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $models = ModelCar::all();
        $bodyworks = Bodywork::all();
        $colors = Color::all();
        $actuators = Actuator::all();
        $transmissions = Transmission::all();
        return view('admin.car.create',['brands'=>$brands,'models'=>$models,'bodyworks'=>$bodyworks,'colors'=>$colors,'actuators'=>$actuators,'transmissions'=>$transmissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        if($request->file('photo')!=null){
            $fullFileName=$request->file('photo')->getClientOriginalName();
            $extension=$request->file('photo')->getClientOriginalExtension();
            $fileName=pathinfo($fullFileName,PATHINFO_FILENAME);
            $fileNameNew=$fileName . '_' . time() . '.' . $extension;
            Storage::putFileAs('/public/img',$request->file('photo'),$fileNameNew);
        }else{
            $fileNameNew = 'default.jpg';
        }
        Car::create([
            'model_car_id'=>$request->input('model_car_id'),
            'bodywork_id'=>$request->input('bodywork_id'),
            'color_id'=>$request->input('color_id'),
            'actuator_id'=>$request->input('actuator_id'),
            'transmission_id'=>$request->input('transmission_id'),
            'engine_power'=>$request->input('engine_power'),
            'count_seats'=>$request->input('count_seats'),
            'year_release'=>$request->input('year_release'),
            'photo'=>$fileNameNew,
            'status'=>$request->input('status'),
            'price'=>$request->input('price'),
        ]);
        return redirect()->back()->withSuccess('Автомобиль успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $models = ModelCar::all();
        $bodyworks = Bodywork::all();
        $colors = Color::all();
        $actuators = Actuator::all();
        $transmissions = Transmission::all();
        return view('admin.car.edit',['car'=>$car,'brands'=>$brands,'models'=>$models,'bodyworks'=>$bodyworks,'colors'=>$colors,'actuators'=>$actuators,'transmissions'=>$transmissions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update(CarRequest $request, Car $car)
    {
        // Определим новое имя файла

        $fullFileName=$request->file('photo')->getClientOriginalName();
        $extension = $request->file('photo')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . '.' . $extension;

        $oldImage = $car->image;

        //Создадим новый альбом
        if($car->update([
            'model_car_id'=>$request->input('model_car_id'),
            'bodywork_id'=>$request->input('bodywork_id'),
            'color_id'=>$request->input('color_id'),
            'actuator_id'=>$request->input('actuator_id'),
            'transmission_id'=>$request->input('transmission_id'),
            'engine_power'=>$request->input('engine_power'),
            'count_seats'=>$request->input('count_seats'),
            'year_release'=>$request->input('year_release'),
            'photo'=>$fileNameNew,
            'price'=>$request->input('price'),
        ])) {
            Storage::delete('public/img' . $oldImage);
            //Загрузим файл на сервер
            $request->file('photo')->storeAs('public/img', $fileNameNew);
        };
        //Вернемся на страницу с альбомами
        return redirect()->back()->withSuccess('Автомобиль успешно обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->back()->withSuccess('Автомобиль был успешно удален!');
    }
}
