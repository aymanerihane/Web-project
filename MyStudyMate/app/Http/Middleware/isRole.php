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
            elseif (auth()->user()->is_role == 2 && $routename!='prof.home' && app('App\Http\Controllers\addEtudiant')->findprofe(auth()->user()->id)->is_RespoFiliere==0 && app('App\Http\Controllers\addEtudiant')->findprofe(auth()->user()->id)->is_RespoDepart==0){
                if($_SERVER['PHP_SELF'] == 'prof/home' && ($_SERVER["REQUEST_METHOD"] == 'POST' )){
                    return 1;
                }
                else
                return redirect()->route('prof.home');
            }
             elseif (auth()->user()->is_role == 2 && app('App\Http\Controllers\addEtudiant')->findprofe(auth()->user()->id)->is_RespoDepart==1){
                if($routename!='chefDep.choixMode' && $routename!='prof.home' && $routename!='chefDep')
                    return redirect()->route('chefDep');
                elseif($routename=='prof.home' && $routename=='chefDep')
                 return redirect()->route('chefDep.choixMode');
            }
            elseif (auth()->user()->is_role == 2 && app('App\Http\Controllers\addEtudiant')->findprofe(auth()->user()->id)->is_RespoFiliere==1){
                if($_SERVER['PHP_SELF']=='/respFil' && $_SERVER["REQUEST_METHOD"]=='POST'){
                }
                elseif($routename!=='respFil.choixMod' && $routename!='prof.home' && $routename!='respFil')
                    return redirect()->route('respFil.choixMod');
                elseif($routename=='prof.home' && $routename=='respFil')
                return redirect()->route('respFil.choixMod');
            }
            elseif (auth()->user()->is_role == 3 && $routename!='etudiant.home'){
                 return redirect()->route('etudiant.home');
            }
            return $next($request);
        }
    }

}
