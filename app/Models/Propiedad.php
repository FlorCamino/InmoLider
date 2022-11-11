<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;

    protected $table = 'propiedad';

    public function Ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'idCiudad');
    }
}
