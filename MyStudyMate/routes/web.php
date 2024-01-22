<?php

use App\Http\Controllers\addEtudiant;
use App\Http\Controllers\annonces;
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
Route::middleware(['isRole'])->group(function () {
Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.home');
Route::get('chefDep/choixMode', [App\Http\Controllers\chefDep\HomeController::class, 'index'])->name('chefDep.choixMode');
Route::get('respFil/home', [App\Http\Controllers\respFill\HomeController::class, 'index'])->name('respFil.home');
Route::get('prof/home', [App\Http\Controllers\Professeur\HomeController::class, 'index'])->name('prof.home');
Route::get('etudiant/home', [App\Http\Controllers\etudiant\HomeController::class, 'index'])->name('etudiant.home');
Route::get('landing/home', [App\Http\Controllers\landing\HomeController::class, 'index'])->name('landing.home');
Route::post('auth/addEtudiant', [addEtudiant::class, 'create'])->name('auth.addEtudiant');
Route::post('choixMode/annonces', [annonces::class, 'add'])->name('annonces');
Route::get('/fetch-annonce', [annonces::class, 'index']);
Route::post('/edit-data/{id}', [annonces::class, 'edit'])->name('editannonce');


// web.php
Route::get('auth/affectationSalle', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.affectationSalle');

});

Route::get('auth/affectationSalle', function () {
    return view('auth.affectationSalle');
});
Route::get('auth/addEtudiant', function () {
    return view('auth.addEtudiant');
});
Route::get('auth/emploisTemps', function () {
    return view('auth.emploisTemps');
});
Route::get('auth/list', function () {
    return view('auth.list');
});
Route::get('auth/formationChoix', function () {
    return view('auth.formationChoix');
});

Route::get('chefDep', function () {
    return view('chefDep.home');
});
Route::get('annonce', function () {
    return view('chefDep.gererAnnonces');
});
Route::get('formAn', function () {
    return view('chefDep.formulaire_annance');
});
Route::get('edit', function () {
    return view('chefDep.editAnnonce');
});
Route::get('prof/repondreDemande', function () {
    return view('prof.repondreDemande');
});

