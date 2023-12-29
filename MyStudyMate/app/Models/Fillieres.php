<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fillieres extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_filiere',
        'nom',
        'id_responsable',
        'id_departement'
    ];
}
