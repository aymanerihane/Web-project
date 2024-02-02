<?php

namespace App\Http\Controllers;
use App\Models\Filieres as ModelsFilieres;
use App\Models\Professeur;
use Illuminate\Http\Request;

class filieres extends Controller
{
    public function showFilieres()
    {
    $filieres =ModelsFilieres::all();

        return $filieres;
    }
    public function findfil($id)
    {
    $filiere =ModelsFilieres::where('id_filiere',$id)->first();

        return $filiere;
    }
    public function findfilfor($id)
    {
    $filiere =ModelsFilieres::where('id_formation',$id)->get();
        return $filiere;
    }
    public function findfildep($id)
    {
    $filiere =ModelsFilieres::where('id_departement',$id)->get();
        return $filiere;
    }
    public function create()
    {
    ModelsFilieres::create([
        'nom' => $_POST['nomFiliere'],
        'contenuFiliere' => $_POST['Contenu'],
        'id_RespoFiliere' => $_POST['respo'],
        'id_departement' => $_POST['departement'],
        'id_formation' => $_POST['fromation'],
    ]);
    Professeur::where('MatriculeProf',$_POST['respo'])->update(['is_RespoFiliere'=> 1]);
    return redirect('/auth/home');
    }
    public function delete($id){
        $prof = ModelsFilieres::where('id_filiere', $id)->pluck('id_RespoFiliere')->first();
        Professeur::where('MatriculeProf',$prof)->update(['is_RespoFiliere'=> 0]);
        ModelsFilieres::where('id_filiere', $id)->delete();

    }
}
