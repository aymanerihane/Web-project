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
}