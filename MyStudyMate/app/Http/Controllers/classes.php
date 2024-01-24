<?php

namespace App\Http\Controllers;
use App\Models\Classe as ModelsClasses;
use Illuminate\Http\Request;

class classes extends Controller
{
    public function showClasses()
    {
    $classes =ModelsClasses::all();

        return $classes;
    }
}
