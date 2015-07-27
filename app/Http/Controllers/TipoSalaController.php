<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Tipo_Sala;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class TipoSalaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tiposala = Tipo_Sala::paginate();
		return view('tiposala.index', compact('tiposala'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tiposala.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tiposala = Tipo_Sala::create(Request::all());
		$tiposala->save();

		return redirect()->route('tiposala.index');
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
		$tiposala = Tipo_Sala::findOrFail($id);
		return view('tiposala.edit', compact('tiposala'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tiposala = Tipo_Sala::findOrFail($id);
		$tiposala->fill(Request::all());	
		$tiposala->save();
		return redirect()->route('tiposala.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tiposala = Tipo_Sala::findOrFail($id);
		$tiposala->delete();
		$message=$tiposala->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('tiposala.index');
	}

}
