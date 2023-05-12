<?php

/** Arquivo responsável por interceptar o Request e fazer as validações da requisição.
 * 
 * Neste caso validando que deve ser obrigatório e do tipo array.
 * 
 * Caso falhe na validação, a requisição nem chega no Controller.
 * 
 * author Cristiano Junior
*/

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{
    /**
     * Todos os campos são obrigatórios e devem ser um array
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'wall-1' => 'required|array',
            'wall-2' => 'required|array',
            'wall-3' => 'required|array',
            'wall-4' => 'required|array'
        ];
    }

    /** Mensagens customizadas para as rules */
    public function messages(): array
    {
        return [
            "required" => "O campo :attribute é obrigatório!",
            "array" => "O campo :attribute deve ser um array!"
        ];
    }
}
