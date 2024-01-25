<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_demande',
        'objet',
        'TypeDemande',
        'DescripDemande',
        'ReponseDemande',
        'statutDemande',
        'CNE',
        'MatriculeProf',
        'id_departement'
    ];
}
