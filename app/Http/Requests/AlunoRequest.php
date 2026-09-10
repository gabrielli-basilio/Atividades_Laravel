<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required',
            'curso' => 'required',
        ];
    }

    public function messages(): array {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'curso.required' => 'O campo curso é obrigatório.',
        ];
    }
}