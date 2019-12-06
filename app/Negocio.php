<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $fillable = [
        'id',
		'diasLaborales',
		'atiende',
		'abren',
		'cierran',
		'frente',
		'lado',
		'ubicacion',
		'color',
		'señalamiento',
        'solicitud_id'
    ];
}
