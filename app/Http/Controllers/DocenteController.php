<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Docente;
use App\Models\Departamento;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class DocenteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$docente = Docente::paginate();
		return view('docente.index', compact('docente'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('docente.create')
				->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$docente = Docente::create(Request::all());
		$docente->save();

		return redirect()->route('docente.index');
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
		$docente = Docente::findOrFail($id);
		return view('docente.edit', compact('docente'))
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
		$docente = Docente::findOrFail($id);
		$docente->fill(Request::all());	
		$docente->save();
		return redirect()->route('docente.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$docente = Docente::findOrFail($id);
		$docente->delete();
		$message=$docente->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('docente.index');
	}

}
