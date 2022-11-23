<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTransaccion extends Model
{
    use HasFactory;

    protected $table = 'tipotransaccion';
    public $timestamps = false;
    protected $fillable = [
        'name', 'descripcion'
    ];

    public function Propiedades()
    {
        return $this->hasMany(Propiedad::class, 'idTipoTransaccion');
    }
}
