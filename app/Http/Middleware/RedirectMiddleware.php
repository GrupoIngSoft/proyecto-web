<?php namespace App\Http\Middleware;
use Closure;
use Auth;
class RedireccionMiddleware {
	public function handle($request, Closure $next)
	{
		$user = Auth::user();
        //dd($user->roles()->whereNombre('Administrador')->first());
		if($user->roles()->whereNombre('ADMINISTRADOR')->first()){
			return redirect()->route('admin.inicio.index');
		}
		elseif ($user->roles()->whereNombre('ENCARGADO_CAMPUS')->first()){
            return redirect()->route('ecampus.inicio.index');
        }
        elseif($user->roles()->whereNombre('ESTUDIANTE')->first()){
            //return redirect()->route('estudiante.inicio.index');
        }
        else if($user->roles()->whereNombre('DOCENTE')->first()){
            return redirect()->route('docente.inicio.index');
        }
		return $next($request);
	}
}