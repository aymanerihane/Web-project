<?php

namespace App\Http\Controllers;
use App\Models\Departements as ModelsDepartements;
use Illuminate\Http\Request;

class Departements extends Controller
{
    public function showDepartements()
    {
    $departements =ModelsDepartements::all();

        return $departements;
    }
}
