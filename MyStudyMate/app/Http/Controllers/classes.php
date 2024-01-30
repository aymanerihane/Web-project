<?php

namespace App\Http\Controllers;
use App\Models\Classe as ModelsClasses;
use App\Models\etudiant ;
use Illuminate\Http\Request;

class classes extends Controller
{
    public function showClasses()
    {
    $classes =ModelsClasses::all();

        return $classes;
    }
    public function showclasfil($id)
    {
    $classes =ModelsClasses::where('id_filiere',$id)->get();

        return $classes;
    }
    public function nbrgrp($id)
    {
    $classes =ModelsClasses::where('id_filiere',$id)->get();

        return $classes;
    }
    public function getclasse($id)
    {
    $classes =ModelsClasses::where('id_classe',$id)->first();

        return $classes;
    }
    public function checksalle($nom, $id)
{
    $nb = etudiant::where('id_classe', $id)->where('groupTp', $nom)->count();

    return $nb < 4;
}
public function afctclasse()
    {
    ModelsClasses::create([
        'nom' => $_POST['nomClasse'],
        'nbrEtudiants' => $_POST['nbrEtud'],
        'id_Filiere' => $_POST['fil'],
    ]);
}
public function delete($id){
    ModelsClasses::where('id_classe', $id)->delete();
}
}
