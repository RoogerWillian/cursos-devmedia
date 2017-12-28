<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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


    public function messages()
    {
        return [
            "nome.required" => "Por favor, preencha um nome",
            "nome.max" => "Nome deve ter até 255 caracteres",
            "email.required" => "Por favor, preecha o e-mail",
            "email.email" => "Informe um e-mail válido",
            "email.max" => "E-mail deve ter até 100 caracteres",
            "endereco.required" => "Por favor, preencha um endereço"
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome" => "required|max:255",
            "email" => "required|email|max:100",
            "endereco" => "required"
        ];
    }
}
