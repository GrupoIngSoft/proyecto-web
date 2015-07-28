<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Carrera;
use App\Models\Escuela;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class CarreraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$carrera = Carrera::paginate();
		return view('admin.carrera.index', compact('carrera'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$escuela = Escuela::lists('nombre','id');
		return view('admin.carrera.create')
				->with('escuela',$escuela);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$carrera = Carrera::create(Request::all());
		$carrera->save();

		return redirect()->route('admin.carrera.index');
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
		$escuela = Escuela::lists('nombre','id');
		$carrera = Carrera::findOrFail($id);
		return view('admin.carrera.edit', compact('carrera'))
				->with('escuela',$escuela);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$carrera = Carrera::findOrFail($id);
		$carrera->fill(Request::all());	
		$carrera->save();
		return redirect()->route('admin.carrera.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$carrera = Carrera::findOrFail($id);
		$carrera->delete();
		$message=$carrera->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.carrera.index');
	}

}
