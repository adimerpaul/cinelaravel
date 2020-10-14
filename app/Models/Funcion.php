<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;
    protected $table = "funcion";
    protected $primaryKey = 'idfuncion';

    public function pelicula()
    {
        return $this->belongsTo('App\Models\Pelicula', 'idPelicula');
    }

    public function sala()
    {
        return $this->belongsTo('App\Models\Sala', 'idSala');
    }

}
