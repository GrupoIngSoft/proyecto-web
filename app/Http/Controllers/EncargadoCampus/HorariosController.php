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
use Illuminate\Support\Facades\Session;

class HorariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$horarios = Horario::paginate();
		return view('ecampus.horarios.index', compact('horarios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$sala = Sala::lists('nombre','id');
		$periodo = Periodo::lists('bloque','id');
		$curso = Curso::lists('semestre','id');
		$asignatura = Asignatura::lists('nombre','id');
		return view('ecampus.horarios.create')
				->with('sala',$sala)
				->with('periodo',$periodo)
				->with('curso',$curso)
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

		return redirect()->route('ecampus.horarios.index');
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
		$sala = Sala::lists('nombre','id');
		$periodo= Periodo::lists('bloque','id');
		$curso = Curso::lists('semestre','id');
		$asignatura = Asignatura::lists('nombre','id');
		$horarios = Horario::findOrFail($id);
		return view('ecampus.horarios.edit', compact('horarios'))
				->with('sala',$sala)
				->with('periodo',$periodo)
				->with('curso',$curso)
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
		return redirect()->route('ecampus.horarios.index');
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
		return redirect()->route('ecampus.horarios.index');
	}

}
