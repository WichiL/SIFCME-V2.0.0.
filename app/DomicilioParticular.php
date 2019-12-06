<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomicilioParticular extends Model
{
    protected $fillable = [
        'id',
        'calNumPar',
		'colParticular',
		'munParticular',
		'cpParticular',
		'tipVivParticular',
		'antLocParticular',
		'antDomActualPar',
		'tipDomParticular',
		'valProParticular',
		'generales_id'
    ];
}
