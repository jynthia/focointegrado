<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PaginasController@index');

Route::get('/contato', 'PaginasController@contato');

Route::get('/programas', 'PaginasController@programas');

Route::get('/login', 'PaginasController@getLogin');

Route::get('/education', 'PaginasController@education');

Route::get('/prof/', 'PaginasProfessorController@index');

Route::get('prof/perfil', 'PaginasProfessorController@getPerfil');

Route::get('/prof/atratores', 'PaginasProfessorController@getAtratores');

Route::get('/prof/bioimpedancia', 'PaginasProfessorController@getBioimpedancia');

Route::get('/prof/exercicios', 'PaginasProfessorController@getExercicios');

Route::get('/prof/fichas', 'PaginasProfessorController@getFichas');

Route::get('/prof/fichas_grupo', 'PaginasProfessorController@getFichasGrupo');

Route::get('/prof/diarios', 'PaginasProfessorController@getDiarios');

Route::get('/prof/diarios/{id}', 'PaginasProfessorController@getDiariosAluno');

Route::get('/prof/planejamento', 'PaginasProfessorController@getPlanejamento');

Route::resource('prof/aluno', 'AlunoController');

Route::resource('users', 'UserController');

Route::post('avatar', 'UserController@update_avatar');

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

