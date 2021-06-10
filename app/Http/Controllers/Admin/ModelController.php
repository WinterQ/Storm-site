<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModelCarRequest;
use App\Models\Brand;
use App\Models\Engine;
use App\Models\ModelCar;
use Illuminate\Support\Facades\Storage;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.model.index',['models'=>ModelCar::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $models = ModelCar::all();
        $brands = Brand::all();
        $engines = Engine::all();
        return view('admin.model.create',['models'=>$models,'brands'=>$brands,'engines'=>$engines]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModelCarRequest $request)
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
        ModelCar::create([
            'brand_id'=>$request->input('brand_id'),
            'engine_id'=>$request->input('engine_id'),
            'name'=>$request->input('name'),
            'photo'=>$fileNameNew,
        ]);
        return redirect()->back()->withSuccess('Модель успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelCar  $model
     * @return \Illuminate\Http\Response
     */
    public function show(ModelCar $model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelCar  $model
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(ModelCar $model)
    {
        $brands = Brand::all();
        $engines = Engine::all();
        return view('admin.model.edit',['models'=>$model,'brands'=>$brands,'engines'=>$engines]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelCar  $model
     * @return \Illuminate\Http\Response
     */
    public function update(ModelCarRequest $request, ModelCar $model)
    {
        // Определим новое имя файла
        $oldImage = $model->photoCountries;
        if($request->file('photo') != null) {
            $fullFileName=$request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->getClientOriginalExtension();

            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $fileNameNew = $fileName . '_' . time() . '.' . $extension;

            //Создадим новый альбом
            if($model->update([
                'brand_id'=>$request->input('brand_id'),
                'engine_id'=>$request->input('engine_id'),
                'name'=>$request->input('name'),
                'photo'=>$fileNameNew
            ])) {
                Storage::delete('public/img' . $oldImage);
                //Загрузим файл на сервер
                $request->file('photo')->storeAs('public/img', $fileNameNew);
            };
        }else {
            $model->update(['model' => $request->input('model')]);
        }
        //Вернемся на страницу с альбомами
        return redirect()->back()->withSuccess('Модель успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelCar  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelCar $model)
    {
        $model->delete();
        return redirect()->back()->withSuccess('Модель была успешно удалена!');
    }
}
