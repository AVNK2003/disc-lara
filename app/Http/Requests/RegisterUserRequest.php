<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'tel' => 'required|numeric|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ];
    }

    protected function prepareForValidation()
    {
        if(preg_match('%^(8|\+7)[\- ]?\(?\d{3}\)?[\- ]?\d{3}[\- ]?\d{2}[\- ]?\d{2}$%', $this->tel)) {
            $tel = preg_replace("/[^0-9]/", '', $this->tel); //убираем все кроме цифр
            $tel = substr($tel, 1); //убираем первую цифру
        }
        $this->merge([
            'tel' => $tel,
        ]);
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя является обязательным',
            'name.max' => 'Поле Имя не должно превышать :max символов',
            'tel.required' => 'Поле Телефон является обязательным',
            'tel.unique' => 'Пользователь с таким номером телефона уже существует',
            'tel.numeric' => 'Неверно указан номер телефона',
            'email.required' => 'Поле Email является обязательным',
            'email.email' => 'В поле Email должен быть действительный адрес электронной почты',
            'email.max' => 'Поле Email не должно превышать :max символов',
            'email.unique' => 'Пользователь с таким Email уже существует',
            'password.required' => 'Поле Пароль обязательно для заполнения',
            'password.confirmed' => 'Введенные пароли не совпадают',
            'password.min' => 'Пароль должен содержать не менее :min символов',
        ];
    }
}
