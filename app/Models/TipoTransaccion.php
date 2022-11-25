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
        'id', 'name', 'descripcion'
    ];
    protected $guarded = ['id'];
    public function Propiedades()
    {
        return $this->hasMany(Propiedad::class, 'idTipoTransaccion');
    }
    public function Transacciones()
    {
        return $this->belongsTo(Transaccion::class, 'idTipoTransaccion');
    }
}
