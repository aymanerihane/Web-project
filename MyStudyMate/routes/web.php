<?php

use App\Http\Controllers\addEtudiant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.home')->middleware('isRole');
Route::get('chefDep/home', [App\Http\Controllers\chefDep\HomeController::class, 'index'])->name('chefDep.home');
Route::get('respFil/home', [App\Http\Controllers\respFill\HomeController::class, 'index'])->name('respFil.home');
Route::get('prof/home', [App\Http\Controllers\Professeur\HomeController::class, 'index'])->name('prof.home');
Route::get('etudiant/home', [App\Http\Controllers\etudiant\HomeController::class, 'index'])->name('etudiant.home');
Route::get('landing/home', [App\Http\Controllers\landing\HomeController::class, 'index'])->name('landing.home');
Route::post('auth/addEtudiant', [addEtudiant::class, 'create'])->name('auth.addEtudiant');

