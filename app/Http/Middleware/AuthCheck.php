<?php

namespace App\Http\Middleware;

use Closure;

class AuthCheck
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
        if(!session()->has("LoggedUser") && ($request->path() !="auth/download/login" && $request->path() !="auth/download/register" )) {
            return redirect("auth/download/login")->with("fail", "Devi essere registrato per accedere alla pagina di download");
        }

        if(session()->has("LoggedUser") && ($request->path() =="auth/download/login" || $request->path() =="auth/download/register" )) {
            return back();
        }
        return $next($request)->header("Cache-Control", "no-cache, no-store, max-age=0, must-revalidate")
                              ->header("Pragma", "no-cache")
                              ->header("Expires", "Sat 01 Jan 1990 00:00:00 GMT");
    }
}
