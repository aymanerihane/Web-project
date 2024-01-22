<?php

namespace App\Http\Controllers;

use App\Models\Annonces as ModelsAnnonces;
use Illuminate\Http\Request;

class annonces extends Controller
{
    public function index(){
        $annonces = ModelsAnnonces::all();
        return response()->json(['annonces' => $annonces]);
    }
    public function add(){
        ModelsAnnonces::create([
            'contenu'=>$_POST['disc'],
            'is_role'=>1,
        ]);
       return redirect('/chefDep');
    }
}
