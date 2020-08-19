<?php

namespace App\Models\Alunos;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [ //colunas
        'nome',
        'email',
        'data_nascimento',
    ];
}
