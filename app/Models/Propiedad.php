<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedad';

    public $timestamps = false;

    protected $guarded = ['id'];

    protected $fillable = [
        'id', 'descripcion', 'fechaCreacion', 'direccion', 'barrio', 'CP',
        'idPropietario', 'cantHab', 'cantBanios', 'estacionamiento', 'idCiudad',
        'cantHab', 'cantBanios', 'aceptaMascotas', 'amoblado', 'idTipoTransaccion',
        'idEstadoPropiedad', 'costo', 'titulo'
    ];
    public function Ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'idCiudad');
    }
    public function EstadoPropiedad()
    {
        return $this->belongsTo(EstadoPropiedad::class, 'idEstadoPropiedad');
    }
    public function Propietario()
    {
        return $this->belongsTo(Propietario::class, 'idPropietario');
    }
    public function Transacciones()
    {
        return $this->hasMany(Transaccion::class, 'idPropiedad');
    }
    public function TipoTransaccion()
    {
        return $this->belongsTo(TipoTransaccion::class, 'idTipoTransaccion');
    }
    public function PropiedadImagenes()
    {
        return $this->hasMany(PropiedadImagenes::class, 'idPropiedad');
    }
}
