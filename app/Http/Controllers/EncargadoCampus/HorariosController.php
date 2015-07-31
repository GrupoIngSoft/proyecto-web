<?php namespace App\Http\Controllers\EncargadoCampus;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Periodo;
use App\Models\Sala;
use App\Models\Horario;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class HorariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$horarios = Horario::paginate();
		return view('ecampus.horario.index', compact('horarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$salas = Sala::lists('nombre','id');
		$periodos = Periodo::lists('bloque','id');
		$periodo = Periodo::lists('inicio','id');
		$Periodo = Periodo::lists('fin','id');
		$cursos = Curso::lists('semestre','id');
		$curso = Curso::lists('anio','id');
		$asignaturas = Asignatura::lists('nombre','id');
		$asignatura = Asignatura::lists('codigo','id');
		return view('ecampus.horario.create')
				->with('salas',$salas)
				->with('periodos',$periodos)
				->with('periodo',$periodo)
				->with('Periodo',$Periodo)
				->with('cursos',$cursos)
				->with('curso',$curso)
				->with('asignaturas',$asignaturas)
				->with('asignatura',$asignatura);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$horarios = Horario::create(Request::all());
		$horarios->save();

		return redirect()->route('ecampus.horario.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$salas = Sala::lists('nombre','id');
		$periodos = Periodo::lists('bloque','id');
		$periodo = Periodo::lists('inicio','id');
		$Periodo = Periodo::lists('fin','id');
		$cursos = Curso::lists('semestre','id');
		$curso = Curso::lists('anio','id');
		$asignaturas = Asignatura::lists('nombre','id');
		$asignatura = Asignatura::lists('codigo','id');
		$horarios = Horario::findOrFail($id);
		return view('ecampus.horario.create', compact('horarios'))
				->with('salas',$salas)
				->with('periodos',$periodos)
				->with('periodo',$periodo)
				->with('Periodo',$Periodo)
				->with('cursos',$cursos)
				->with('curso',$curso)
				->with('asignaturas',$asignaturas)
				->with('asignatura',$asignatura);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$horarios = Horario::findOrFail($id);
		$horarios->fill(Request::all());	
		$horarios->save();
		return redirect()->route('ecampus.horario.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$horarios = Horario::findOrFail($id);
		$horarios->delete();
		$message='El horario con fecha'.$horarios->fecha . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('ecampus.horario.index');
	}

}
