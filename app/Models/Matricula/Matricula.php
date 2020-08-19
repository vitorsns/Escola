<?php

namespace App\Models\Matricula;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alunos\Aluno;
use App\Models\Materias\Materia;

class Matricula extends Model
{
    protected $fillable = [ //colunas
        'aluno_id',
        'materia_id',
        
    ];
    public function aluno(){ //relacionamentos  muitos alunos para uma matricula

    	return $this->belongsTo(Aluno::class);
    } 


    public function materia(){

    	return $this->belongsTo(Materia::class);
    }
}
