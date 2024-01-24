<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'CNE',
        'groupTp',
        'is_Delegue',
        'idUtilisateur',
        'id_Filiere',
        'id_Classe'
    ];
}
