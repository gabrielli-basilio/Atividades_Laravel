<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;
use App\Models\Curso;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $alunos = [
            ['nome' => 'Ana Silva', 'curso' => 'Engenharia de Software'],
            ['nome' => 'Bruno Costa', 'curso' => 'Direito'],
            ['nome' => 'Carla Souza', 'curso' => 'Medicina'],
            ['nome' => 'Diego Almeida', 'curso' => 'Administração'],
            ['nome' => 'Eduarda Lima', 'curso' => 'Engenharia de Software'],
            ['nome' => 'Felipe Santos', 'curso' => 'Direito'],
            ['nome' => 'Gabrielli Basilio', 'curso' => 'Engenharia de Software'],
            ['nome' => 'Henrique Oliveira', 'curso' => 'Administração'],
            ['nome' => 'Isabela Martins', 'curso' => 'Medicina'],
            ['nome' => 'João Pereira', 'curso' => 'Direito'],
        ];

        foreach ($alunos as $dado) {
            $curso = Curso::where('nome', $dado['curso'])->first();

            Aluno::create([
                'nome' => $dado['nome'],
                'curso' => $dado['curso'],
                'curso_id' => $curso->id,
            ]);
        }
    }
}