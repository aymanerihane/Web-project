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
            'titre'=>$_POST['title'],
            'resume'=>$_POST['resume'],
            'Description'=>$_POST['disc'],
            'id_Utilisateur'=>auth()->user()->id,
        ]);
       return redirect('/chefDep');
    }
    public function edit($id){
        $annonce = ModelsAnnonces::where('id_annonce', $id)->first();
        return response()->json(['annonce' => $annonce]);
        return url('/chefDep');
    }
    public function delete($id){
        ModelsAnnonces::where('id_annonce', $id)->delete();
    }
    public function update(Request $request, $id)
    {
        $professeur = ModelsAnnonces::where('id_annonce', $id)->first();
        $professeur->update($request->all());
        return redirect('/chefDep');
    }
}
