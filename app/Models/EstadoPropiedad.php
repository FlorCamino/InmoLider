<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPropiedad extends Model
{
    use HasFactory;

    protected $fillable = [
        'idEstadoPropiedad', 'name', 'descripcion'
    ];
}
