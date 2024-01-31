<?php

namespace App\Http\Controllers;
use App\Models\Modules as ModelsModules;

use Illuminate\Http\Request;

class modules extends Controller
{
    public function select($id)
    {
        $modules =ModelsModules::where('id_filiere','=',$id)->get();
        return $modules;
}
public function getmodule($id)
    {
        $module =ModelsModules::where('id_module','=',$id)->get()->first();
        return $module;
    }
    public function create()
    {
    ModelsModules::create([
        'nom' => $_POST['nomFiliere'],
        'MatriculeProf' => $_POST['respo'],
        'id_filiere' => $_POST['fil'],
    ]);
    return redirect('/auth/home');
    }
    public function delete($id){
        ModelsModules::where('id_module', $id)->delete();
    }
}
