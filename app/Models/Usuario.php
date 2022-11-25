<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = false;

    protected $guarded = ['id'];

    protected $fillable = [
        'id', 'fechaCreacion', 'nombre', 'apellido', 'telefono', 'dni',
        'fechaNacimiento', 'direccion', 'idCiudad', 'CP', 'urlFoto', 'idRol',
        'usuario', 'contrasenia'
    ];
    public function Ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'idCiudad');
    }

    public function Rol()
    {
        return $this->belongsTo(Rol::class, 'idRol');
    }
    public function Usuarios()
    {
        return $this->belongsTo(Transaccion::class, 'idUsuario');
    }
}
