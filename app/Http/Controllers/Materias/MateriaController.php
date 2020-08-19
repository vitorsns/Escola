<?php

namespace App\Http\Controllers\Materias;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materias\Materia;

class MateriaController extends Controller
{
   
	public function create(Request $request){ //Quando criar formulario vai receber aqui!
		
		$materia = Materia::create([
			'nome' => $request->nome
		]);
		return $materia;
	}


public function get(){ //Quando criar formulario vai receber aqui!
		
		$materia = Materia::all();
		return $materia;
	}


public function edit(Request $request, $id){ //Quando criar formulario vai receber aqui!
		
		$materia = Materia::find($id);
		$materia->update([
			'nome' => $request->nome
		]);

		return $materia;
	}



public function delete($id){ //Quando criar formulario vai receber aqui!
		
		$materia = Materia::find($id);
		$materia->delete();

		return [
		'mensage'=>'materia removida com sucesso!' 
		];



	}




}


