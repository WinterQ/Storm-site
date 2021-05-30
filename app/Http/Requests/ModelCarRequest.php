<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelCarRequest extends FormRequest
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
            'brand_id'=>'required',
            'engine_id'=>'required',
            'name'=>'required',
            'photo'=>'image'
        ];
    }
    public function messages()
    {
        return [
            'brand_id.required' => 'Поле "Марка" обязательно для заполнения',
            'engine_id.required' => 'Поле "Тип двигателя" обязательно для заполнения',
            'name.required' => 'Поле "Наименование" обязательно для заполнения',
            'photo.file'=>'Необходимо загрузить изображение'
        ];
    }
}
