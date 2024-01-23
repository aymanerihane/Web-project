<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abscence extends Model
{
    use HasFactory;
    protected $fillable = [
    'id_abscence',
    'justification',
    'date',
    'filepath',
    'CNE'
    ];
}
