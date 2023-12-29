<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterielPedagogique extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_materiel',
        'nom',
        'etat',
        'id_local'
    ];
}
