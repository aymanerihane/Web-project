<?php

namespace App\Http\Controllers;

use App\Models\Locals as ModelsLocals;
use Illuminate\Http\Request;

class Locals extends Controller
{
    public function showlocals()
    {
        $salles = ModelsLocals::all();

        return $salles;
    }
    public function getlocal($id)
    {
        $local =ModelsLocals::where('id_local','=',$id)->get()->first();
        return $local;
}
    public function getlocaldep($id)
    {
        $locals =ModelsLocals::where('id_departement','=',$id)->get();
        return $locals;
}
    public function afctsalle()
    {
  $local = ModelsLocals::where('nom', '=', $_POST['nom'])->first();
 if($local == null){
    ModelsLocals::create([
        'nom' => $_POST['nom'],
        'type' => $_POST['type'],
        'id_departement' => $_POST['dep'],
    ]);
}
}
public function checklocal($nom)
{
    $local = ModelsLocals::where('nom', '=', $nom)->first();

    return $local == null;
}
public function delete($nom){
    ModelsLocals::where('nom', $nom)->delete();
}
}
