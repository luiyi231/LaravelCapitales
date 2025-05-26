<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    use HasFactory;
    protected $table = 'capitales';
    

    // Esto permite asignación masiva en seeder o create()
    protected $fillable = [
        'nombre',
        'pais',
        'poblacion',
        'continente',
        'latitud',
        'longitud',
        'altitud',
        'imagen'
    ];
}

