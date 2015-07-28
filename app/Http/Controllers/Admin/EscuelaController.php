<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Escuela;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;


class EscuelaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$escuela = Escuela::paginate();
		return view('admin.escuela.index', compact('escuela'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('admin.escuela.create')
				->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$escuela = Escuela::create(Request::all());
		$escuela->save();

		return redirect()->route('admin.escuela.index');
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
		$escuela = Escuela::findOrFail($id);
		return view('admin.escuela.edit', compact('escuela'))
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
		$escuela = Escuela::findOrFail($id);
		$escuela->fill(Request::all());	
		$escuela->save();
		return redirect()->route('admin.escuela.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$escuela = Escuela::findOrFail($id);
		$escuela->delete();
		$message=$escuela->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.escuela.index');
	}

}
