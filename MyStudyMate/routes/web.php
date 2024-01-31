<?php

use App\Http\Controllers\addEtudiant;
use App\Http\Controllers\emploisDuTemps;
use App\Http\Controllers\annonces;
use App\Http\Controllers\Demande;
use App\Http\Controllers\classes;
use App\Http\Controllers\Locals;
use App\Models\Demande as ModelsDemande;
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
Route::get('respFil/choixMod', [App\Http\Controllers\respFill\HomeController::class, 'index'])->name('respFil.choixMod');
Route::get('prof/home', [App\Http\Controllers\Professeur\HomeController::class, 'index'])->name('prof.home');
Route::get('etudiant/home', [App\Http\Controllers\etudiant\HomeController::class, 'index'])->name('etudiant.home');
Route::get('landing/home', [App\Http\Controllers\landing\HomeController::class, 'index'])->name('landing.home');
Route::post('auth/addEtudiant', [addEtudiant::class, 'create'])->name('auth.addEtudiant');
Route::post('choixMode/annonces', [annonces::class, 'add'])->name('annonces');
Route::post('demandes', [Demande::class, 'add'])->name('demandes');
Route::post('etudiant/isdelegue', [addEtudiant::class, 'isDelegue'])->name('isdelegue');
Route::post('prof/annonces', [annonces::class, 'addProf'])->name('profAnnonces');
Route::post('showAllAnn', [annonces::class, 'showAllAnn'])->name('showAllAnn');
Route::get('/fetch-annonce', [annonces::class, 'index']);
Route::get('/annonce/{id}/edit', [annonces::class, 'edit'])->name('annonce.edit');;
Route::post('annonce/{id}', [annonces::class, 'update'])->name('annonce.update');
Route::post('prof/reponse/{id}', [Demande::class, 'reponse']);
Route::post('prof/annonceProf/{id}', [annonces::class, 'updateProf'])->name('annonce.updateProf');
Route::get('/annonce/{id}', [annonces::class, 'delete'])->name('annonce.delete');
Route::post('/addEmploi', [emploisDuTemps::class, 'addEmploi'])->name('addEmploi');
Route::post('/afctsalle', [Locals::class, 'afctsalle'])->name('afctsalle');
Route::post('/afctclasse', [classes::class, 'afctclasse'])->name('afctclasse');
Route::get('/salle/{id}', [Locals::class, 'delete']);
Route::get('/classe/{id}', [classes::class, 'delete']);
Route::get('/emploi/{id}', [emploisDuTemps::class, 'delete']);
Route::get('etudiant/showAbscence', [emploisDuTemps::class, 'showAbscence'])->name('showAbscence');
// web.php
Route::get('auth/affectationSalle', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.affectationSalle');
});
Route::get('prof/message', function () {
    return view('prof.message');
});
Route::get('auth/formemploi', function () {
    return view('auth.formemploi');
});
Route::get('auth/emploi', function () {
    return view('auth.emploi');
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
Route::get('auth/lissalle', function () {
    return view('auth.lissalle');
});
Route::get('auth/formationChoix', function () {
    return view('auth.formationChoix');
});
    // Route::get('auth/choixSousFil', function () {
    //     return view('auth.choixSousFil');
    // });
Route::get('chefDep', function () {
    return view('chefDep.home');
});
Route::get('chefDep/annonce', function () {
    return view('chefDep.gererAnnonces');
});
Route::get('prof/annonce', function () {
    return view('prof.gererAnnonces');
});
Route::get('formAn', function () {
    return view('chefDep.formulaire_annance');
});
Route::get('prof/formAn', function () {
    return view('prof.formulaire_annance');
});
Route::get('edit', function () {
    return view('chefDep.editAnnonce');
});
Route::get('prof/edit', function () {
    return view('prof.editAnnonce');
});
Route::get('prof/repondreDemande', function () {
    return view('prof.repondreDemande');
});
Route::get('auth/allMembers', function () {
    return view('auth.allMembers');
});
Route::get('auth/etudMember', function () {
    return view('auth.etudMember');
});
Route::get('auth/profMember', function () {
    return view('auth.profMember');
});


Route::get('etudiant/information', function () {
    return view('etudiant.information');
});
Route::get('etudiant/emploisTemps', function () {
    return view('etudiant.emploisTemps');
});
Route::get('etudiant/annonceProf', function () {
    return view('etudiant.annonceProf');
});
Route::get('etudiant/Demandes', function () {
    return view('etudiant.Demandes');
});
Route::get('etudiant/demandeRendezVous', function () {
    return view('etudiant.demandeRendezVous');
});
Route::get('etudiant/demandeLettre', function () {
    return view('etudiant.demandeLettre');
});
Route::get('etudiant/demandesTp', function () {
    return view('etudiant.demandesTp');
});
Route::get('etudiant/justify', function () {
    return view('etudiant.justify');
});
Route::get('etudiant/signalMate', function () {
    return view('etudiant.signalMate');
});
Route::get('etudiant/signalInci', function () {
    return view('etudiant.signalInci');
});
Route::get('auth/IDAI', function () {
    return view('auth.IDAI');
});
Route::get('auth/AD', function () {
    return view('auth.AD');
});
Route::get('respFil/annonceee', function () {
    return view('respFil.annonceee');
});
Route::get('respFil/home', function () {
    return view('respFil.home');
});
Route::get('auth/filiereChoix', function () {
    return view('auth.filiereChoix');
});
Route::get('auth/filierePage', function () {
    return view('auth.filierePage');
});
Route::get('auth/modeetud', function () {
    return view('auth.modeetud');
});
Route::get('auth/classeetud', function () {
    return view('auth.classeetud');
});
Route::get('auth/tpetud', function () {
    return view('auth.tpetud');
});
Route::get('auth/addClasse', function () {
    return view('auth.addClasse');
});
Route::get('auth/listeClasse', function () {
    return view('auth.listeClasse');
});
Route::get('auth/ajouterfiliere', function () {
    return view('auth.ajouterfiliere');
});
Route::get('auth/addModule', function () {
    return view('auth.addModule');
});

