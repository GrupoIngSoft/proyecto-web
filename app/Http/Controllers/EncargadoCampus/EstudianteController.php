<?php namespace App\Http\Controllers\EncargadoCampus;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class EstudianteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$estudiantes = Estudiante::paginate();
		return view('ecampus.estudiantes.index', compact('estudiantes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$carrera = Carrera::lists('nombre','id');
		return view('ecampus.estudiantes.create')
				->with('carrera',$carrera);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$estudiantes = Estudiante::create(Request::all());
		$estudiantes->save();

		return redirect()->route('ecampus.estudiantes.index');
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
		$carrera = Carrera::lists('nombre','id');
		$estudiantes = Estudiante::findOrFail($id);
		return view('ecampus.estudiantes.edit', compact('estudiantes'))
				->with('carrera',$carrera);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$estudiantes = Estudiante::findOrFail($id);
		$estudiantes->fill(Request::all());	
		$estudiantes->save();
		return redirect()->route('ecampus.estudiantes.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$estudiantes = Estudiante::findOrFail($id);
		$estudiantes->delete();
		$message=$estudiantes->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('ecampus.estudiantes.index');
	}

}
