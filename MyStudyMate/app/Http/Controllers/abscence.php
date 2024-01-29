<?php

namespace App\Http\Controllers;

use App\Models\Abscence as ModelAbscence;
use App\Models\etudiant;
use Illuminate\Http\Request;

class abscence extends Controller
{
    public function showAbscence(){
        $etud = etudiant::where('id_utilisateur', auth()->user()->id)->first();
        $cne = $etud->CNE;
        $absence = ModelAbscence::where('CNE',$cne)->get();
        return $absence;
    }
}
