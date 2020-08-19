<?php

namespace App\Http\Controllers\Alunos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alunos\Aluno;

class AlunoController extends Controller
{
    public function create(Request $request){ //Quando criar formulario vai receber aqui!
		
		$aluno = Aluno::create([
			'nome' => $request->nome,
			'email'=> $request->email, 
			'data_nascimento'=>$request->data_nascimento,
		]);
		return $aluno;
	}


public function get(){ //Quando criar formulario vai receber aqui!
		
		$aluno = Aluno::all();
		return $aluno;
	}


public function edit(Request $request, $id){ //Quando criar formulario vai receber aqui!
		
		$aluno = Aluno::find($id);
		$aluno->update([
			'nome' => $request->nome,
			'email'=> $request->email, 
			'data_nascimento'=>$request->data_nascimento,
		]);

		return $aluno;
	}



public function delete($id){ //Quando criar formulario vai receber aqui!
		
		$aluno = Aluno::find($id);
		$aluno->delete();

		return [
		'mensage'=>'aluno removida com sucesso!' 
		];



	}

}
