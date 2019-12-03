<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $fillable = [
        'id',
		'diasLaborales',
		'atiende',
		'horario',
		'frente',
		'lado',
		'ubicacion',
		'color',
		'señalamiento'
    ];
}
