<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Asignatura;
use App\Models\Departamento;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;


class AsignaturaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$asignatura = Asignatura::paginate();
		return view('admin.asignatura.index', compact('asignatura'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('admin.asignatura.create')
				->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$asignatura = Asignatura::create(Request::all());
		$asignatura->save();

		return redirect()->route('admin.asignatura.index');
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
		$asignatura = Asignatura::findOrFail($id);
		return view('admin.asignatura.edit', compact('asignatura'))
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
		$asignatura = Asignatura::findOrFail($id);
		$asignatura->fill(Request::all());	
		$asignatura->save();
		return redirect()->route('admin.asignatura.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$asignatura = Asignatura::findOrFail($id);
		$asignatura->delete();
		$message=$asignatura->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.asignatura.index');
	}

}
