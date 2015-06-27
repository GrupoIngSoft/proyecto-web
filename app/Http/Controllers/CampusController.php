<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Campus;
//use Illuminate\Http\Request;
use Request;

class CampusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{
		$campus = Campus::all(); // Cambiar esto, si la db es muy grande queda la escoba
		return view('campus.index')
			->with('campus', $campus);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('campus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Request::only(['nombre', 'direccion', 'latitud', 'longitud', 'descripcion', 'rut_encargado']);
		$campus = Campus::create($data);
		return dd($campus);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$campus = Campus::find($id);
		if($campus)
			return view('campus.show')->with('campus', $campus);
		else
			abort(404);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$campus = Campus::find($id);
		if($campus)
			return view('campus.edit')->with('campus', $campus);
		else
			abort(404);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$campus = Campus::find($id);
		$data = Request::only(['nombre', 'direccion', 'latitud', 'longitud', 'descripcion', 'rut_encargado']);
		$campus->fill($data); // Recordar validar antes
		$campus->save();
		return redirect()->route('campus.show', array($campus->id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$campus = Campus::find($id);
		$campus->delete();
		return redirect()->route('campus.index');
	}

}
