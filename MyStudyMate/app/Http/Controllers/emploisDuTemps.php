<?php
namespace App\Http\Controllers;
use App\Models\EmploisDuTemps as ModelsEmploisDuTemps;

use Illuminate\Http\Request;

class emploisDuTemps extends Controller
{
    public function showClasses()
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
