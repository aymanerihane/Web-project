<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check()){
            if(auth()->user()->is_role == 1) {
            return $next($request);
             } elseif (auth()->user()->is_role == 2){
            return redirect()->route('chefDep.home');
                }elseif (auth()->user()->is_role == 3){
                return redirect()->route('respFil.home');
                }
                elseif (auth()->user()->is_role == 4){
                    return redirect()->route('prof.home');
                    }elseif (auth()->user()->is_role == 5){
                        return redirect()->route('etudiant.home');
                        }
                    else{
                        return redirect()->route('landing.home');
                    }
        }
    }
}
