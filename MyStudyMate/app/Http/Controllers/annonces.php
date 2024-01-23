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
    public function edit($id){
        $annonce = ModelsAnnonces::where('id_annonce', $id)->first();
        return response()->json(['annonce' => $annonce]);
    }
    public function update(Request $request, $id)
    {
        $professeur = ModelsAnnonces::find($id);
        $professeur->update($request->all());

        // return response()->json(['message' => 'Professeur updated successfully']);
    }
}
