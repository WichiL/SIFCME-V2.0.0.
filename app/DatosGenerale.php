<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosGenerale extends Model
{
    protected $fillable = [
        'nomSolicitante', 'fecNacimiento', 'lugNacimiento', 'edad', 'sexo', 'estCivil', 'curp', 'rfc'
    ];
}
