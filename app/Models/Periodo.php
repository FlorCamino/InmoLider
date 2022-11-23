<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;
    protected $table = 'periodo';
    public $timestamps = false;
    protected $fillable = [
        'idPeriodo', 'name', 'descripcion'
    ];
    public function Propiedades()
    {
        return $this->hasMany(Propiedad::class, 'idPeriodo');
    }
}
