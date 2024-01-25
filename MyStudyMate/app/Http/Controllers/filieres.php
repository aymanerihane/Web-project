<?php

namespace App\Http\Controllers;
use App\Models\Filieres as ModelsFilieres;
use Illuminate\Http\Request;

class filieres extends Controller
{
    public function showFilieres()
    {
    $filieres =ModelsFilieres::all();

        return $filieres;
    }
}
