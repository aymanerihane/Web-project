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
}
