<?php namespace App\Http\Controllers\Admin;

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
		$estudiante = Estudiante::paginate();
		return view('admin.estudiante.index', compact('estudiante'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$carrera = Carrera::lists('nombre','id');
		return view('admin.estudiante.create')
				->with('carrera',$carrera);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$estudiante = Estudiante::create(Request::all());
		$estudiante->save();

		return redirect()->route('admin.estudiante.index');
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
		$estudiante = Estudiante::findOrFail($id);
		return view('admin.estudiante.edit', compact('estudiante'))
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
		$estudiante = Estudiante::findOrFail($id);
		$estudiante->fill(Request::all());	
		$estudiante->save();
		return redirect()->route('admin.estudiante.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$estudiante = Estudiante::findOrFail($id);
		$estudiante->delete();
		$message=$estudiante->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.estudiante.index');
	}

}
