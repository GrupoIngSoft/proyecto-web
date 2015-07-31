<?php namespace App\Http\Controllers\EncargadoCampus;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Asignatura;
use App\Models\Departamento;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;


class AsignaturasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$asignaturas = Asignatura::paginate();
		return view('ecampus.asignaturas.index', compact('asignaturas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('ecampus.asignaturas.create')
				->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$asignaturas = Asignatura::create(Request::all());
		$asignaturas->save();

		return redirect()->route('ecampus.asignaturas.index');
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
		$departamento = Departamento::lists('nombre','id');
		$asignaturas = Asignatura::findOrFail($id);
		return view('ecampus.asignaturas.edit', compact('asignaturas'))
				->with('departamento',$departamento);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$asignaturas = Asignatura::findOrFail($id);
		$asignaturas->fill(Request::all());	
		$asignaturas->save();
		return redirect()->route('ecampus.asignaturas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$asignaturas = Asignatura::findOrFail($id);
		$asignaturas->delete();
		$message=$asignaturas->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('ecampus.asignaturas.index');
	}

}
