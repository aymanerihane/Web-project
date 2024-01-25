<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonces extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_annonce',
        'titre',
        'resume',
        'Description',

       'MatriculeProf ',
      ' idFiliere',
      'id_departement'

    ];
}
