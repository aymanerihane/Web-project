<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filieres extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_filiere',
        'nom',
        'contenuFiliere',
        'id_RespoFiliere',
        'id_departement'
    ];
}
