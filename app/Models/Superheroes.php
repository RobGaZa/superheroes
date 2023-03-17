<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_de_superheroe',
        'nombre_real',
        'foto',
        'informacion_adicional'
    ];
}
