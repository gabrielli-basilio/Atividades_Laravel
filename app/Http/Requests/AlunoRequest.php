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
            'nome' => 'required|min:3',
            'curso_id' => 'required|exists:cursos,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'curso_id.required' => 'Selecione um curso.',
            'curso_id.exists' => 'O curso selecionado não existe.',
        ];
    }
}