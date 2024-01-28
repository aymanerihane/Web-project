<?php

namespace App\Http\Controllers;
use App\Models\Formation as ModelsFilieres;
use Illuminate\Http\Request;

class formation extends Controller
{
    public function showFormation()
    {
    $formation =ModelsFilieres::all();

        return $formation;
    }
}
