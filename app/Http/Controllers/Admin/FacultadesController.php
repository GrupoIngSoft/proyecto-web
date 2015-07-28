<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Facultad;
use App\Models\Campus;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class FacultadesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$facultad = Facultad::paginate();
		return view('admin.facultades.index', compact('facultad'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$campus = Campus::lists('nombre','id');
		return view('admin.facultades.create')
				->with('campus',$campus);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$facultad = Facultad::create(Request::all());
		$facultad->save();

		return redirect()->route('admin.facultades.index');
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
		$campus = Campus::lists('nombre','id');
		$facultad = Facultad::findOrFail($id);
		return view('admin.facultades.edit', compact('facultad'))
				->with('campus',$campus);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$facultad = Facultad::findOrFail($id);
		$facultad->fill(Request::all());	
		$facultad->save();
		return redirect()->route('admin.facultades.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$facultad = Facultad::findOrFail($id);
		$facultad->delete();
		$message=$facultad->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.facultades.index');
	}

}
