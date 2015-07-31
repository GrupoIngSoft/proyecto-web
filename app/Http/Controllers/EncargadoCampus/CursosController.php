<?php namespace App\Http\Controllers\EncargadoCampus;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Asignatura;
use App\Models\Docente;
use App\Models\Curso;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class CursosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cursos = Curso::paginate();
		return view('ecampus.cursos.index', compact('cursos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$asignatura = Asignatura::lists('nombre','id');
		$docente = Docente::lists('nombres','id');
		return view('ecampus.cursos.create')
				->with('asignatura',$asignatura)
				->with('docente',$docente);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$cursos = Curso::create(Request::all());
		$cursos->save();

		return redirect()->route('ecampus.cursos.index');
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
		$asignatura = Asignatura::lists('nombre','id');
		$docente = Docente::lists('nombres','id');
		$cursos = Curso::findOrFail($id);
		return view('ecampus.cursos.edit', compact('cursos'))
				->with('asignatura',$asignatura)
				->with('docente',$docente);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cursos = Curso::findOrFail($id);
		$cursos->fill(Request::all());	
		$cursos->save();
		return redirect()->route('ecampus.cursos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cursos = Curso::findOrFail($id);
		$cursos->delete();
		$message=$cursos->asignatura->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('ecampus.cursos.index');
	}

}
