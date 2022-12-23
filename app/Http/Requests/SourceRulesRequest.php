<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SourceRulesRequest extends FormRequest
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
            'province_id'=>'required|integer',
            'l1_id'=>'required|integer',
            'l2_id'=>'integer|nullable',
            'name_id'=>'required|integer',
        ];
    }
    public function attributes()
    {
        return [
            'province'=>'Субъект РФ',
            'mun_one'=>'МО 1',
            'mun_two'=>'МО 2',
            'name'=>'Орган власти',
        ];
    }
    public function messages()
    {
        return [
            'unique' => 'Такой субъект уже существует',
            'required'=>':attribute обязательное поле'
        ];
    }
}
