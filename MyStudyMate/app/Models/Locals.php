<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locals extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_local',
        'nom',
        'type',
        'id_departement'
    ];
}
