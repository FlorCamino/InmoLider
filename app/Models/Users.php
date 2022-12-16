<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
