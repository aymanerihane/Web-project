<?php

namespace App\Http\Controllers;

use App\Models\Annonces as ModelsAnnonces;
use Illuminate\Http\Request;

class annonces extends Controller
{
    public function add(){
        ModelsAnnonces::create([
            'id_annonces'=>$_POST[''],
            'contenu'=>$_POST[''],
            'is_role'=>1,
        ]);
       return redirect($_SERVER["PHP_SELF"]);
    }
}
