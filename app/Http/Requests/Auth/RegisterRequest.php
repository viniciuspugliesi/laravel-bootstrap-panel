<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'      => 'required',
            'email'     => 'required|unique:advertisers,email,'.$this->input('id').',id',
            'password'  => 'required|confirmed',
            'cpf'       => 'required|unique:advertisers,cpf,'.$this->input('id').',id',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'      => 'O nome é obrigatório.',
            'email.required'     => 'O email é obrigatória.',
            'email.unique'       => 'O email já existe no sistema.',
            'password.required'  => 'A senha é obrigatória.',
            'password.confirmed' => 'A senha é obrigatória.',
            'cpf.required'       => 'O CPF é obrigatório.',
            'cpf.unique'         => 'O CPF já existe no sistema.',
        ];
    }
}
