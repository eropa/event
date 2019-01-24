<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePage extends FormRequest
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
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'htmlpage' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Пустое значение "Название"',
            'title.required'  => 'Пустое значение "Заголовок"',
            'url.required'  => 'Пустое значение "Адресс URL"',
            'htmlpage.required'  => 'Пустое значение "Текст страницы"',
        ];
    }


}
