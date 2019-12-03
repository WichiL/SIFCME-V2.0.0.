<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomicilioNegocio extends Model
{
    protected $fillable = [
        'id',
        'calNumNegocio',
		'colNegocio',
		'munNegocio',
		'cpNegocio',
		'domFiscal',
		'sector',
		'actEmpresarial',
		'proOfrece',
		'expEmpresario',
		'expActividad',
		'iniOperaciones',
		'supNegocio',
		'perteneceA'
    ];
}
