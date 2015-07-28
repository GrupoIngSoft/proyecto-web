<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Periodo;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class PeriodoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$periodo = Periodo::paginate();
		return view('admin.periodo.index', compact('periodo'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.periodo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$periodo = Periodo::create(Request::all());
		$periodo->save();

		return redirect()->route('admin.periodo.index');
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
		$periodo = Periodo::findOrFail($id);
		return view('admin.periodo.edit', compact('periodo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$periodo = Periodo::findOrFail($id);
		$periodo->fill(Request::all());	
		$periodo->save();
		return redirect()->route('admin.periodo.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$periodo = Periodo::findOrFail($id);
		$periodo->delete();
		$message=$periodo->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.periodo.index');
	}

}
