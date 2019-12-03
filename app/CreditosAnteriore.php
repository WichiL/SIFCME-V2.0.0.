<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditosAnteriore extends Model
{
    protected $fillable = [
        'id',
		'nomCredito1',
		'montoCredito1',
		'saldoActual1',
		'pago1',
		'mensual1',
		'yr1',
    ];
}
