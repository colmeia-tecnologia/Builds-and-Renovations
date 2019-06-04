<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class EbookRequest extends FormRequest
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
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'landing_page_id' => 'required|numeric|exists:landing_pages,id',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        /*return [
            'title.required' => 'O campo "Título" é obrigatório',

            'image.required' => 'O campo "Imagem" é obrigatório',

            'description.required' => 'O campo "Descrição" é obrigatório',

            'landing_page_id.required' => 'O campo "Landing Page" é obrigatório',
            'landing_page_id.numeric' => 'O campo "Landing Page" deve ser numérico',
            'landing_page_id.exists' => '"Landing Page" não encontrada',
        ];*/
    }
}
