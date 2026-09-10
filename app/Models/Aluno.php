<?php

namespace App\Models;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // protected $fillable = ['nome', 'curso'];
    protected $fillable = ['nome', 'curso_id'];

    
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
