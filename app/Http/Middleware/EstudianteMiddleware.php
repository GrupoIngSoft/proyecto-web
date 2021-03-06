
<?php namespace App\Http\Middleware;
use Closure;
use Auth;
class EncargadoMiddleware {
public function handle($request, Closure $next)
  {
  	$user=Auth::user();
  	if(is_null($user->roles()->whereNombre('ESTUDIANTE')->first()))
      return redirect()->route('auth.login');
    return $next($request);
  }
}