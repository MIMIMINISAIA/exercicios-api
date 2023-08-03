<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class exerciciotresRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
                'primeiro_numero'=>'required|numeric',
                'segundo_numero'=>'required|numeric',
                'terceiro_numero'=>'required|numeric',
    
        ];
    
    }


public function failedValidation(Validator $validator){
    throw new HttpResponseException(
        response()->json([
            'success'=> false,
            'error'=> $validator->errors()
        ])
        );
}

public function messages()
{
    return[
        'primeiro_numero.required' => 'preencha o campo primeiro numero',
        'primeiro_numero.numeric' =>'o campo é somente numeros,',
        'segundo_numero.required' => 'preencha o campo segundo numero',
        'segundo_numero.numeric' =>'o campo é somente numeros,',
        'terceiro_numero.required'=> 'preencha o campo primeiro numero',
        'terceiro_numero.numeric'=> 'preencha o campo primeiro numero',

    ];
}
}
 
