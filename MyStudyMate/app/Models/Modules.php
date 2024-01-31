<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_module',
        'nom',
        'MatriculeProf',
        'id_filiere'
    ];
}
