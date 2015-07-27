<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('campus', 'CampusController');
Route::resource('facultades', 'FacultadesController');
Route::resource('departamento', 'DepartamentoController');
Route::resource('escuela', 'EscuelaController');
Route::resource('asignatura', 'AsignaturaController');
Route::resource('docente', 'DocenteController');
Route::resource('funcionario', 'FuncionarioController');
Route::resource('carrera', 'CarreraController');
Route::resource('estudiante', 'EstudianteController');
Route::resource('curso', 'CursoController');
Route::resource('periodo', 'PeriodoController');
Route::resource('tiposala', 'TipoSalaController');
Route::resource('sala', 'SalaController');
