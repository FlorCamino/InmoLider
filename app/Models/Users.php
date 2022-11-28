<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $timestamps = false;

    protected $guarded = ['id'];

    protected $fillable = [
        'id', 'fechaDeCreacion', 'nombre', 'apellido', 'telefono', 'dni',
        'fechaNacimiento', 'direccion', 'idCiudad', 'CP', 'urlFoto', 'idRol',
        'email', 'password'
    ];
    public function Ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'idCiudad');
    }
    public function Rol()
    {
        return $this->belongsTo(Rol::class, 'idRol');
    }
    public function Transacciones()
    {
        return $this->hasMany(Transaccion::class, 'idUsuario');
    }
}
