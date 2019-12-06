<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
    protected $fillable = [
        'id',
        'nom1',
		'perContactar1',
		'ubicacion1',
		'tel1',
		'relacion1',
		'limCredito1',
		'yrsRelacion1',
		'nom2',
		'perContactar2',
		'ubicacion2',
		'tel2',
		'relacion2',
		'limCredito2',
		'yrsRelacion2',
		'nom3',
		'perContactar3',
		'ubicacion3',
		'tel3',
		'relacion3',
		'limCredito3',
		'yrsRelacion3',
        'solicitud_id'
    ];
}
