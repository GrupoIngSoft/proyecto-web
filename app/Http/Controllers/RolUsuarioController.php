<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\RolUsuario;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class RolUsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rolusuario = RolUsuario::paginate();
		return view('rolusuario.index', compact('rolusuario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$rol = Rol::lists('nombre', 'id');
		return view('rolusuario.create')
				->with('rol',$rol);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rolusuario = RolUsuario::create(Request::all());
		$rolusuario->save();

		return redirect()->route('rolusuario.index');
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
		$rol = Rol::lists('nombre', 'id');
		$rolusuario = RolUsuario::findOrFail($id);
		return view('rolusuario.edit', compact('rolusuario'))
				->with('rol',$rol);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rolusuario = RolUsuario::findOrFail($id);
		$rolusuario->fill(Request::all());	
		$rolusuario->save();
		return redirect()->route('rolusuario.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$rolusuario = RolUsuario::findOrFail($id);
		$rolusuario->delete();
		$message=$rolusuario->rut . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('rolusuario.index');
	}

}
