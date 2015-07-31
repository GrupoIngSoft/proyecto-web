<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TipoSala;
use App\Models\Campus;
use App\Models\Sala;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class SalaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sala = Sala::paginate();
		return view('admin.sala.index', compact('sala'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$campus = Campus::lists('nombre','id');
		$tiposala = TipoSala::lists('nombre','id');
		return view('admin.sala.create')
				->with('campus',$campus)
				->with('tiposala',$tiposala);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$sala = Sala::create(Request::all());
		$sala->save();

		return redirect()->route('admin.sala.index');
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
		$tiposala = TipoSala::lists('nombre','id');
		$sala = Sala::findOrFail($id);
		return view('admin.sala.edit', compact('sala'))
				->with('campus',$campus)
				->with('tiposala',$tiposala);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sala = Sala::findOrFail($id);
		$sala->fill(Request::all());	
		$sala->save();
		return redirect()->route('admin.sala.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$sala = Sala::findOrFail($id);
		$sala->delete();
		$message=$sala->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.sala.index');
	}

}
