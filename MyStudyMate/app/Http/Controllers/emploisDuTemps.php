<?php
namespace App\Http\Controllers;
use App\Models\EmploisDuTemps as ModelsEmploisDuTemps;

use Illuminate\Http\Request;

class emploisDuTemps extends Controller
{
    public function addEmploi(){
        ModelsEmploisDuTemps::create([
            'jour'=>$_POST['jour'],
            'creneau_horaire'=>$_POST['heure'],
            'activite'=>$_POST['act'],
            'id_module'=>$_POST['filiere'],
            'id_filiere'=>$_POST['module'],
            'id_local'=>$_POST['local'],
        ]);
        return redirect('/auth/home');
    }
    public function showEmploi()
    {
        $emplois =ModelsEmploisDuTemps::all();
    return $emplois;
}
    public function select($id)
    {
        $emplois =ModelsEmploisDuTemps::where('id_filiere','=',$id)->get();
        return $emplois;
}
}
