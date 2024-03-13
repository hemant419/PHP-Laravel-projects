<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                //return redirect(RouteServiceProvider::HOME);
                if($guard=="admin"){
                    return redirect("admin/home");
                }else if($guard=="reporter"){
                    return redirect()->route("reporter.home");
                }
                else{
                    return redirect("/");
                }
            }
        }

        return $next($request);
    }
    protected function redirectTo($request)
    {
        if($request->exceptsJson()){
            if(Route::is('admin.*')){
                return route("admin.login");
            }else if(Route::is('reporter.*')){
                return route("reporter.login");
            }
            return route("login");
        }
    }
}
