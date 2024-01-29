<?php

namespace App\Http\Controllers;
use App\Models\Formation as ModelsFormation;
use Illuminate\Http\Request;

class formation extends Controller
{
    public function showFormation()
    {
    $formation =ModelsFormation::all();

        return $formation;
    }
}
