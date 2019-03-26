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

Route::get('/login', 'PaginasController@getLogin');

Route::get('/prof/', 'PaginasProfessorController@getIndex');

Route::get('/prof/atratores', 'PaginasProfessorController@getAtratores');

Route::get('/prof/bioimpedancia', 'PaginasProfessorController@getBioimpedancia');

Route::get('/prof/exercicios', 'PaginasProfessorController@getExercicios');

Route::get('/prof/fichas', 'PaginasProfessorController@getFichas');

Route::get('/prof/fichas_grupo', 'PaginasProfessorController@getFichasGrupo');

Route::get('/prof/perfil', 'PaginasProfessorController@getPerfil');

Route::resource('prof/aluno', 'AlunoController');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
