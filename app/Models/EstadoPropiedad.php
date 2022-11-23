<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPropiedad extends Model
{
    use HasFactory;
    protected $table = 'estadopropiedad';
    public $timestamps = false;
    protected $fillable = [
        'name', 'descripcion'
    ];
    public function Propiedades()
    {
        return $this->hasMany(Propiedad::class, 'idEstadoPropiedad');
    }
}
