<?php

namespace App\Http\Controllers;

use App\Models\Demande as ModelsDemande;
use App\Models\etudiant;
use Illuminate\Http\Request;

class Demande extends Controller
{
    public function add(){
        $etud = etudiant::where('id_utilisiteur', auth()->user()->id)->first();

        if (!$etud) {
            // Handle the case where no student is found for the authenticated user
            // You might want to redirect or display an error message
            return redirect('/etudiant/home')->with('error', 'No student found for the authenticated user.');
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

        return redirect('/etudiant/home');
    }
    public function find($id){
        $demandes = ModelsDemande::where('MatriculeProfr', $id);
        return $demandes;
    }
}
