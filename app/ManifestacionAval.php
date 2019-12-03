<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManifestacionAval extends Model
{
    protected $fillable = [
        'id',
		'nomAval',
		'estCivilAval',
		'avalAnterior',
		'domAval',
		'munAval',
		'cpAval',
		'telAval',
		'parentesco',
		'valPatrimonio',
		'consPropiedad',
		'numRegistro',
		'folio',
		'vol',
		'secc',
		'fecInscripcion',
		'domPropiedad',
		'munPropiedad',
		'cpPropiedad'
    ];
}
