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

//Route::get('/', 'WelcomeController@index');

//Route::get('/', 'HomeController@index');



Route::controller('auth', 'Auth\AuthController', [
    'getLogin'  => 'auth.login',
    'postLogin' => 'auth.doLogin',
    'getLogout' => 'auth.logout'
]);


Route::get('/',['as'=>'home','middleware'=>['auth','redir'],function(){
	return 'bienvenido';
}]);

//Route::group(['middleware' => ['auth','admin'], function()
//{
	Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){

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
		Route::resource('rolusuario', 'RolUsuarioController');
		Route::resource('inicio', 'InicioController');
	
	});
//}]);

Route::group(['prefix' => 'ecampus', 'namespace' => 'EncargadoCampus'], function(){

	Route::resource('estudiantes', 'EstudianteController');
	Route::resource('asignaturas', 'AsignaturasController');
	Route::resource('salas', 'SalasController');
	Route::resource('cursos', 'CursosController');
	Route::resource('horarios', 'HorariosController');
	Route::resource('docente', 'DocenteController');
	Route::resource('inicio', 'InicioController');
	Route::resource('funcionario', 'FuncionarioController');

});

Route::group(['prefix' => 'docente', 'namespace' => 'Docente'], function(){

	Route::resource('clases', 'ClasesController');

});

/*Route::group(['prefix' => 'estudiante', 'namespace' => 'Estudiante'], function(){



});	