<?php

namespace App\Http\Controllers;

use App\Models\Annonces as ModelsAnnonces;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class annonces extends Controller
{
    public function index(){
        // $annonces = ModelsAnnonces::all();
        $annonces = ModelsAnnonces::where('id_Utilisateur', auth()->user()->id)->get();
        return response()->json(['annonces' => $annonces]);
    }
    public function showAnnonces(){
        // $annonces = ModelsAnnonces::all();
        $annonces = ModelsAnnonces::where('id_Utilisateur', auth()->user()->id)->get();
        return $annonces;
    }
    public function showAnnoncesEtud(){
        $annonces = ModelsAnnonces::join('etudiant', 'annonces.id_utilisateur', '=', 'etudiant.idUtilisateur')
                                    ->where('etudiant.idFiliere', '=', 'annonces.id_filiere')
                                    ->where('etudiant.idUtilisateur', '=', auth()->user()->id)
                                    ->get();

        return $annonces;
    }

    public function add(){
        ModelsAnnonces::create([
            'titre'=>$_POST['title'],
            'resume'=>$_POST['resume'],
            'Description'=>$_POST['disc'],
            'id_filiere'=>$_POST['filiere'],
            'id_Utilisateur'=>auth()->user()->id,
        ]);
        if($_SERVER['PHP_SELF']=='/prof/home')

       return redirect('/prof/home');
    else
    return redirect('/chefDep');
    }
    public function addProf(){
        ModelsAnnonces::create([
            'titre'=>$_POST['title'],
            'resume'=>$_POST['resume'],
            'Description'=>$_POST['disc'],
            'id_filiere'=>$_POST['filiere'],
            'id_Utilisateur'=>auth()->user()->id,
        ]);
       return redirect('/prof/home');
    }
    public function edit($id){
        $annonce = ModelsAnnonces::where('id_annonce', $id)->first();
        return response()->json(['annonce' => $annonce]);
    }
    public function delete($id){
        ModelsAnnonces::where('id_annonce', $id)->delete();
    }
    public function update($id)
    {
        $annonce = ModelsAnnonces::where('id_annonce', $id);
        $annonce->update([
            'titre'=>$_POST['title'],
            'resume'=>$_POST['resume'],
            'Description'=>$_POST['disc'],
        ]);
        return redirect('/chefDep');
    }
    public function updateProf($id)
    {
        $annonce = ModelsAnnonces::where('id_annonce', $id);
        $annonce->update([
            'titre'=>$_POST['title'],
            'resume'=>$_POST['resume'],
            'Description'=>$_POST['disc'],
        ]);
        return redirect('/prof/home');
    }

}
