<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionContacto extends Model
{
    protected $fillable = [
        'id',
        'email',
		'facTwitter',
		'telNegocio',
		'telParticular',
		'telCelular',		
		'telRecados'			
    ];
}
