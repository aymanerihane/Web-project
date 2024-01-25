<?php

namespace App\Http\Controllers;

use App\Models\Demande as ModelsDemande;
use App\Models\etudiant;
use App\Models\Professeur;
use Illuminate\Http\Request;

class Demande extends Controller
{
    public function add(){
        $etud = etudiant::where('id_utilisiteur', auth()->user()->id)->first();

        if (!$etud) {
            // Handle the case where no student is found for the authenticated user
            // You might want to redirect or display an error message
            return redirect('/prof/home')->with('error', 'No student found for the authenticated user.');
        }

        $cne = $etud->CNE;

        ModelsDemande::create([
            'objet' => $_POST['object'],
            'TypeDemande' => $_POST['object'], // Assuming 'TypeDemande' should be assigned a different value
            'DescripDemande' => $_POST['discDem'],
            'statutDemande' => "en attente", // Fixed the typo in "en attend"
            'ReponseDemande' => "",
            'CNE' => $cne,
        ]);

        return redirect('/etudianr/home');
    }
    public function find(){
        $idprof=Professeur::where('id_Utilisateur', auth()->user()->id)->first();
        $demandes = ModelsDemande::where('MatriculeProfr', $idprof);
        return $demandes;
    }
    public function findetud($id){
        $idetud=etudiant::where('CNE', $id)->first();
        return $idetud->nom;
    }
}
