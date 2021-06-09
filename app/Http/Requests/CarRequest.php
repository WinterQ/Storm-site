<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'model_car_id'=>'required',
            'bodywork_id'=>'required',
            'color_id'=>'required',
            'transmission_id'=>'required',
            'engine_power'=>'required',
            'count_seats'=>'required',
            'year_release'=>'required',
            'photo'=>'image',
            'status'=>'required',
            'price'=>'required'
        ];
    }
    public function messages():array
    {
        return [
            'engine_power.required' => 'Поле "Мощность двигателя" обязательно для заполнения',
            /*'engine_power.min' => 'Поле "Мощность двигателя" должно быть длиной не менее 3 символов',*/
            'count_seats.required' => 'Поле "Количество" обязательно для заполнения',
           /* 'count_seats.min' => 'Поле "Количество" должно быть длиной не менее 3 символов',*/
            'year_release.required' => 'Поле "Год выпуска" обязательно для заполнения',
            /*'year_release.min' => 'Поле "Год выпуска" должно быть длиной не менее 3 символов',*/
            'photo.file'=>'Необходимо загрузить изображение',
            'status.required' => 'Поле "Статус" обязательно для заполнения',
            /*'status.min' => 'Поле "Статус" должно быть длиной не менее 3 символов',*/
            'price.required' => 'Поле "Цена" обязательно для заполнения',
            /*'price.min' => 'Поле "Цена" должно быть длиной не менее 3 символов',*/
        ];
    }
}
