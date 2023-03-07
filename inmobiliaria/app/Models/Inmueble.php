<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'descripcion',
        'direccion',
        'poblacion',
        'reserva',
        'precio',
        'metrosCuadrados',
        'imagen',
    ];
}
