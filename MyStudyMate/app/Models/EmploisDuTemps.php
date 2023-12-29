<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploisDuTemps extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_emploi',
        'id_local',
        'jour',
        'creneau_horaire',
        'activite',
        'id_module'
    ];
}
