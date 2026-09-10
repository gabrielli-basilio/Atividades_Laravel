<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Aluno;

class AlunoPolicy
{
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function update(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin' || $user->role === 'professor';
    }

    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }
}