<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
    protected $fillable = [
        'id',
        'recPropios',
		'recFondoPlata',
        'invTotal',
        'solicitud_id'
    ];
}
