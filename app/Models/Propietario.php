<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $table = 'propietario';
    public $timestamps = false;
    protected $fillable = ['id', 'nombre', 'apellido', 'dni', 'fechaNacimiento', 'email', 'telefono', 'domicilio', 'CP', 'descripcion', 'fechaDeCarga', 'idCiudad'];

    public function Ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'idCiudad');
    }
}
