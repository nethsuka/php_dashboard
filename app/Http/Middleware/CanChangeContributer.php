<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CanChangeContributer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()) {

            //get the authenticated user
            $user = Auth::user();
            if($user->type === "member") {
                return redirect('/contributers')->with("error", "You don't have access to that option");
            }
            
        }

        return $next($request);
    }
}
