<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionBancaria extends Model
{
    protected $fillable = [
        'id',
        'tipCuenta',
		'numCuenta',
		'banco',
		'clbInterbancaria',
		'plaza',
		'sucursal',
		'ubicacion'
    ];
}
