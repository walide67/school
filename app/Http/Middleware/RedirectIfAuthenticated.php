<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard){
            case 'subAdmin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('subAdmin-panel');
                }
            break;
            case 'teacher':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('teacher.panel');
                }
            break;
            case 'admin':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('admin.panel');
                }
            break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect(RouteServiceProvider::HOME);
                }
        }

        return $next($request);
    }
}
