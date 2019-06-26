<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class SubserviceRequest extends FormRequest
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
            'service_id' => 'required|integer',
            'name' => 'required|max:100',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    /*public function messages()
    {
        return [
            'service_id.required' => 'O campo "Serviço" é obrigatório',
            'service_id.integer' => 'O campo "Serviço" deve ser um número inteiro',

            'name.required' => 'O campo "Nome" é obrigatório',
            'name.max' => 'O campo "Nome" não deve ser maior do que :max caracteres',
        ];
    }*/
}
