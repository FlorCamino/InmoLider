<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropiedadImagenes extends Model
{
    use HasFactory;

    protected $table = 'propiedadImagenes';

    public $timestamps = false;

    protected $fillable = [
        'id', 'idPropiedad', 'urlFoto', 'fechaDeCarga'
    ];

    protected $guarded = ['id'];

    public function Propiedad()
    {
        return $this->belongsTo(Propiedad::class, 'idPropiedad');
    }
}
