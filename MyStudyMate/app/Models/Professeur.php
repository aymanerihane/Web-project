<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'MatriculeProf',
        'is_RespoDepart',
        'is_RespoFiliere',
        'id_Utilisateur'
    ];
}
