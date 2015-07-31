<?php namespace App\Http\Controllers\EncargadoCampus;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TipoSala;
use App\Models\Campus;
use App\Models\Sala;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class SalasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$salas = Sala::paginate();
		return view('ecampus.salas.index', compact('salas'));
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
		return view('ecampus.salas.create')
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
		$salas = Sala::create(Request::all());
		$salas->save();

		return redirect()->route('ecampus.salas.index');
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
		$salas = Sala::findOrFail($id);
		return view('ecampus.salas.edit', compact('salas'))
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
		$salas = Sala::findOrFail($id);
		$salas->fill(Request::all());	
		$salas->save();
		return redirect()->route('ecampus.salas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$salas = Sala::findOrFail($id);
		$salas->delete();
		$message=$sala->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('ecampus.salas.index');
	}

}
