<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Asignatura;
use App\Models\Docente;
use App\Models\Curso;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class CursoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$curso = Curso::paginate();
		return view('curso.index', compact('curso'));
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
		return view('curso.create')
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
		$curso = Curso::create(Request::all());
		$curso->save();

		return redirect()->route('curso.index');
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
		$curso = Curso::findOrFail($id);
		return view('curso.edit', compact('curso'))
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
		$curso = Curso::findOrFail($id);
		$curso->fill(Request::all());	
		$curso->save();
		return redirect()->route('curso.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$curso = Curso::findOrFail($id);
		$curso->delete();
		$message=$curso->asignatura->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('curso.index');
	}

}
