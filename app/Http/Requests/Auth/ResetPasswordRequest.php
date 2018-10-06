<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'email'    => 'required|email|exists:users,email',
            'password' => 'required|confirmed',
            'token'    => 'required|exists:tokens,token',
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
            'email.required'     => 'O email é obrigatório.',
            'email.email'        => 'O email é inválido.',
            'email.exists'       => 'O email não existe no sistema.',
            'password.required'  => 'A senha é obrigatória.',
            'password.confirmed' => 'A confirmação da senha é obrigatória.',
            'token.required'     => 'O token é obrigatório.',
            'token.exists'       => 'O token é inválido.',
        ];
    }
}
