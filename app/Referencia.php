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
		'yrsRelacion1'
    ];
}
