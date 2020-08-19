<?php

namespace App\Http\Controllers\Matriculas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matricula\Matricula;

class MatriculaController extends Controller
{
       public function create(Request $request){ //Quando criar formulario vai receber aqui!
		
		$matricula = Matricula::create([  //vai receber o id usuario e o id de matricula
			'aluno_id' => $request->aluno_id,
			'materia_id'=> $request->materia_id, 
			
		]);
		return [
         'id'=>$matricula->id,
         'aluno'=>$matricula->aluno,    //relacionamento em model de um par muitos
         'materia'=>$matricula->materia,
		];
	}


public function get(){ //Quando criar formulario vai receber aqui!
		
		$matriculas = Matricula::all();
		$resource = array();
		foreach ($matriculas as $key => $matricula) {
			array_push($resource,  [
         		'id'=>$matricula->id,
         		'aluno'=>$matricula->aluno,    //relacionamento em model de um par muitos
         		'materia'=>$matricula->materia,
			]);
		}
		return $resource; //listando todas as matriculas
	}


public function edit(Request $request, $id){ //Quando criar formulario vai receber aqui!
		
		$matricula = Matricula::find($id);
		$matricula->update([
			'aluno_id' => $request->aluno_id,
			'materia_id'=> $request->materia_id,
		]);

		return [
         'id'=>$matricula->id,
         'aluno'=>$matricula->aluno,    //relacionamento em model de um par muitos
         'materia'=>$matricula->materia,
		];
	}



public function delete($id){ //Quando criar formulario vai receber aqui!
		
		$matricula = Matricula::find($id);
		$matricula->delete();

		return [
		'mensage'=>'matricula removida com sucesso!' 
		];



	}
}
