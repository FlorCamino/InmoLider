<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedad';

    protected $fillable = [
        'id', 'descripcion', 'fechaCreacion', 'direccion', 'barrio', 'CP',
        'idPropietario', 'cantHab', 'cantBanios', 'estacionamiento', 'idCiudad',
        'cantHab', 'cantBanios', 'aceptaMascotas', 'amoblado', 'idTipoTransaccion',
        'idEstadoPropiedad', 'costo'
    ];

    public function Ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'idCiudad');
        return $this->belongsTo(Periodo::class, 'idPeriodo');
        return $this->belongsTo(EstadoPropiedad::class, 'idEstadoPropiedad');
        return $this->belongsTo(TipoTransaccion::class, 'idTipoTransaccion');
    }
}
