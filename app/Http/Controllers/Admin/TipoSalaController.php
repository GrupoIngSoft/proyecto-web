<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TipoSala;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class TipoSalaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tiposala = TipoSala::paginate();
		return view('admin.tiposala.index', compact('tiposala'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.tiposala.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tiposala = TipoSala::create(Request::all());
		$tiposala->save();

		return redirect()->route('admin.tiposala.index');
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
		$tiposala = TipoSala::findOrFail($id);
		return view('admin.tiposala.edit', compact('tiposala'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tiposala = TipoSala::findOrFail($id);
		$tiposala->fill(Request::all());	
		$tiposala->save();
		return redirect()->route('admin.tiposala.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tiposala = TipoSala::findOrFail($id);
		$tiposala->delete();
		$message=$tiposala->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.tiposala.index');
	}

}
