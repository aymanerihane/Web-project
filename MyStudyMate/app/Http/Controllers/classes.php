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
    public function checksalle($nom,$id)
{
    $etuds = etudiant::where('id_classe', $id)->get();
    $nb=count($etuds->where('groupeTp', $nom));
        if($nb<4){
            return null;
    }
    else
    return null;
}
}
