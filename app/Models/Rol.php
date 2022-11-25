<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';
    public $timestamps = false;
    protected $fillable = [
        'id', 'nombre', 'descripcion'
    ];
    public function Usuario()
    {
        return $this->hasMany(Usuario::class, 'idRol');
    }
}
