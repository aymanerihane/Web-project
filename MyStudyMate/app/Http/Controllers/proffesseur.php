<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Http\Request;

class proffesseur extends Controller
{
    public function showMyProf(){
        $etud = etudiant::where('id_utilisateur',auth()->user()->id)->first();
        // $profs = ModelProffesseur::where()
    }
}
