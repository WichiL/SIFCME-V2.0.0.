<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosGenerale extends Model
{
    protected $fillable = [
       'id', 'solicitud_id', 'nomSolicitante', 'nomEmpresa', 'rfcEmpresa', 'fecNacimiento', 'estNacimiento', 'munNacimiento', 'edad', 'sexo', 'estCivil', 'curp', 'rfc'
    ];
}
