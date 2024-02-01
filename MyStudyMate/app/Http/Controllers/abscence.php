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
    public function showAbscencenot(){
        $etud = etudiant::where('id_utilisateur', auth()->user()->id)->first();
        $cne = $etud->CNE;
        $absence = ModelAbscence::where('CNE',$cne)->where('justification','')->get();
        return $absence;
    }
    public function create(){
        foreach($_POST['cne'] as $cne){
        ModelAbscence::create([
            'CNE'=> $cne,
            'justification'=> '',
    ]);
        }
        return redirect('/prof/home');
    }
    public function justify($id){
        ModelAbscence::where('id_abscence', $id)->update([
            'justification' => $_POST['discDem'],
        ]);
        return redirect('/etudiant/home');
        }
}
