<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Facultad;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;


class DepartamentoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$departamento = Departamento::paginate();
		return view('departamento.index', compact('departamento'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$facultad = Facultad::lists('nombre','id');
		return view('departamento.create')
				->with('facultad',$facultad);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$departamento = Departamento::create(Request::all());
		$departamento->save();

		return redirect()->route('departamento.index');
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
		$facultad = Facultad::lists('nombre','id');
		$departamento = Departamento::findOrFail($id);
		return view('departamento.edit', compact('departamento'))
				->with('facultad',$facultad);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$departamento = Departamento::findOrFail($id);
		$departamento->fill(Request::all());	
		$departamento->save();
		return redirect()->route('departamento.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$departamento = Departamento::findOrFail($id);
		$departamento->delete();
		$message=$departamento->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('departamento.index');
	}

}
