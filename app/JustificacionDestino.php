<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JustificacionDestino extends Model
{
    protected $fillable = [
        'id',
        'justCredito',
		'capTrabajo',
		'monto',
        'plazo'	,
		'generales_id'	
    ];
}
