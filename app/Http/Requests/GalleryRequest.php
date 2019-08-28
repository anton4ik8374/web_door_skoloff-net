<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
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
            'file'=>'required|image',
        ];
    }
    //перевод на нужный язык
    public function messages()
    {
        //массив содержи перевод ошибок .КЛЮЧЬ УКАЗЫВАЕТ КАКОЕ ПОЛЕ И ПРАВИЛО
        return [
            'file.required'=>'Обязательно для заполнения!',
            'file.image'=>'Ошибка:Расширение файла должно быть jpeg,jpg,png,gif.',
        ];
    }
}
