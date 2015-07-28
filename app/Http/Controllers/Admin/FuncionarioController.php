<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use App\Models\Departamento;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Redirector;

class FuncionarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$funcionario = Funcionario::paginate();
		return view('admin.funcionario.index', compact('funcionario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$departamento = Departamento::lists('nombre','id');
		return view('admin.funcionario.create')
				->with('departamento',$departamento);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$funcionario = Funcionario::create(Request::all());
		$funcionario->save();

		return redirect()->route('admin.funcionario.index');
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
		$departamento = Departamento::lists('nombre','id');
		$funcionario = Funcionario::findOrFail($id);
		return view('admin.funcionario.edit', compact('funcionario'))
				->with('departamento',$departamento);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$funcionario = Funcionario::findOrFail($id);
		$funcionario->fill(Request::all());	
		$funcionario->save();
		return redirect()->route('admin.funcionario.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$funcionario = Funcionario::findOrFail($id);
		$funcionario->delete();
		$message=$funcionario->nombre . ' fue eliminado del registro';
		Session::flash('message', $message);
		return redirect()->route('admin.funcionario.index');
	}

}
