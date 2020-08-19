<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 

Route::namespace('Materias')->prefix('materias')->group(function(){
	Route::post('create', 'MateriaController@create');//vai cadastrar materia
	Route::get('/', 'MateriaController@get');// listar materia
	Route::put('/{id}/edit', 'MateriaController@edit'); //editar materia
    Route::delete('/{id}/delete', 'MateriaController@delete'); 
});


Route::namespace('Alunos')->prefix('alunos')->group(function(){
	Route::post('create', 'AlunoController@create');//vai cadastrar materia
	Route::get('/', 'AlunoController@get');// listar materia
	Route::put('/{id}/edit', 'AlunoController@edit'); //editar materia
    Route::delete('/{id}/delete', 'AlunoController@delete'); 
}); 


Route::namespace('Matriculas')->prefix('matriculas')->group(function(){
	Route::post('create', 'MatriculaController@create');//vai cadastrar materia
	Route::get('/', 'MatriculaController@get');// listar materia
	Route::put('/{id}/edit', 'MatriculaController@edit'); //editar materia
    Route::delete('/{id}/delete', 'MatriculaController@delete'); 
});