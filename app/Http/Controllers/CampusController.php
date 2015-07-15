<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use App\Models\Campus;
use Illuminate\Support\Facades\Session;

class CampusController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$campus = Campus::paginate();
		return view('campus.index', compact('campus'));
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
		$campus = Campus::create(Request::all());
		$campus->save();

		return redirect()->route('campus.index');
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
		$campus = Campus::findOrFail($id);
		return view('campus.edit', compact('campus'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$campus = Campus::findOrFail($id);
		$campus->fill(Request::all());	
		$campus->save();
		return redirect()->route('campus.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$campus = Campus::findOrFail($id);
		$campus->delete();
		$message=$campus->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('campus.index');
	}

}