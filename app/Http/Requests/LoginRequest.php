<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|string',
            'password' => 'required|string',
        ];
    }
    public function attributes()
    {
        return [
            'login'=>'Логин',
            'password'=>'Пароль',
        ];
    }
    public function messages()
    {
        return [
            'unique' => 'Такой субъект уже существует',

        ];
    }
}
