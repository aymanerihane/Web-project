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
            $routename=$request->route()->getName();
            if(auth()->user()->is_role == 1 && $routename!='auth.home') {
                return redirect()->route('auth.home');
            }
            elseif (auth()->user()->is_role == 2 ){
                if($routename!='chefDep.home' && $routename!='prof.home' && $routename!='choixMode')
                    return redirect()->route('chefDep.home');
                elseif($routename=='prof.home' && $routename=='choixMode')
                 return redirect()->route('chefDep.home');

            }elseif (auth()->user()->is_role == 3 && $routename!='respFil.home'){
                return redirect()->route('respFil.home');
            }
            elseif (auth()->user()->is_role == 4 && $routename!='prof.home'){
                return redirect()->route('prof.home');
            }elseif (auth()->user()->is_role == 5 && $routename!='etudiant.home'){
                return redirect()->route('etudiant.home');
            }
            return $next($request);
        }
    }

}
