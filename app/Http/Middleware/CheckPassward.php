<?php

namespace App\Http\Middleware;

use Closure;

class CheckPassward
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $confirmedAt = strtotime('now') - $request->session()->get('auth.password_confirmed_at', 0);
        if($confirmedAt > config('auth.password_timeout', 10800)){
            return redirect()->intended(route("conf.password.form"));
        }
        return $next($request);
    }
}
