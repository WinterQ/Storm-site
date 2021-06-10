<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brand.index',['brands'=>Brand::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create',['brands'=>Brand::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
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
        Brand::create([
            'name'=>$request->input('name'),
            'photo'=>$fileNameNew,
        ]);
        return redirect()->back()->withSuccess('Марка успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand){ }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        /*$brands = Brand::all();*/
        return view('admin.brand.edit',['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        // Определим новое имя файла
        $oldImage = $car->photoCountries;
        if($request->file('photo') != null) {
        $fullFileName=$request->file('photo')->getClientOriginalName();
        $extension = $request->file('photo')->getClientOriginalExtension();

        $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
        $fileNameNew = $fileName . '_' . time() . '.' . $extension;

        //Создадим новый альбом
        if($brand->update([
            'name'=>$request->input('name'),
            'photo'=>$fileNameNew
        ])) {
            Storage::delete('public/img' . $oldImage);
            //Загрузим файл на сервер
            $request->file('photo')->storeAs('public/img', $fileNameNew);
        };
        }else {
            $car->update(['car' => $request->input('car')]);
        }
        //Вернемся на страницу с альбомами
        return redirect()->back()->withSuccess('Марка успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->back()->withSuccess('Марка была успешно удалена!');
    }
}
