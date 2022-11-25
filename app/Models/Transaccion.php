<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $table = 'transaccion';
    public $timestamps = false;
    protected $fillable = [
        'id', 'name', 'descripcion'
    ];
    public function TipoTransaccion()
    {
        return $this->belongsTo(TipoTransaccion::class, 'idTipoTransaccion');
    }
    public function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }
    public function Propiedad()
    {
        return $this->belongsTo(Propiedad::class, 'idPropiedad');
    }
}
