<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = ['Engenharia de Software', 'Direito', 'Medicina', 'Administração'];

        foreach ($cursos as $nome) {
            Curso::create(['nome' => $nome]);
        }
    }
}