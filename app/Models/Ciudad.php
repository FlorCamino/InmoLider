<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';
    public $timestamps = false;
    protected $fillable = ['nombre'];

    public function Propietarios()
    {
        return $this->hasMany(Propietario::class, 'idCiudad');
    }

    public function Propiedades()
    {
        return $this->hasMany(Propiedad::class, 'idCiudad');
    }

    public function Usuarios()
    {
        return $this->hasMany(Usuario::class, 'idCiudad');
    }
}
